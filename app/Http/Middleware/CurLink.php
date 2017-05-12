<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Support\Facades\Route;
use Request;

class CurLink
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
        $cur_prefix = Route::getCurrentRoute()->getPrefix();
        $cur_link   = Request::path();

        if ($cur_prefix) {
            $cur_link = $this->str_replace_once($cur_prefix . "/", "", $cur_link);
        }

        $arrLocales = config('app.locales');
        $mask = implode('|', array_keys($arrLocales));

        $cur_link = preg_replace("/^\/{1}|($mask)$/", "", $cur_link);

        view()->share('cur_link',   $cur_link);

        return $next($request);
    }

    private function str_replace_once($search, $replace, $subject)
    {
        $firstChar = strpos($subject, $search);
        if($firstChar !== false)
        {
            $subject = substr_replace($subject, $replace, $firstChar , strlen($search));
        }
        return $subject;

    }
}
