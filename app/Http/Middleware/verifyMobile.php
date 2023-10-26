<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class verifyMobile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect('login');
        }
        // Get the current user
        $user = auth()->user();

        // Check if the 'mobile_verified_at' column is null
        if ($user && is_null($user->mobile_verified_at)) {
            return redirect()->route('mobile-verification');
        }

        return $next($request);
    }
}
