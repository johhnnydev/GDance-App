<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
class pdfabsent extends Controller
{
	function processReport(Request $request){
		// return $request->all();
		$this->validate($request, [
            'to' => 'required',
            'from' => 'required',
        ],
        [
            'to.required' => 'This field is required.',
            'from.required' => 'This field is required.'
        ]);


    	// base query
    	$absents = DB::table('absents')->select('usn', 'subject', 'date');

    	if($request->has('usn')){
            $absents->where('usn', $request->usn);
        }

        if($request->has('subject')){
            $absents->where('subject', 'like', '%'.$request->subject.'%');
        }
        // $notjson = $absents->whereBetween('date', array($request->from, $request->to))->get();
		$absents = $absents->whereBetween('date', array($request->from, $request->to))->get();
        // return $absents;
    	$pdf = PDF::loadView('absentpdf', compact('absents'));
	    $pdf->setPaper('letter', 'landscape');
		return $pdf->stream('pdfabsent.pdf');
	}
}
