/*Route::get('/', function () {
    return view('welcome');
   // echo "hello";
});
Route::get('/foo', function () {
    return view('hello');
});
Route::get('/user', 'UserControllers@index');

Route::get('/articles/detail', function () {
    return 'Article List';
});

Route::get('/articles/detail', function () {
    return 'Article Detail';
})->name('article.detail');

Route::get('/articles/more', function () {
    return redirect()-> route('article.detail');
});

Route::get('/articles/more/mdy/{id}', function () {
    return redirect()-> route('article.detail');
});

//Test Route
Route::get('/students', function(){
	return view('hello');
});

Route::get('/students/girl', function(){
	return view('girls');
});

Route::get('/students', 'sumController@sum');*/

/*Route::get('/user', 'addController@add');

Route::get('/user/save', 'addController@save');

Route::get('/user/update', 'addController@update');

Route::get('/user/delete', 'addController@delete');

Route::post('/user', function (){
	switch ($_REQUEST['action']){
		case 'save':
		//return redirect()->action('addController@save');
		return redirect('/user/save');
		break;

		case 'update':
		//return redirect()->action('addController@update');
		return redirect('/user/update');
		break;

		case 'delete':
		//return redirect()->action('addController@delete');
		return redirect('/user/delete');
		break;
	}
});

Route::get('/register', 'registerControllers@register');
Route::post('/register', 'registerControllers@register_post')->name('register_post');*/
//Route::get('/reg', 'studentControllers@register');
//Route::get('/reg', 'studentControllers@register');

//'home' pay yin home nl run
//Route::get('home', function () {
   /* return response('Hello', 200)
                  ->header('text', 'text/plain');
    return response("Mg")
            ->header('Content-Type', 'text/html')
            ->header('X-Header-One', 'jj')
            ->header('X-Header-Two', 'Header Value');

});*/

/*Route::get('/register/more', function () {
    return redirect()-> route('register_post');
    
});*/

//go link
/*Route::get('/reg', function () {

    return redirect()-> away('https://www.google.com');
});*/

/*Route::get('/register/more', function () {
    return redirect()-> away('https://www.YouTube.com');
});*/

// Route::get('/reg', 'employeeControllers@register');

// Route::get('/reg', function () {
//     return view('employee');
   
// });
// //Route::post('/reg', 'employeeControllers@employee');
// Route::post('/reg', 'employeeControllers@employee')->name('employee_post');
