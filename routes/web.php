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

