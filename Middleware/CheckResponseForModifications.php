<?php

namespace Satupersen\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class CheckResponseForModifications
{
    /**
     * Handle an incoming request.
     *
     * @param  \Satupersen\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof Response) {
            $response->isNotModified($request);
        }

        return $response;
    }
}
