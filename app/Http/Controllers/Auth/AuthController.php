<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SMS\SMSController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate()
    {
        $smsController = new SMSController();
        $role = Auth::user()->role;

        if ($role == '3') {
            return redirect()->route('sub-agent.home');
        } else if ($role == '4')
            return redirect()->route('user.dashboard');
        else
            abort(403, 'You Need Activate your Account..!');
    }

    public function mobileVerification()
    {
        return view('auth.mobile-verification');
    }

    public function verifyOtp(Request $request) {
        $enteredOtp = $request->n1.$request->n2.$request->n3.$request->n4.$request->n5.$request->n6;
        // dd($enteredOtp);

        //verify OTP
        if (session('otp') != $enteredOtp) 
            return redirect()->route('mobile-verification')->withErrors(['otp' => 'You entered OTP code is invalid'])->withInput();

        
        //clear OTP in session
        session()->forget('otp');

        //create mobile_verified_at to pass middlware
        User::where('id', Auth::user()->id)->update([
            'mobile_verified_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('/dashboard');
    }

    // function genereateOtp() {
    //     return $otp = mt_rand(100000, 999999);
    // }
}
