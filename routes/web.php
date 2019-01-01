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
Route::put('/users/delete/{id}', 'usersController@deleteUser');

Route::get('/appointments', 'appointmentsController@showAppointments'); // admin appointments view

Route::get('/studentappointments', 'studentAppointmentsController@index'); //student appointments view controller

Route::get('/studentprofile/{profile}', 'PDFController@studentprofile'); //profile to pdf controller

Auth::routes();

Route::get('/profile', 'ProfileController@getProfile');
Route::post('/user_avatar_submit', 'ProfileController@avatar_upload'); // avatar upload controller

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

Route::get('/searchstudent', 'studentsearchController@search'); // student searchs

Route::get('message', 'smsController@index'); // show smsform
Route::post('message/send', 'smsController@send'); // sms send

Route::get('/report', 'ReportController@showReport');
Route::post('/report', 'ReportController@processReport');

Route::get('/absentreport', 'AbsentReport@showForm');
Route::post('/absentreport', 'AbsentReport@processReport');
Route::post('/absentpdf', 'pdfabsent@processReport');

Route::post('/reportpdf', 'pdfviolation@processReport');
