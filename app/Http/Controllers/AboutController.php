<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\User;
use Auth;

class AboutController extends Controller
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
        if(User::find($user_id)->aboutstudent == NULL)
        {
            return view('aboutstudent.create');
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
        $about = new About;
        $about->interest_hobbies = $request->input('interest_hobbies');
        $about->skills_talents = $request->input('skills_talents');
        $about->attributes_attitudes = $request->input('attributes_attitudes');
        $about->goals_ambitions = $request->input('goals_ambitions');
        $about->assets_strengths = $request->input('assets_strengths');
        $about->liabilities_weaknesses = $request->input('liabilities_weaknesses');
        $about->present_concerns = $request->input('present_concerns');
        $about->user_id = auth()->user()->id; 
        $about->save();
        return redirect('/profile')->with('success', 'Successful');
        // return redirect()->action('PagesController@getProfile')->with('success', 'Update Successful');
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
        $about = About::find($id);
        if($about == NULL){            
            return view('errors.nocantdo');
        }elseif(Auth::user()->id == $about->user_id){
            return view('aboutstudent.edit')->with('about', $about);
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
        $about = About::find($id);
        $about->interest_hobbies = $request->input('interest_hobbies');
        $about->skills_talents = $request->input('skills_talents');
        $about->attributes_attitudes = $request->input('attributes_attitudes');
        $about->goals_ambitions = $request->input('goals_ambitions');
        $about->assets_strengths = $request->input('assets_strengths');
        $about->liabilities_weaknesses = $request->input('liabilities_weaknesses');
        $about->present_concerns = $request->input('present_concerns');
        $about->user_id = auth()->user()->id; 
        $about->save();
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