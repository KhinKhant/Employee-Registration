<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class studentControllers extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
    public function register(Request $request){
		return view('student');
	}
 }
