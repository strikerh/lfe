<?php

class SessionsController extends \BaseController {



	public function index()
	{
		
		
		  return Redirect::route('home');
			
	}

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

		if($attempt) return Redirect::intended('/')->with('flash_msg','Your have been logged in');
		else return View::make('login')->with('flash_msg','your user name or password are wrong, Please Try Again');
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
		 return Redirect::Route('sessions.index')->with('flash_msg','Your have been logged Out');
	}


}
