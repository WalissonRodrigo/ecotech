<?php
namespace App\Http\Middleware;

use Closure;

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
        /*
            if (!$request->secure() && env('APP_ENV') === 'prod') {
                return redirect()->secure($request->getRequestUri());
            }
            */
            URL::forceSchema('http');
            return $next($request); 
    }
}