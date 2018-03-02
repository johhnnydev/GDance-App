<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Mother;

class MotherController extends Controller
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
        if(User::find($user_id)->mother == NULL)
        {
            return view('mother.create');
        }else
        {
            return view('errors.nocantdo');
        }
        // return view('mother.create');
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
            'mother_fname' => 'required',
            'mother_mname' => 'required',
            'mother_lname' => 'required',
            // 'mother_suffix' => 'required',
            'mother_address' => 'required',
            'mother_birthday' => 'required',
            'mother_age' => 'required',
            'mother_civil_status' => 'required',
            'mother_nationality' => 'required',
            'mother_religion' => 'required',
            'mother_occupation' => 'required',
            // 'mother_company_contact' => 'required',
            'mother_working_status' => 'required',
            'mother_education' => 'required',
            // 'mother_degree' => 'required',
            'mother_contact_number' => 'required',
            // 'mother_email_address' => 'required',
        ]);

        $mother = new Mother;
        $mother->mother_fname = $request->input('mother_fname');
        $mother->mother_mname = $request->input('mother_mname');
        $mother->mother_lname = $request->input('mother_lname');
        $mother->mother_suffix = $request->input('mother_suffix');
        $mother->mother_address = $request->input('mother_address');
        $mother->mother_birthday = $request->input('mother_birthday');
        $mother->mother_age = $request->input('mother_age');
        $mother->mother_civil_status = $request->input('mother_civil_status');
        $mother->mother_nationality = $request->input('mother_nationality');
        $mother->mother_religion = $request->input('mother_religion');
        $mother->mother_occupation = $request->input('mother_occupation');
        $mother->mother_company_contact = $request->input('mother_company_contact');
        $mother->mother_working_status = $request->input('mother_working_status');
        $mother->mother_education = $request->input('mother_education');
        $mother->mother_degree = $request->input('mother_degree');
        $mother->mother_contact_number = $request->input('mother_contact_number');
        $mother->mother_email_address = $request->input('mother_email_address');
        $mother->user_id = auth()->user()->id; 
        $mother->save();

        // $mother = Mother::all();
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
        // get the mother of the model
        $mother = Mother::find($id);
        // check relationship
        if ($mother == NULL) {
            return view('errors.nocantdo');
        }elseif(Auth::user()->id == $mother->user_id){
            return view('mother.edit')->with('mother', $mother);
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
            'mother_fname' => 'required',
            'mother_mname' => 'required',
            'mother_lname' => 'required',
            // 'mother_suffix' => 'required',
            'mother_address' => 'required',
            'mother_birthday' => 'required',
            'mother_age' => 'required',
            'mother_civil_status' => 'required',
            'mother_nationality' => 'required',
            'mother_religion' => 'required',
            'mother_occupation' => 'required',
            'mother_company_contact' => 'required',
            'mother_working_status' => 'required',
            'mother_education' => 'required',
            'mother_degree' => 'required',
            'mother_contact_number' => 'required',
            'mother_email_address' => 'required',
        ]);

        $mother = Mother::find($id);
        $mother->mother_fname = $request->input('mother_fname');
        $mother->mother_mname = $request->input('mother_mname');
        $mother->mother_lname = $request->input('mother_lname');
        $mother->mother_suffix = $request->input('mother_suffix');
        $mother->mother_address = $request->input('mother_address');
        $mother->mother_birthday = $request->input('mother_birthday');
        $mother->mother_age = $request->input('mother_age');
        $mother->mother_civil_status = $request->input('mother_civil_status');
        $mother->mother_nationality = $request->input('mother_nationality');
        $mother->mother_religion = $request->input('mother_religion');
        $mother->mother_occupation = $request->input('mother_occupation');
        $mother->mother_company_contact = $request->input('mother_company_contact');
        $mother->mother_working_status = $request->input('mother_working_status');
        $mother->mother_education = $request->input('mother_education');
        $mother->mother_degree = $request->input('mother_degree');
        $mother->mother_contact_number = $request->input('mother_contact_number');
        $mother->mother_email_address = $request->input('mother_email_address');
        $mother->save();
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
