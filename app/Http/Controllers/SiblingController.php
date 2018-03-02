<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sibling;
use Auth;
use App\User;

class SiblingController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sibling.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return 'hayley williams';
        $this->validate($request,[
            'name' => 'required',
            'school_place_work' => 'required',
            'birthday' => 'required',
        ]);
        // $name = $request->input('name');
        // return $name;
        // this works
        
        $sibling = new Sibling;
        $sibling->name = $request->input('name');
        $sibling->school_place_work = $request->input('school_place_work');
        $sibling->birthday = $request->input('birthday');
        $sibling->user_id = auth()->user()->id; 
        $sibling->save();
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
        $sibling = Sibling::find($id);
        if($sibling == NULL){
            return view('errors.nocantdo');            
        }elseif(Auth::user()->id == $sibling->user_id){
            return view('sibling.edit')->with('sibling', $sibling);
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
            'name' => 'required',
            'school_place_work' => 'required',
            'birthday' => 'required',
        ]);
        $sibling = Sibling::find($id);
        $sibling->name = $request->input('name');
        $sibling->school_place_work = $request->input('school_place_work');
        $sibling->birthday = $request->input('birthday');
        $sibling->save();
        return redirect('/profile')->with('success', 'Update Successful'); 
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
