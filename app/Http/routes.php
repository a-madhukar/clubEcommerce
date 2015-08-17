<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

Route::get('/','HomeController@index'); 
Route::get('home','HomeController@home'); 
Route::post('login','AuthenticateController@login'); 

Route::resource('category','CategoriesController'); 
Route::resource('product','ProductsController'); 


//api 
Route::post('testing','ApiController@test'); 
Route::get('name/{name}','ApiController@name'); 


