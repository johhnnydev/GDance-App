<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Excel;

class ReportController extends Controller
{
    function showReport(){
    	return view('report');
    }

    function processReport(Request $request){

        $this->validate($request, [
            'nature_offense' => 'nullable|numeric|max:27',
        ]);
        // return request()->all();

        // base query
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
        
        // $violationArray[] = ['USN', 'Nature of Offense','Frequency of Offense','Sanction Given', 'Year', 'Month'];

        // $result = $violations->get()->toArray();
        // don't use the line above it doesn't work
        // fix by "cyberformed"
        // https://github.com/Maatwebsite/Laravel-Excel/issues/1151
        $result = json_decode( json_encode($violations->get()), true);

        // return $violations;

        Excel::create('violations_report', function($excel) use($result) {

            $excel->setTitle('violations');
            $excel->setCreator('Laravel')->setCompany('any_name, LLC');
            $excel->setDescription('info file');

            $excel->sheet('Sheet1', function($sheet) use($result) {
                $sheet->fromArray($result, null, 'A1', false. false);
            });
        })->download('xlsx');

        // return 'shieshie';
    	// $nature = $request->input('nature_offense');
    	// $freq = $request->input('freq_offense'); 
    	// $year = $request->input('year');
    	// $month = $request->input('month');

    	// execute this if all the parameters are present
    	// if ($freq != NULL) {
	    // 	$violations = DB::table('violations')->where('nature_offense', $nature)->where('freq_offense', $freq)->whereYear('created_at', $year)->whereMonth('created_at', $month)->get();
    	// }else{
    	// 	//if the user want all violations that have the same nature
    	// 	$violations = DB::table('violations')->where('nature_offense', $nature)->whereYear('created_at', $year)->whereMonth('created_at', $month)->get();
    	// }
    	// return $violations;
    }
}
