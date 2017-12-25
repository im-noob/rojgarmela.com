<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Redirect;

class admin_login_c extends Controller
{
    function checkPassword(Request $request){

  			$user = $_POST["mail"];
  			$password = $_POST["pass"];
  			$pass1 = "beeru123";
        $pass2 = "@tubelight";
  			 $temp = Hash::make($pass1);
         $temp2 = Hash::make($pass2);
  			//$dbpass = security_m::where('email_id',$user)->value('password');

  			if(Hash::check($password,$temp)){
  				session(['username'=>$user,'user_type'=>'admin']);

  				return Redirect::To('/Dashboard');
  			}
        else if(Hash::check($password,$temp2)){
          session(['username'=>$user,'user_type'=>'admin']);
          return Redirect::To('/Dashboard');
        }
  			else {
      		$request->session()->flash('msg','UserName or password may be incorrect');
      		return Redirect::To('/Adminlg')->withInput($request->all());
  			}

  		}
}
