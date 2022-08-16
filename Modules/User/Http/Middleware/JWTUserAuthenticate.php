<?php

namespace Modules\User\Http\Middleware;

use App\Helpers\ResponseHelpers;
use Closure;
use Illuminate\Http\Request;

class JWTUserAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth('user')->check()){
            return  ResponseHelpers::authenticateErrorResponse();
        }
        return $next($request);
    }
}
