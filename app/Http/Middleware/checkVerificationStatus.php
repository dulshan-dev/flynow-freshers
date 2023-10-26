<?php

namespace App\Http\Middleware;

use App\Models\UserVerification;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkVerificationStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the current user
        $user = auth()->user();

        if (!auth()->check()) {
            return redirect('register');
        }

        $verifications = UserVerification::where("user_id", $user->id)->first();

        // dd($verifications->status);
        // Check if the 'mobile_verified_at' column is null
        if ($verifications->status != 'verified') {
            return redirect(route('user.verify'));
        }

        return $next($request);
    }
}
