<?php

class UsersController extends BaseController {


	public function home()
	{
     	$articles = Article::where('id', '=', 1)->get();
        return View::make('home', compact('articles'));  
	}

	public function loginPage()
	{

	if (!(Auth::check()))
    {
        return View::make('login');
    }
    else
    {
        return View::make('home')->with('message', '<h1>You are already logged in !</h1>');  
    }	

	}

	public function logout()
	{
		Auth::logout();
		return View::make('login')->with('flash_notice', 'You are successfully logged out.');//
	}

	public function profile()
	{
		if(Auth::check())
		{
		return View::make('profile');//
	}
	else{
		return Redirect::route('home')->with('message', '<h2>You must login</h2>');
	}
	}

	public function dashboard()
	{
		if(Auth::check())
		{
		$articles = Article::where('id', '=', 1)->get();
        return View::make('dashboard', compact('articles'));
	}
	else{
		return Redirect::route('home')->with('message', '<h2>You must login</h2>');
	}
	}


	public function filteRouteProfile()
	{
    if (Auth::guest()) {
        return Redirect::to('login')->with('flash_error', 'You must be logged in to view this page.')->withInput();
	}
    }

	public function postLogin()
	{
        $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        
        if (Auth::attempt($user)) {
            return Redirect::route('home')->with('message', '<h4>You are logged in</h4>');
        }

        return Redirect::route('login')->with('flash_error', 'Your username/password combination was incorrect.');
	}

}
