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
	public function deleteUser($id){
		// return "User: ". $id; 
		$user = User::find($id);
		// return $user;
		$user->delete();
		return back()->with("message", "User Deleted");
	}

	// public function destroy($id)
    // {
    //     $appointment = Appointments::find($id);
    //     $appointment->delete();
    //     return redirect('/studentappointments')->with('success', 'Appointment Cancelled');
    //     // return 'Appointment Cancelled';
    // }
}
