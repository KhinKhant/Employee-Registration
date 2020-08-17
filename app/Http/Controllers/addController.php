<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class addController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function add(){
    	return view('form');
    }
    function save(){
    	return view('save');
    }
    function update(){
    	return view('update');
    }
    function delete(){
    	return view('delete');
    }
}
