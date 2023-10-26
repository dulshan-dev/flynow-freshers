<?php

namespace App\Http\Controllers\SMS;

use App\Http\Controllers\Controller;
use App\Providers\NotifyServiceProvider;
use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function sendOtp($receiver , $otp)
    {
        $notifyLkService = new NotifyServiceProvider();
        $message = 'Your FlyNow OTP Code is : '.$otp;
        $response = $notifyLkService->sendNotifySms($receiver , $message);
        
        // Handle the response from Notify.lk and return a JSON response
    }
}
