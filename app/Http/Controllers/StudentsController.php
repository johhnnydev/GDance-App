<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Father;
use App\Mother;
use App\Guardian;
use App\About;
use App\Orgs;
use App\SchoolRecord;
use App\Sibling;
use App\Violation;
use App\User;
use Auth;

class StudentsController extends Controller
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
        // check if user is admin
        if(Auth::user()->is_admin == True){
            $students = Students::all();
            return view('students.index')->with('students', $students);            
        }else{
            return view('errors.nocantdo');
        }
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
        if(User::find($user_id)->student == NULL)
        {
            // return view('aboutstudent.create');
            return view('students.create');
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
            'usn' => 'required',
            'yr_crs' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'nickname' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'civil_status' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'living_in' => 'required',
            'living_with' => 'required',
            'contact_number' => 'required',
            'email_address' => 'required',
            'legal_status' => 'required', 
            'languages_spoken' => 'required', 
            'emergency_contact_person' => 'required', 
            'emergency_contact_number' => 'required', 
        ]);
        // return 'waaaa';
        $student = new Students;
        $student->usn = $request->input('usn');
        $student->yr_crs = $request->input('yr_crs');
        $student->first_name = $request->input('first_name');
        $student->middle_name = $request->input('middle_name');
        $student->last_name = $request->input('last_name');
        $student->nickname = $request->input('nickname');
        $student->birthday = $request->input('birthday');
        $student->gender = $request->input('gender');
        $student->civil_status = $request->input('civil_status');
        $student->nationality = $request->input('nationality');
        $student->religion = $request->input('religion');
        $student->present_address = $request->input('present_address');
        $student->permanent_address = $request->input('permanent_address');
        $student->living_in = $request->input('living_in');
        $student->living_with = $request->input('living_with');
        $student->contact_number = $request->input('contact_number');
        $student->email_address = $request->input('email_address');
        // get the id of the current logged in user
        $student->user_id = auth()->user()->id; 
        
        $student->legal_status = $request->input('legal_status');
        $student->languages_spoken = $request->input('languages_spoken');
        $student->emergency_contact_person = $request->input('emergency_contact_person');
        $student->emergency_contact_number = $request->input('emergency_contact_number');
        $student->save(); // Save the student in the students table.
        // return $student; // Returns a json with all the input in it.

        // Don't touch this again.
        // return redirect()->action('PagesController@getProfile')->with('success', 'Update Successful');       
        return redirect('/profile')->with('success', 'Successful'); 
        // return 'haaaaaaaa';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV
     */
    public function show($id)
    {
        // get the user id of the student
        $userid = Students::find($id)->user_id;
        // return $userid;

        // $id = Auth::id();
        // $isadmin = User::find($id)->is_admin;
        if(Auth::user()->is_admin == True){
            // allow admin things
            $student = User::findOrFail($userid)->student;
            // return $student;
            $father = User::findOrFail($userid)->father;
            $mother = User::findOrFail($userid)->mother;
            $guardian = User::findOrFail($userid)->guardian;
            $siblings = User::findOrFail($userid)->sibling;
            $schoolrecord = User::findOrFail($userid)->SchoolRecord;
            $orgs = User::findOrFail($userid)->org;
            $about = User::findOrFail($userid)->aboutstudent;        
            $violations = User::findOrFail($userid)->violation;             
            $user_avatar = User::findOrFail($userid)->avatar;             
            $user = User::findOrFail($userid);             
            return view('students.show', compact('student', 'father', 'mother', 'guardian', 'siblings', 'schoolrecord', 'orgs', 'about', 'violations', 'user_avatar', 'user'));
        }else{
            // deny admin things
            return view('errors.nocantdo');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV
     */
    public function edit($id)
    {
        $student = Students::find($id);
        if($student == NULL){
            return view('errors.nocantdo');
        }elseif(Auth::user()->id == $student->user_id){
            return view('students.edit')->with('student', $student);
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
            'usn' => 'required',
            'yr_crs' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'nickname' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'civil_status' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'living_in' => 'required',
            'living_with' => 'required',
            'contact_number' => 'required',
            'email_address' => 'required', 
            'legal_status' => 'required', 
            'languages_spoken' => 'required', 
            'emergency_contact_person' => 'required', 
            'emergency_contact_number' => 'required', 
        ]);

        $student = Students::find($id);
        $student->usn = $request->input('usn');
        $student->yr_crs = $request->input('yr_crs');
        $student->first_name = $request->input('first_name');
        $student->middle_name = $request->input('middle_name');
        $student->last_name = $request->input('last_name');
        $student->nickname = $request->input('nickname');
        $student->birthday = $request->input('birthday');
        $student->gender = $request->input('gender');
        $student->civil_status = $request->input('civil_status');
        $student->nationality = $request->input('nationality');
        $student->religion = $request->input('religion');
        $student->present_address = $request->input('present_address');
        $student->permanent_address = $request->input('permanent_address');
        $student->living_in = $request->input('living_in');
        $student->living_with = $request->input('living_with');
        $student->contact_number = $request->input('contact_number');
        $student->email_address = $request->input('email_address');
        $student->legal_status = $request->input('legal_status');
        $student->languages_spoken = $request->input('languages_spoken');
        $student->emergency_contact_person = $request->input('emergency_contact_person');
        $student->emergency_contact_number = $request->input('emergency_contact_number');
        $student->save(); // Save the student in the students table.
        // return $student; // Returns a json with all the input in it.

        // returns to students/$id/ page
        // return redirect()->action('StudentsController@show', ['id' => $id])->with('success', 'Update Successful');
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
