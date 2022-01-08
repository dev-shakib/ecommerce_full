<?php

namespace Modules\Core\Http\Middleware;

use Closure;
use Modules\Core\Http\Requests\Request;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, Closure $next)
    {
        if ($request->wantsJson()) {
            if(auth('api')->check()){
                return $next($request);
            }
        }elseif(auth()->check()){
            return $next($request);
        }

        $url = url()->full();

        if (! $request->isMethod('get')) {
            $url = url()->previous();
        }

        session()->put('url.intended', $url);

        if ($request->ajax() || $request->wantsJson()) {
            abort(403, 'Unauthenticated.');
        }

        return redirect()->route('login');
    }
}
