<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class usersController extends Controller
{
    public function showUsers()
    {
    	if(Auth::guest()){
    		return view('errors.nocantdo');
    	}elseif (Auth::user()->is_admin == False) {
    		return view('errors.nocantdo');
    	}else{
	    	$users = User::paginate(10);
	    	return view('showusers', compact('users'));
    	}
    }
}
