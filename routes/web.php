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
Route::get('/getname', 'nameController@findname');

Route::get('/', 'PagesController@getIndex');
Route::get('/about', 'PagesController@getAbout');
Route::get('/users', 'usersController@showUsers');

Route::get('/appointments', 'appointmentsController@showAppointments'); // admin appointments view

Route::get('/studentappointments', 'studentAppointmentsController@index'); //student appointments view controller

Route::get('/studentprofile/{profile}', 'PDFController@studentprofile'); //profile to pdf controller

Auth::routes();

// Route::prefix('admin')->group(function(){
// 	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
// 	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
// 	Route::get('/', 'AdminController@index')->name('admin.dashboard');
// });


Route::get('/profile', 'ProfileController@getProfile');
Route::post('/user_avatar_submit', 'ProfileController@avatar_upload'); // avatar upload controller

// Route::get('/home', 'HomeController@index');	

Route::resource('students', 'StudentsController'); // Student Routes
Route::resource('father', 'FatherController'); // Father Routes
Route::resource('mother', 'MotherController'); // Mother Routes
Route::resource('guardian', 'GuardianController'); // Guardian Routes
Route::resource('sibling', 'SiblingController'); // Sibling Routes
Route::resource('schoolrecord', 'SchoolRecordController'); // School Record Routes
Route::resource('orgs', 'OrgsController'); // Orgs Routes
Route::resource('aboutstudent', 'AboutController'); // About Student Routes
Route::resource('violation', 'ViolationController'); // About Violation Routes
Route::resource('appointments', 'AppointmentsController'); // Appointmenst Routes
Route::resource('absent', 'AbsentController'); // Absent Routes

// Route::get('autocomplete', 'AutoController@autocomplete'); // autocomplete
Route::get('/searchstudent', 'studentsearchController@search'); // student searchs

Route::get('message', 'smsController@index'); // show smsform
Route::post('message/send', 'smsController@send'); // sms send

// Route::match(['GET', 'POST'], '/modal', 'ModalTestController@modaltest');
// Route::get('/modal/body', 'ModalTestController@modalbody');
 

Route::get('/report', 'ReportController@showReport');
Route::post('/report', 'ReportController@processReport');

Route::get('/absentreport', 'AbsentReport@showForm');
Route::post('/absentreport', 'AbsentReport@processReport');

