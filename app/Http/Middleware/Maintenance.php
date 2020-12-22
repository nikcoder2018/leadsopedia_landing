<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;

class Maintanance {
    public function handle($request, Closure $next){
        if($request->is('admin*') || $request->is('maintanance')){
            return $next($request);
        }else{
            return new RedirectResponse(url('/maintanance'));
        }
    }
}