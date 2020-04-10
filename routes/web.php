<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function()
{
	return view('home.index');
});


Route::get('/error', function()
{
	return view('error');
});


Route::get('/login', 'Login@index');
Route::post('/login', 'Login@verify');


Route::get('/signup', 'Signup@index');
Route::post('/signup', 'Signup@signup');

Route::get('/logout', 'Logout@index');

Route::group(['middleware'=>['session']], function(){


	Route::group(['middleware'=>['admin']], function(){
		
		Route::get('/admin', 'AdminHome@index');
		Route::get('/admin/profile', 'AdminHome@profile');
		Route::post('/admin/profile', 'AdminHome@profileUpdate');
		Route::get('/admin/mamberlist', 'AdminHome@userlist');
		Route::get('/admin/mamberlist/delete/{id}', 'AdminHome@deleteUser');

	});

	Route::group(['middleware'=>['user']], function(){
		Route::get('/user', function()
		{
			echo "User type working";
		});
	});

	
});