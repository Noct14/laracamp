<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class EnsureUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
     * @param  \Closure  $next
     * @return mixed
=======
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();
<<<<<<< HEAD
        if (($role == 'admin' && !$user->is_admin) || ($role == 'user' && $user->is_admin)) {
=======
        if(($role == 'admin' && !$user->is_admin) || ($role == 'user' && $user->is_admin))
        {
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
            abort(403);
        }
        return $next($request);
    }
}
