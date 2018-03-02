<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class nameController extends Controller
{
    public function findname(Request $request){
    	$usn = $request->usn;
    	$student = Students::select('first_name', 'middle_name', 'last_name', 'yr_crs')->where('usn', $usn)->first();
    	return $student;
    }
}
