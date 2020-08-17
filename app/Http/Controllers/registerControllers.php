<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class registerControllers extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /*public function register(Request $request)
    {
    	$url=$request->method();
    	//return $url;
    
    if($request->isMethod('get')){
    	return true;
    }
	}*/
	public function register(Request $request){
		return view('register');
		//$name= $request->query('password');
		//return $name;
		
	}
	function register_post(Request $request){
		$input=$request->all();
		return $input;
		//$email=$request->input('email');
		//$password=$request->input('password');
		//return "Email :". $email. "<br>". "Password:".$password;
		
		//exist Textbox 
		/*if($request->has('email','password')){
			$email="Email exist";
			return $email;
		}*/
 
		//exist more than one textbox 
		/*if($request->has(['email','password'])){
			$email="Email exist";
			//$password="Ok";
			return $email;
		}else{
			$email="Error!";
			return $email;
		}*/


		/*if($request->hasAny(['password','email'])){
			$email="OK";
			return $email;
		}else{
			$email="Error!";
			return $email;
		}*/

		/*if($request->hasAny('email','name')){
			$email="OK";
			return $email;
		}else{
			$email="Error!";
			return $email;
		}*/

		//Check value in textbox
		/*if($request->filled(['email','password'])){
			return "OK";
		}else{
			return "Error!";
		}*/
		//$input=$request->only('email');
		//return $input;
		//$input=$request->except('email');
		//return $input;

		//check miss only name
		if($request->missing('name')){
			return "miss";
		}else{
			return "Found";
		}
		}
		
	}

