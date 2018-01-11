<?php
/* awdhesh */
Route::get('/home', function () {
    return view('Rogarmela_Registration.rojgarmela_student_home');
});
Route::get('/notice', function () {
    return view('Rogarmela_Registration.rojgarmela_student_notice');
});
Route::get('/about_us', function () {
    return view('Rogarmela_Registration.rojgarmela_student_about');
});
Route::get('/registration', function () {
    return view('Rogarmela_Registration.rojgarmela_student_registration');
});
Route::get('/form', function () {
    return view('Rogarmela_Registration.rojgarmela_student_form');
});
Route::get('/contact', function () {
    return view('Rogarmela_Registration.rojgarmela_student_contact_us');
});


