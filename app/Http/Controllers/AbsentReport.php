<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Excel;

class AbsentReport extends Controller
{
    function showForm(){
    	return view('absentform');
    }
    function processReport(Request $request){
    	// return $request->all();
    	// return array($request->from, $request->to);


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
        $result = json_decode( json_encode($absents->whereBetween('date', array($request->from, $request->to))->get()), true);
        
        // return compact('result', 'notjson');
		Excel::create('AbsentReport', function($excel) use($result) {
			$excel->setTitle('Absents');
			$excel->setCreator('Laravel')->setCompany('any_name, LLC');
			$excel->setDescription('info file');
			$excel->sheet('Sheet1', function($sheet) use($result) {
			$sheet->fromArray($result, null, 'A1', false. false);
			});
		})->download('xlsx');
    }
}
