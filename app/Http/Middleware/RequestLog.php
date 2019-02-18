<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class RequestLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $log = [
            'path' => $request->path(),
            'method' => $request->method(),
            'ip' => $request->ip(),
            'input' => $request->all(),
            'url' => $request->url(),
            'content' => $request->all(),
        ];

        Log::channel( 'request' )->info( json_encode( $log, JSON_UNESCAPED_UNICODE ) );
        return $next($request);
    }
}
