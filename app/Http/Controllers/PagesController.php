<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use App\Students;
// use App\Violation;
use Auth;

class PagesController extends Controller
{
// public function __construct()
// {
//     $this->middleware('auth:admin');
// }
public function getIndex()
{
    if(Auth::guest()){
        return redirect('/login');
    }else{
    	return view('welcome');
    }
}
public function getAbout()
{
	return view('about');
}

// public function getProfile()
// {
//     if(Auth::guest()){
//         return view('errors.404');
//     }

//     // Get the user id of the user currently logged in.
//     $user_id = auth()->user()->id;
//     // Get the related model with the same 
//     $student = User::findOrFail($user_id)->student;
//     $father = User::findOrFail($user_id)->father;
//     $mother = User::findOrFail($user_id)->mother;
//     $guardian = User::findOrFail($user_id)->guardian;
//     $siblings = User::findOrFail($user_id)->sibling;
//     $schoolrecord = User::findOrFail($user_id)->schoolRecord;
//     $orgs = User::findOrFail($user_id)->org;
//     $about = User::findOrFail($user_id)->aboutstudent;        
//     $violations = User::findOrFail($user_id)->violation;        
//     // return User::findOrFail($user_id)->schoolRecord;

//     // if($father == NULL){
//     //     return 'Wala kang tatay oy!!';
//     // }


//     // return $student, father, mother, guardian, siblings;
// 	return view('profile', compact('student', 'father', 'mother', 'guardian', 'siblings', 'schoolrecord', 'orgs', 'about', 'violations'));
// }
}
