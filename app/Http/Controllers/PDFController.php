<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\User;

class PDFController extends Controller
{
    public function studentprofile($id){
    	// return view('pdf.studentprofile');
    	// return $id;
        // $user = User::findOrFail($id);
        $student = User::findOrFail($id)->student;
        $father = User::findOrFail($id)->father;
	    $mother = User::findOrFail($id)->mother;
	    $guardian = User::findOrFail($id)->guardian;
	    $siblings = User::findOrFail($id)->sibling;
	    $schoolrecord = User::findOrFail($id)->SchoolRecord;
	    $orgs = User::findOrFail($id)->org;
	    $about = User::findOrFail($id)->aboutstudent;        
	    $violations = User::findOrFail($id)->violation;
        // return $user;
		$pdf = PDF::loadView('pdf.studentprofile', compact('student', 'father', 'mother', 'guardian', 'siblings', 'schoolrecord', 'orgs', 'about', 'violations'));
		return $pdf->stream('studentprofile.pdf');
    }
}
