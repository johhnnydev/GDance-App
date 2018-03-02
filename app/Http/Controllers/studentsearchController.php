<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use DB;
class studentsearchController extends Controller
{
	public function search(Request $request){
		$usn = $request->usn;

		if(empty($usn)){
			// return "Can't find the student";
			return $usn;
		}else{
			$student = Students::select('id', 'first_name', 'middle_name', 'last_name', 'usn', 'gender', 'yr_crs')->where('usn', 'like', '%'.$usn.'%')->get();
			// $student = Students::select('id', 'first_name', 'middle_name', 'last_name', 'usn', 'gender', 'yr_crs')->where('usn', $usn)->get();
			return $student;
			// return var_export($student, true);
		}
	} 
}
