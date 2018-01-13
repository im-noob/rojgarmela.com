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

/* 
	user section starts here 
*/
Route::get('home',function(){
	return view('User.home');
});

Route::get('apply',function(){
	return view('User.apply');
});

Route::get('result',function(){
	return view('User.result');
});

Route::get('job',function(){
	return view('User.job');
});

Route::get('admit_card',function(){
	return view('User.admit_card');
});

Route::get('notice',function(){
	return view('User.notice');
});	

Route::get('about_us',function(){
	return view('User.about_us');
});																							

Route::get('team', function(){
	return view('User.team');
});


 
/* 
	user section ends here 
*/

?>