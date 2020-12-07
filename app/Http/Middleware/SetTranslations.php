<?php

namespace App\Http\Middleware;

use Closure;

class SetTranslations
{
    public function handle($request, Closure $next)
    {
        $trans = $request->route('trans');
        if (!empty($trans)) {
            app()->setLocale($trans);
        }
        
        return $next($request);
    }
}
