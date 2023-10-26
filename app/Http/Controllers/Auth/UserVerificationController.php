<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AddressVerification;
use App\Models\NicVerification;
use App\Models\PhotoVerification;
use App\Models\User;
use App\Models\UserVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UserVerificationController extends Controller
{
    public function viewUserVerificationPage()
    {
        $statusData = [
            'nic_status' => 'Not Submitted',
            'webcam_image_status' => 'Not Submitted',
            'address_status' => 'Not Submitted',
            'nic_text' => 'light badge-dark',
            'webcam_text' => 'light badge-dark',
            'address_text' => 'light badge-dark',
            'nic_style' => '#eeeeee',
            'webcam_style' => '#eeeeee',
            'address_style' => '#eeeeee',
        ];

        if (UserVerification::where('user_id', Auth::id())->exists()) {
            $user_vID_data = UserVerification::where('user_id', Auth::id())->first();
            $user_vID = $user_vID_data->id;

            if (NicVerification::where('v_id', $user_vID)->exists()) {
                $userVerificationData = User::join('user_verifications', 'users.id', '=', 'user_verifications.user_id')
                    ->join('nic_verifications', 'user_verifications.id', '=', 'nic_verifications.v_id')
                    ->select('nic_verifications.nic_status')
                    ->where('users.id', Auth::id())
                    ->first();

                $statusData['nic_status'] = $userVerificationData->nic_status;

                //Status style for nic verification
                if ($userVerificationData->nic_status === 'pending') {

                    $statusData['nic_style'] = '#fff9ed';
                    $statusData['nic_text'] = 'light badge-warning';
                } elseif ($userVerificationData->nic_status === 'verified') {

                    $statusData['nic_style'] = '#67f890';
                    $statusData['nic_text'] = 'light badge-success';
                } elseif ($userVerificationData->nic_status === 'rejected') {

                    $statusData['nic_style'] = '#ffedf0';
                    $statusData['nic_text'] = 'light badge-danger';
                }
            }

            if (PhotoVerification::where('v_id', $user_vID)->exists()) {
                $userVerificationData = User::join('user_verifications', 'users.id', '=', 'user_verifications.user_id')
                    ->join('photo_verifications', 'user_verifications.id', '=', 'photo_verifications.v_id')
                    ->select('photo_verifications.webcam_image_status')
                    ->where('users.id', Auth::id())
                    ->first();

                $statusData['webcam_image_status'] = $userVerificationData->webcam_image_status;

                //Status style for image verification
                if ($userVerificationData->webcam_image_status === 'pending') {

                    $statusData['webcam_style'] = '#fff9ed';
                    $statusData['webcam_text'] = 'light badge-warning';
                } elseif ($userVerificationData->webcam_image_status === 'verified') {

                    $statusData['webcam_style'] = '#67f890';
                    $statusData['webcam_text'] = 'light badge-success';
                } elseif ($userVerificationData->webcam_image_status === 'rejected') {

                    $statusData['webcam_style'] = '#ffedf0';
                    $statusData['webcam_text'] = 'light badge-danger';
                }
            }

            if (AddressVerification::where('v_id', $user_vID)->exists()) {
                $userVerificationData = User::join('user_verifications', 'users.id', '=', 'user_verifications.user_id')
                    ->join('address_verifications', 'user_verifications.id', '=', 'address_verifications.v_id')
                    ->select('address_verifications.address_status')
                    ->where('users.id', Auth::id())
                    ->first();

                $statusData['address_status'] = $userVerificationData->address_status;

                //Status style for address verification
                if ($userVerificationData->address_status === 'pending') {

                    $statusData['address_style'] = '#fff9ed';
                    $statusData['address_text'] = 'light badge-warning';
                } elseif ($userVerificationData->address_status === 'verified') {

                    $statusData['address_style'] = '#67f890';
                    $statusData['address_text'] = 'light badge-success';
                } elseif ($userVerificationData->address_status === 'rejected') {

                    $statusData['address_style'] = '#ffedf0';
                    $statusData['address_text'] = 'light badge-danger';
                }
            }
        }

        return view('auth.user-verification', compact('statusData'));
    }

    //====================================================Submit functions=========================================================

    public function submitNicVerificationDetails(Request $request)
    {
        $validated = $request->validate([
            'nic_no' => 'required|max:10',
            'nic_proof_front' => 'required',
            'nic_proof_back' => 'required',
        ]);

        if (UserVerification::where('user_id', Auth::id())->exists()) {

            $userVerificationData = User::join('user_verifications', 'users.id', '=', 'user_verifications.user_id')
                ->select('user_verifications.id')
                ->where('users.id', Auth::id())
                ->first();

            $validated['v_id'] = $userVerificationData->id;

            if ($request->nic_proof_front && $request->nic_proof_back) {

                $validated['nic_proof_front'] = $request->nic_proof_front->store('uploads/user-verfication/nic', 'public');
                $validated['nic_proof_back'] = $request->nic_proof_back->store('uploads/user-verfication/nic', 'public');
                $validated['nic_status'] = 'pending';

                NicVerification::create($validated);

                return Redirect::back()->with('success', 'NIC verification proof has been successfully submitted.');
            }
        } else {
            $userVerificationData = [
                'user_id' => Auth::id(),
                'status' => 'pending',
            ];

            $vID = UserVerification::create($userVerificationData);

            $validated['v_id'] = $vID->id;

            if ($request->nic_proof_front && $request->nic_proof_back) {

                $validated['nic_proof_front'] = $request->nic_proof_front->store('uploads/user-verfication/nic', 'public');
                $validated['nic_proof_back'] = $request->nic_proof_back->store('uploads/user-verfication/nic', 'public');
                $validated['nic_status'] = 'pending';

                NicVerification::create($validated);

                return Redirect::back()->with('success', 'NIC verification proof has been successfully submitted.');
            }
        }
    }

    public function submitPhotoVerificationDetails(Request $request)
    {
        $validated = $request->validate([
            'webcam_image' => 'required',
        ]);

        $webcamImage = $request->webcam_image;
        $folderPath = 'public/uploads/user-verfication/photo/';

        $webcamImage_parts = explode(';base64,', $webcamImage);
        //$webcamImage_type_aux = explode('user-verfication/photo/', $webcamImage_parts[0]);
        //$webcamImage_type = $webcamImage_type_aux[1];

        $webcamImage_base64 = base64_decode($webcamImage_parts[1]);
        $webcamImage_fileName = uniqid() . '.png';

        $webcamImage_file = $folderPath . $webcamImage_fileName;
        Storage::put($webcamImage_file, $webcamImage_base64);

        $validated['webcam_image'] = 'uploads/user-verfication/photo' . $webcamImage_fileName;

        if (UserVerification::where('user_id', Auth::id())->exists()) {

            $userVerificationData = User::join('user_verifications', 'users.id', '=', 'user_verifications.user_id')
                ->select('user_verifications.id')
                ->where('users.id', Auth::id())
                ->first();

            $validated['v_id'] = $userVerificationData->id;

            if ($request->webcam_image) {

                $validated['webcam_image_status'] = 'pending';

                PhotoVerification::create($validated);

                return Redirect::back()->with('success', 'Photo verification proof has been successfully submitted.');
            }
        } else {
            $userVerificationData = [
                'user_id' => Auth::id(),
                'status' => 'pending',
            ];

            $vID = UserVerification::create($userVerificationData);

            $validated['v_id'] = $vID->id;

            if ($request->webcam_image) {

                $validated['webcam_image_status'] = 'pending';

                PhotoVerification::create($validated);

                return Redirect::back()->with('success', 'Photo verification proof has been successfully submitted.');
            }
        }
    }


    public function submitAddressVerificationDetails(Request $request)
    {
        $validated = $request->validate([
            'unit_no' => 'required',
            'street_name' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'address_proof' => 'required',
        ]);

        if (UserVerification::where('user_id', Auth::id())->exists()) {

            $userVerificationData = User::join('user_verifications', 'users.id', '=', 'user_verifications.user_id')
                ->select('user_verifications.id')
                ->where('users.id', Auth::id())
                ->first();

            $validated['v_id'] = $userVerificationData->id;

            if ($request->address_proof) {

                $validated['address_proof'] = $request->address_proof->store('uploads/user-verfication/address', 'public');
                $validated['address_status'] = 'pending';

                AddressVerification::create($validated);

                return Redirect::back()->with('success', 'Address verification proof has been successfully submitted.');
            }
        } else {
            $userVerificationData = [
                'user_id' => Auth::id(),
                'status' => 'pending',
            ];

            $vID = UserVerification::create($userVerificationData);

            $validated['v_id'] = $vID->id;

            if ($request->address_proof) {

                $validated['address_proof'] = $request->address_proof->store('uploads/user-verfication/address', 'public');
                $validated['address_status'] = 'pending';

                AddressVerification::create($validated);

                return Redirect::back()->with('success', 'Address verification proof has been successfully submitted.');
            }
        }
    }


    //====================================================Re-submit functions=========================================================

    public function reSubmitNicVerificationDetails(Request $request)
    {
        $validated = $request->validate([
            'nic_no' => 'required|max:10',
            'nic_proof_front' => 'required',
            'nic_proof_back' => 'required',
        ]);

        if (UserVerification::where('user_id', Auth::id())->exists()) {

            $userVerificationData = User::join('user_verifications', 'users.id', '=', 'user_verifications.user_id')
                ->select('user_verifications.id')
                ->where('users.id', Auth::id())
                ->first();

            $vID = $userVerificationData->id;
            $validated['v_id'] = $vID;

            if ($request->nic_proof_front && $request->nic_proof_back) {

                $validated['nic_proof_front'] = $request->nic_proof_front->store('uploads/user-verfication/nic', 'public');
                $validated['nic_proof_back'] = $request->nic_proof_back->store('uploads/user-verfication/nic', 'public');
                $validated['nic_status'] = 'pending';

                NicVerification::where('v_id', $vID)->update($validated);

                return Redirect::back()->with('success', 'NIC verification proof has been successfully re-submitted.');
            }
        } else {
            return Redirect::back()->with('failed', 'Something went wrong please contact flynow support.');
        }
    }

    public function reSubmitPhotoVerificationDetails(Request $request)
    {
        $validated = $request->validate([
            'webcam_image' => 'required',
        ]);

        $webcamImage = $request->webcam_image;
        $folderPath = 'public/uploads/user-verfication/photo/';

        $webcamImage_parts = explode(';base64,', $webcamImage);
        //$webcamImage_type_aux = explode('user-verfication/photo/', $webcamImage_parts[0]);
        //$webcamImage_type = $webcamImage_type_aux[1];

        $webcamImage_base64 = base64_decode($webcamImage_parts[1]);
        $webcamImage_fileName = uniqid() . '.png';

        $webcamImage_file = $folderPath . $webcamImage_fileName;
        Storage::put($webcamImage_file, $webcamImage_base64);

        $validated['webcam_image'] = 'uploads/user-verfication/photo' . $webcamImage_fileName;

        if (UserVerification::where('user_id', Auth::id())->exists()) {

            $userVerificationData = User::join('user_verifications', 'users.id', '=', 'user_verifications.user_id')
                ->select('user_verifications.id')
                ->where('users.id', Auth::id())
                ->first();

            $vID = $userVerificationData->id;
            $validated['v_id'] = $vID;

            if ($request->webcam_image) {

                $validated['webcam_image_status'] = 'pending';

                PhotoVerification::where('v_id', $vID)->update($validated);

                return Redirect::back()->with('success', 'Photo verification proof has been successfully re-submitted.');
            }
        } else {
            return Redirect::back()->with('failed', 'Something went wrong please contact flynow support.');
        }
    }


    public function reSubmitAddressVerificationDetails(Request $request)
    {
        $validated = $request->validate([
            'unit_no' => 'required',
            'street_name' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'address_proof' => 'required',
        ]);

        if (UserVerification::where('user_id', Auth::id())->exists()) {

            $userVerificationData = User::join('user_verifications', 'users.id', '=', 'user_verifications.user_id')
                ->select('user_verifications.id')
                ->where('users.id', Auth::id())
                ->first();

            $vID = $userVerificationData->id;
            $validated['v_id'] = $vID;

            if ($request->address_proof) {

                $validated['address_proof'] = $request->address_proof->store('uploads/user-verfication/address', 'public');
                $validated['address_status'] = 'pending';

                AddressVerification::where('v_id', $vID)->update($validated);

                return Redirect::back()->with('success', 'Address verification proof has been successfully re-submitted.');
            }
        } else {
            return Redirect::back()->with('failed', 'Something went wrong please contact flynow support.');
        }
    }
}
