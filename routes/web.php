<?php

include_once(__DIR__.'/amritesh_kumar.php');
include_once(__DIR__.'/awdhesh.php');
include_once(__DIR__.'/Nishant_kumar.php');


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
/* basic no */
Route::get('/',function(){
	return view('User.home');
});

Route::get('/index', function(){
	return view('User.home');
});