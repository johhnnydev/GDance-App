<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class pdfviolation extends Controller
{
    function processReport(Request $request){

    	$violations = DB::table('violations')->select('user_name', 'nature_offense', 'freq_offense', 'sanction_given', 'created_at');

        // if nature of offense is present
        // get all violations with this parameter
        if($request->has('nature_offense')){
            $violations->where('nature_offense', $request->nature_offense);
        } 

        // if frequency of offense is present
        // get all violations with this parameter
        if($request->has('freq_offense')){
            $violations->where('freq_offense', $request->freq_offense);
        } 

        // if year is present
        // get all violations with this parameter
        if($request->has('year')){
            $violations->whereYear('created_at', $request->year);
        } 

        // if month is present
        // get all violations with this parameter.
        if($request->has('month')){
            $violations->whereMonth('created_at', $request->month);
        } 

    	$violations = $violations->get();
    	// dd($violations);

    	$pdf = PDF::loadView('violationpdf', compact('violations'));
		return $pdf->stream('pdfviolation.pdf');
    }
}
