<?php
/*
|-------------------------------|
|rotes defined by aarav 		|
|_______________________________|
|-------------------------------|
|
|
*/
/* admin */
Route::get('Dashboard',function(){
	return view('Admin.Dashboard');
})->middleware('allow');
 
Route::get('ApplyList','Admin\apply_list_controller@applylist')->middleware('allow');
 
Route::get('/ApplyHistory',function(){
	return view('Admin.ApplyHistory');
})->middleware('allow');

Route::get('/ApplyLink/{id}',"Admin\ApplyLinkSecure@linksecure")->middleware('allow');

 Route::get('/Adminlg',function(){
	return view('Admin.login');
});

Route::post('/checkingp','admin_login_c@checkPassword');
Route::get('/Adminlg',function(){
	return view('Admin.login');
});

Route::post('/checkingp','Admin\admin_login_c@checkPassword');


Route::post('/contact2',"main\contact_us@contact");

?>