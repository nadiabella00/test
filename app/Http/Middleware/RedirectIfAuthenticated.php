<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect; // Add this import
use App\Providers\RouteServiceProvider;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                // Get authenticated user
                $user = Auth::guard($guard)->user();

                // Check user type and redirect accordingly
                if ($user->type === 0) { // Assuming '0' is the identifier for 'super-admin'
                    return redirect::route('admin.index'); // Use Redirect::route() here
                }

                // For regular users, redirect to a default home page
                return redirect(RouteServiceProvider::HOME); 
            }
        }

        return $next($request); // Continue to the next middleware if not authenticated
    }
}
