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

/*
Route::get('/', function(){

return "hello gold";

}); */


Route::filter('auth', 'UsersController@filteRouteProfile');



Route::get('/', ['as'=>'h','uses'=>'UsersController@home']);
Route::get('home', ['as'=>'home','uses'=>'UsersController@home']);
Route::get('login', ['as'=>'login','uses'=>'UsersController@loginPage']);
Route::get('logout', ['as'=>'logout','uses'=>'UsersController@logout']);
Route::get('profile', ['as'=>'profile','uses'=>'UsersController@profile']);
Route::get('dashboard', ['as'=>'dashboard','uses'=>'UsersController@dashboard']);

Route::post('login', 'UsersController@postLogin');
Route::post('dashboard', 'ArticleController@dashboardInsertData');
