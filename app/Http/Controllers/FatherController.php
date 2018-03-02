<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Father;

class FatherController extends Controller
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
        if(User::find($user_id)->father == NULL)
        {
            return view('father.create');
        }else
        {
            return view('errors.nocantdo');
        }
        // return view('father.create');
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
            'father_fname' => 'required',
            'father_mname' => 'required',
            'father_lname' => 'required',
            // 'father_suffix' => 'required',
            'father_address' => 'required',
            'father_birthday' => 'required',
            'father_age' => 'required',
            'father_civil_status' => 'required',
            'father_nationality' => 'required',
            'father_religion' => 'required',
            'father_occupation' => 'required',
            // 'father_company_contact' => 'required',
            'father_working_status' => 'required',
            'father_education' => 'required',
            // 'father_degree' => 'required',
            'father_contact_number' => 'required',
            // 'father_email_address' => 'required',
        ]);

        $father = new Father;
        $father->father_fname = $request->input('father_fname');
        $father->father_mname = $request->input('father_mname');
        $father->father_lname = $request->input('father_lname');
        $father->father_suffix = $request->input('father_suffix');
        $father->father_address = $request->input('father_address');
        $father->father_birthday = $request->input('father_birthday');
        $father->father_age = $request->input('father_age');
        $father->father_civil_status = $request->input('father_civil_status');
        $father->father_nationality = $request->input('father_nationality');
        $father->father_religion = $request->input('father_religion');
        $father->father_occupation = $request->input('father_occupation');
        $father->father_company_contact = $request->input('father_company_contact');
        $father->father_working_status = $request->input('father_working_status');
        $father->father_education = $request->input('father_education');
        $father->father_degree = $request->input('father_degree');
        $father->father_contact_number = $request->input('father_contact_number');
        $father->father_email_address = $request->input('father_email_address');
        $father->user_id = auth()->user()->id; 
        $father->save();

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
        $father = Father::find($id);
        if($father == NULL){
            return view('errors.nocantdo');
        }elseif(Auth::user()->id == $father->user_id){
            return view('father.edit')->with('father', $father);
        }else{
            return view('errors.nocantdo');
        }
        // return view('father.edit')->with('father', $father);
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
            'father_fname' => 'required',
            'father_mname' => 'required',
            'father_lname' => 'required',
            // 'father_suffix' => 'required',
            'father_address' => 'required',
            'father_birthday' => 'required',
            'father_age' => 'required',
            'father_civil_status' => 'required',
            'father_nationality' => 'required',
            'father_religion' => 'required',
            'father_occupation' => 'required',
            // 'father_company_contact' => 'required',
            'father_working_status' => 'required',
            'father_education' => 'required',
            // 'father_degree' => 'required',
            'father_contact_number' => 'required',
            // 'father_email_address' => 'required',
        ]);

        $father = Father::find($id);
        $father->father_fname = $request->input('father_fname');
        $father->father_mname = $request->input('father_mname');
        $father->father_lname = $request->input('father_lname');
        $father->father_suffix = $request->input('father_suffix');
        $father->father_address = $request->input('father_address');
        $father->father_birthday = $request->input('father_birthday');
        $father->father_age = $request->input('father_age');
        $father->father_civil_status = $request->input('father_civil_status');
        $father->father_nationality = $request->input('father_nationality');
        $father->father_religion = $request->input('father_religion');
        $father->father_occupation = $request->input('father_occupation');
        $father->father_company_contact = $request->input('father_company_contact');
        $father->father_working_status = $request->input('father_working_status');
        $father->father_education = $request->input('father_education');
        $father->father_degree = $request->input('father_degree');
        $father->father_contact_number = $request->input('father_contact_number');
        $father->father_email_address = $request->input('father_email_address');
        $father->save();
        return redirect('/profile')->with('success', 'Successful');
        // return redirect()->action('PagesController@getProfile')->with('success', 'Update Successful');
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
