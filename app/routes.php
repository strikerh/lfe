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
//Route::get('/test',test1());

 
Route::get('/login',['as'=>'login', 'SessionsController@create'])->before('guest');
Route::get('/logout',['as'=>'logout', 'SessionsController@destroy'])->before('auth');
Route::resource('/sessions', 'SessionsController',['only' =>['index','store','create','destroy']]);

Route::get('/',['as'=>'home','PagesController@home']);
Route::get('/about',['as'=>'pages.about','PagesController@about']);
Route::get('/contact',['as'=>'pages.contact','PagesController@contact']);
Route::get('/newrelease',['as'=>'pages.newrelease','PagesController@newrelease']);


Route::get('/series', 'BooksController@index');
Route::get('/{category}', 'BooksController@show');
Route::get('/{category}/{book}', 'BooksController@showBook');
Route::get('/{category}/{book}/ebook', 'BooksController@showEbook');
Route::get('/{category}/{book}/interactive', 'BooksController@showInteractive');






















