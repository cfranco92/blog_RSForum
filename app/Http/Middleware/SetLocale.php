<?php
namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if(Session::get('applocale')){
            App::setLocale(Session::get('applocale'));
        }
        return $next($request);
    }
}