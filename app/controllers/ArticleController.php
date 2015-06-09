<?php

class ArticleController extends BaseController {


	public function dashboardInsertData()
	{
	$dash_data = Input::all(); // retrives all the form data to the variable $dash_data
	$rules = array('articletitle' => ' required | min:5 | max:30 ', 'articlebody' => ' required | min:200 | max:20000 '); // Rules for input validation
	$validator = Validator::make($dash_data, $rules); // use laravel inbuilt class methods to compare data and rules

	if($validator->fails()){

		return Redirect::route('dashboard')->withErrors($validator); // returns dashboard with errors
	}
	    $article = Article::findOrNew(1); // finds the record with primary key id 1, if not presents new record with pk id 1 is created

        $article->articletitle = Input::get('articletitle'); // takes title text form the form i/p and adds it to articletitle instance (which is linked to the articletitle column in the DB)
        $article->articlebody = Input::get('articlebody'); // takes body text form the form i/p and adds it to articlebody instance (which is linked to the articlebody column in the DB)
        $article->save(); // saves(inserts) the data to the database table
        return Redirect::route('home'); // redirects to home.blade.php
	}
	

}
