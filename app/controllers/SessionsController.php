<?php

class SessionsController extends \BaseController {



	public function create()
	{
		return View::make('sessions.create'); 
	}



	public function store()
	{
		//
		
		$input = Input::all();
		$attempt = Auth::attempt([
			'username' => $input['UserName'],
			'password' => $input['Password'],
			]);

		if($attempt) return  Auth::user()->email;// Redirect::intended('/');
		else return "faild";
		// if (Auth::attempt(Input::only('UserName','password')))
		// {

		// 	return "ghhhjhjhj";
		// }
		// return View::make('sessions.store'); 
		//return dd($attempt); 
	}



	public function destroy()
	{
		//
		Auth::logout();
		return 'logedOut';
	}


}
