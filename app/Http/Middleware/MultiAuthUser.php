<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MultiAuthUser  
{
    public function handle(Request $request, Closure $next, $userType)
    {
        if (auth()->user()->type == $userType) {
            return $next($request);
        }

        return response()->json(['message' => 'You do not have permission to access this page.']);
    }
}