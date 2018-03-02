<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\SchoolRecord;

class SchoolRecordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('errors.nocantdo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;
        // return $userabout; 
        if(User::find($user_id)->schoolRecord == NULL)
        {
            // return view('aboutstudent.create');
            return view('school.create');
        }else
        {
            return view('errors.nocantdo');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'school_elem' => 'required',
            'school_elem_years' => 'required',
            'school_junior' => 'required',
            'school_junior_years' => 'required',
        ]);

        $schoolrecord = new SchoolRecord;
        $schoolrecord->school_elem = $request->input('school_elem');
        $schoolrecord->school_elem_years = $request->input('school_elem_years');
        $schoolrecord->school_junior = $request->input('school_junior');
        $schoolrecord->school_junior_years = $request->input('school_junior_years');
        $schoolrecord->school_senior = $request->input('school_senior');
        $schoolrecord->school_senior_years = $request->input('school_senior_years');
        $schoolrecord->school_college = $request->input('school_college');
        $schoolrecord->school_college_years = $request->input('school_college_years');
        $schoolrecord->school_college_course = $request->input('school_college_course');
        $schoolrecord->easy_subjects = $request->input('easy_subjects');
        $schoolrecord->difficult_subjects = $request->input('difficult_subjects');
        $schoolrecord->user_id = auth()->user()->id; 
        $schoolrecord->save();

        return redirect('/profile')->with('success', 'Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('errors.nocantdo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return the entry with $id from request
        $schoolrecord = SchoolRecord::find($id);
        // $about = About::find($id);
        if($schoolrecord == NULL){
            return view('errors.nocantdo');            
        }elseif(Auth::user()->id == $schoolrecord->user_id){
            // return view('aboutstudent.edit')->with('about', $about);
            return view('school.edit')->with('schoolrecord', $schoolrecord);
        }else{
            return view('errors.nocantdo');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'school_elem' => 'required',
            'school_elem_years' => 'required',
            'school_junior' => 'required',
            'school_junior_years' => 'required',
        ]);

        $schoolrecord = SchoolRecord::find($id);
        $schoolrecord->school_elem = $request->input('school_elem');
        $schoolrecord->school_elem_years = $request->input('school_elem_years');
        $schoolrecord->school_junior = $request->input('school_junior');
        $schoolrecord->school_junior_years = $request->input('school_junior_years');
        $schoolrecord->school_senior = $request->input('school_senior');
        $schoolrecord->school_senior_years = $request->input('school_senior_years');
        $schoolrecord->school_college = $request->input('school_college');
        $schoolrecord->school_college_years = $request->input('school_college_years');
        $schoolrecord->school_college_course = $request->input('school_college_course');
        $schoolrecord->easy_subjects = $request->input('easy_subjects');
        $schoolrecord->difficult_subjects = $request->input('difficult_subjects');
        $schoolrecord->user_id = auth()->user()->id; 
        $schoolrecord->save();

        return redirect('/profile')->with('success', 'Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
