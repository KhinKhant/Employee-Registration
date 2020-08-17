<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class employeeControllers extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
    public function register(Request $request){
		return view('student');
	}
	public function employee(Request $request){

		/*$var="Please Fill: ";
		if($_POST['id']==null){
			$var.="id";
		}
		
		if($_POST['name']==null){
			$var.=" Name,";
		}
		
		if($_POST['password']==null){
			$var.=" Password, ";
		}

		if($_POST['date']==null){
			$var.=" Date, ";
		}

		if($_POST['NRC']==null){
			$var.=" NRC, ";
		}

		if($_POST['Nationality']==null){
			$var.=" Nationality ";
		}
		return $var;*/
		$st="Please fill: ";
		$arr=$request->all();
		foreach($arr as $key=> $value){

		if($value==null){
			$st.= $key. ",";
		}
	}return $st;
}
}

