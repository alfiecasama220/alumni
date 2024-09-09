<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Session;

class GlobalMessage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // SUCCESS MESSAGE
        Session::flash('registerSuccess', 'Success! Your data has been added');
        Session::flash('logoutSuccess', 'Success! You have been logged out');

        Session::flash('approveSuccess', 'Success! You approved the user');
        Session::flash('rejectSuccess', 'Success! You rejected the user');

        // FAILED MESSAGE
        Session::flash('registerFailed', 'Failed! Your data is not added');

        Session::flash('approvalFailed', 'Failed! Try again later');
        return $next($request);
    }
}
