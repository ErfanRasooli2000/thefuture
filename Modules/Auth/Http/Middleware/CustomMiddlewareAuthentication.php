<?php

namespace Api\Auth\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class CustomMiddlewareAuthentication extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $request->headers->set('Accept' , 'application/json');

        if (in_array('sanctum' , $guards))
        {
            if ($token = $request->cookie('token'))
                $request->headers->set('Authorization' , "Bearer $token");
        }

        $this->authenticate($request, $guards);

        return $next($request);
    }
}
