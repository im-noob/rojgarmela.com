<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class aunthentication
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
            if($request->session()->has('username') && $request->session()->has('user_type')){
                $user_type = $request->session()->get('user_type');
                if($user_type=="user"){
                    echo "welcome user";
                }else if($user_type=="admin"){
                    echo "welcome admin";
                }else if($user_type=="sadmin"){
                    echo "welcome superAdmin";
                }else{
                    return Redirect::to("/Adminlg");
                }
            }
            else{
                return Redirect::to("/index");
            }
        return $next($request);
    }
}
