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

Route::get('/', 'HomeController@index');

Route::get('/cart', 'HomeController@cart');

Route::get('/admin', 'DashboardController@index');


//Route::get('category', 'CategoryController@index');

// Đăng ký
Route::controller('product', 'ProductController');
Route::controller('category', 'CategoryController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(array('middleware' => 'auth'), function(){
    Route::controller('filemanager', 'FilemanagerLaravelController');
});


Route::controller('/','Auth\AuthController');