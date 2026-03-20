<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->role_id !== 1) {
            return response()->json([
                "error" => "Access Denied. Only admin",
            ], Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
