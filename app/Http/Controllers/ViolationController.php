<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Violation;
use App\User;
use Auth;
use App\Students;

class ViolationController extends Controller
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
        $id = Auth::id();
        // $isadmin = User::find($id)->is_admin;
        if(User::find($id)->is_admin == True){
            // allow admin things
            $violations = Violation::all();
            // $user = Students::find($student->id)->user;
            // $user_id = $user->id;
            // return $user_id;
            return view('violation.index', compact('violations'));
        }else{
            return view('errors.nocantdo');
            // deny admin things
            // return view('violation.create');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        // $isadmin = User::find($id)->is_admin;
        if(User::find($id)->is_admin == True){
            // allow admin things
            // return 'ddddddddd';
            return view('violation.create');
        }else{
            // deny admin things
            return view('errors.nocantdo');
        }
        // return "Current user: ".$id."is user an admin: ".$isadmin;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'usn' => 'required|numeric|digits:11',
            'grade_section' => 'required',
            'nature_offense' => 'required|max:27',
            'freq_offense' => 'required',
            'sanction_given' => 'required|string',
            'description' => 'required'
        ],[
            'grade_section.required' => 'The Grade and Section field is required.',
            'nature_offense.required' => 'The Nature of Offense field is required.',
            'nature_offense.max' => 'The Nature of Offense field must not be more than 27.',
            'freq_offense.required' => 'The Frequency of Offense field is required.',
            'sanction_given.required' => 'The Sanction given field is required.',
        ]);
        // get the user id of the user entered
        $usn = $request->input('usn');
        $student = Students::where('usn', $usn)->first(); 

        // can't add violation when student info is blank
        if($student == null){
            return back()->with('message', 'The student must have atleast a personal info.');
        }   
        $user = Students::find($student->id)->user;
        // return $user;

        // return $user->id;
        
        $violation = new Violation;
        $violation->user_name = $request->input('usn');
        $violation->grade_section = $request->input('grade_section');
        $violation->nature_offense = $request->input('nature_offense');
        $violation->freq_offense = $request->input('freq_offense');
        $violation->sanction_given = $request->input('sanction_given');
        $violation->description = $request->input('description');
        $violation->user_id = $user->id;
        // return $violation;
        $violation->save();
        return back()->with('message', 'Successful'); 
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
        $violation = Violation::find($id);
        if($violation == NULL){     
            return 'violation empty';            
        }elseif (Auth::user()->is_admin == True) {
            return view('violation.edit')->with('violation', $violation);
        }else{
            return 'not an admin';            
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
        $violation = Violation::find($id);
        $violation->user_name = $request->input('usn');
        $violation->grade_section = $request->input('grade_section');
        $violation->nature_offense = $request->input('nature_offense');
        $violation->freq_offense = $request->input('freq_offense');
        $violation->sanction_given = $request->input('sanction_given');
        $violation->description = $request->input('description');
        // $violation->user_id = $user->id;
        // return $violation;
        $violation->save();
        return back()->with('message', 'Successful'); 
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
