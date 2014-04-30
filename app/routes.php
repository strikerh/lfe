<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/test',test1());

Route::get('/set', function(){
    Session::put('session', 'working');
});

Route::get('/get', function(){
    return Session::get('session');
});

 
Route::get('/login', 'SessionsController@create');
Route::get('/logout','SessionsController@destroy');
Route::resource('/sessions', 'SessionsController');

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/newrelease','PagesController@newrelease');


Route::get('/series', 'BooksController@index');
Route::get('/{category}', 'BooksController@show');
Route::get('/{category}/{book}', 'BooksController@showBook');
Route::get('/{category}/{book}/ebook', 'BooksController@showEbook');
Route::get('/{category}/{book}/interactive', 'BooksController@showInteractive');






function test1(){
	//return View::make('home');
	
/*	User::create([
		'FirstName' => 'hazem' ,
		'LastName' => 'nabil' ,
		'Country' => 'egypt' ,
		'DateOfBirth' => '1985-12-24', 
		'SchoolName' => 'saint-marc' ,
		'Role' => 'sdf' ,
		'Postion' => 'sdfsdf', 
		'UserName' => 'haz3', 
		'Password' => Hash::make('qwe') ,
		'RecoveryNumber' => 'qwe', 
		'Level_ID' => '1'
		]);*/
/*$hh = user::where('email', 'haz@hh.com')->firstOrFail();
 
	return dd(Hash::check('qwe', $hh->password));;*/

$attempt1 = Auth::attempt([
			'email' => 'haz@hh.com',
			'password' => 'qwe'
			]);
return dd($attempt1);
	// return dd(App::environment());


}




