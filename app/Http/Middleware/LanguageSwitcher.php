<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class LanguageSwitcher
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
        $lang = $request->session()->get('language', 'en');
        if(Auth::User()!=null)
        {
            App::setLocale(Auth::user()->language);
            if(Auth::User()->language == "ar")
            {
                View::share('rtl', 'true');
            }
        }else if (isset($lang)){
            App::setLocale($lang);
            if($lang == 'ar'){
                View::share('rtl', 'true');
            }
        }
        return $next($request);
    }
}
