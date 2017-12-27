<?php
/*
|-------------------------------|
|rotes defined by aarav 		|
|_______________________________|
|-------------------------------|
|
|
*/
/*
	Admin Section Start Here 
*/
///// Applicatin Seciton /////
Route::get('Dashboard',function(){
	return view('Admin.Dashboard');
})->middleware('allow');

Route::get('NewPost', function(){
	return view('Admin.NewPost');
})->middleware('allow');

Route::get('CreateJob', function(){
	return view('Admin.CreateJob');
})->middleware('allow');

Route::get('ViewPartiUser','Admin\apply_list_controller@ViewPartiUser')->middleware('allow');
 
Route::get('/ViewListUser',function(){
	return view('Admin.ViewListUser');
})->middleware('allow');


///// Login Section ///// 
Route::post('/checkingp','admin_login_c@checkPassword');

Route::get('/Adminlg',function(){
	return view('Admin.login');
});

Route::post('/checkingp','Admin\admin_login_c@checkPassword');

///// help section /////
Route::post('/contact2',"main\contact_us@contact");

/*
	Admin Section End Here 
*/

?>