<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {

        $loggedRole = auth()->user()->role;

        if (!auth()->check()) {
            return redirect('login');
        }

        if ($loggedRole != $role) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
