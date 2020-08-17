<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Route::get('/emp', function(){
	return view('empreg');
});*/
//Route::get('/see', 'EmpregController@index');
//Route::post('/emp', 'EmpregController@edit')->name('article.detail');
Route::get('/see', function(){
	return view('empreg');
});

Route::resource('/reg', 'EmpregController', [
	'names'=> ['index' => 'reg',
			'store' => 'reg.store',
			'edit' => 'reg.edit',
			'update' => 'reg.update'
	]
]);
