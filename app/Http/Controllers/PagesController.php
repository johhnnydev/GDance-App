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

}
