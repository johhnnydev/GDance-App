<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Guardian;

class GuardianController extends Controller
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
        if(User::find($user_id)->guardian == NULL)
        {
            return view('guardian.create');
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
            'guardian_fname' => 'required',
            'guardian_mname' => 'required',
            'guardian_lname' => 'required',
            // 'guardian_suffix' => 'required',
            'guardian_address' => 'required',
            'guardian_birthday' => 'required',
            'guardian_age' => 'required',
            'guardian_civil_status' => 'required',
            'guardian_nationality' => 'required',
            'guardian_religion' => 'required',
            'guardian_occupation' => 'required',
            // 'guardian_company_contact' => 'required',
            'guardian_working_status' => 'required',
            'guardian_education' => 'required',
            // 'guardian_degree' => 'required',
            'guardian_contact_number' => 'required',
            // 'guardian_email_address' => 'required',
        ]);

        $guardian = new Guardian;
        $guardian->guardian_fname = $request->input('guardian_fname');
        $guardian->guardian_mname = $request->input('guardian_mname');
        $guardian->guardian_lname = $request->input('guardian_lname');
        $guardian->guardian_suffix = $request->input('guardian_suffix');
        $guardian->guardian_address = $request->input('guardian_address');
        $guardian->guardian_birthday = $request->input('guardian_birthday');
        $guardian->guardian_age = $request->input('guardian_age');
        $guardian->guardian_civil_status = $request->input('guardian_civil_status');
        $guardian->guardian_nationality = $request->input('guardian_nationality');
        $guardian->guardian_religion = $request->input('guardian_religion');
        $guardian->guardian_occupation = $request->input('guardian_occupation');
        $guardian->guardian_company_contact = $request->input('guardian_company_contact');
        $guardian->guardian_working_status = $request->input('guardian_working_status');
        $guardian->guardian_education = $request->input('guardian_education');
        $guardian->guardian_degree = $request->input('guardian_degree');
        $guardian->guardian_contact_number = $request->input('guardian_contact_number');
        $guardian->guardian_email_address = $request->input('guardian_email_address');
        $guardian->user_id = auth()->user()->id; 
        $guardian->save();

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
        $guardian = Guardian::find($id);
        if($guardian == NULL){
            return view('errors.nocantdo');
        }elseif(Auth::user()->id == $guardian->user_id){
            return view('guardian.edit')->with('guardian', $guardian);
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
            'guardian_fname' => 'required',
            'guardian_mname' => 'required',
            'guardian_lname' => 'required',
            // 'guardian_suffix' => 'required',
            'guardian_address' => 'required',
            'guardian_birthday' => 'required',
            'guardian_age' => 'required',
            'guardian_civil_status' => 'required',
            'guardian_nationality' => 'required',
            'guardian_religion' => 'required',
            'guardian_occupation' => 'required',
            // 'guardian_company_contact' => 'required',
            'guardian_working_status' => 'required',
            'guardian_education' => 'required',
            // 'guardian_degree' => 'required',
            'guardian_contact_number' => 'required',
            // 'guardian_email_address' => 'required',
        ]);
        $guardian = Guardian::find($id);
        $guardian->guardian_fname = $request->input('guardian_fname');
        $guardian->guardian_mname = $request->input('guardian_mname');
        $guardian->guardian_lname = $request->input('guardian_lname');
        $guardian->guardian_suffix = $request->input('guardian_suffix');
        $guardian->guardian_address = $request->input('guardian_address');
        $guardian->guardian_birthday = $request->input('guardian_birthday');
        $guardian->guardian_age = $request->input('guardian_age');
        $guardian->guardian_civil_status = $request->input('guardian_civil_status');
        $guardian->guardian_nationality = $request->input('guardian_nationality');
        $guardian->guardian_religion = $request->input('guardian_religion');
        $guardian->guardian_occupation = $request->input('guardian_occupation');
        $guardian->guardian_company_contact = $request->input('guardian_company_contact');
        $guardian->guardian_working_status = $request->input('guardian_working_status');
        $guardian->guardian_education = $request->input('guardian_education');
        $guardian->guardian_degree = $request->input('guardian_degree');
        $guardian->guardian_contact_number = $request->input('guardian_contact_number');
        $guardian->guardian_email_address = $request->input('guardian_email_address');
        $guardian->save();
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
