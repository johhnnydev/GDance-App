<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class studentAppointmentsController extends Controller
{
    public function index(){
    	$user_id = Auth::user()->id;
    	$student_appointments = User::find($user_id)->appointment;
    	// return $student_appointments;
    	return view('studentappointments', compact('student_appointments'));
    }
}
