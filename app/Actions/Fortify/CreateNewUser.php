<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\SubAgencies;
use App\Models\UserVerification;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\SMS\SMSController;
use Laravel\Fortify\Contracts\CreatesNewUsers;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        $smsController = new SMSController();
        //validate mobile without + and with 94 
        $mobileNo = str_replace(['+', ' '], '', $input['phone']);
        //generate user name
        $userName = 'FN-'.$input['surname'].'-'.uniqid();


        $validate = Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            // 'package' => ['required'],
            'phone' => ['required', 'string', 'min:11', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();


        //send OTP code
        $otp = mt_rand(100000, 999999);
        session(['otp' => $otp]);
        $response = $smsController->sendOtp($mobileNo, $otp);

        $user = User::create([
            'first_name' => $input['first_name'],
            'surname' => $input['surname'],
            'company_name' => $input['company_name'],
            'name' => 'FT-#123*+',
            'email' => $input['email'],
            // 'package' => $input['package'],
            'phone' => $input['phone'],
            'password' => Hash::make($input['password']),
        ]);

        SubAgencies::create([
            'user_id' => $user->id,
            'agency_name' => $input['company_name'],
        ]);

        UserVerification::create([
            'user_id' => $user->id,
            'status' => 'Not Submited',
        ]);

        return $user;
    }
}