<?php

namespace App\Http\Middleware;

use Closure;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLang
{
    use ApiResponder;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lang = $request->header('lang');
        if (!$lang) {
            return $this->error("Invalid Language");
        }
        app()->setLocale($lang);
        return $next($request);
    }
}
