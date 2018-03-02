<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Orgs;
use Auth;
use App\User;

class OrgsController extends Controller
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
        return view('orgs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $org = new Orgs;
        $org->org_name = $request->input('org_name');
        $org->org_years = $request->input('org_years');
        $org->org_based = $request->input('org_based');
        $org->org_position = $request->input('org_position');
        $org->user_id = auth()->user()->id; 
        $org->save();
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
        // get the id of the model
        $org = Orgs::find($id);
        // check if userid field is the same with the id logged in user
        if ($org == NULL) {
            return view('errors.nocantdo');            
        }elseif(Auth::user()->id == $org->user_id){
            return view('orgs.edit')->with('org', $org);
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
        $org = Orgs::find($id);
        $org->org_name = $request->input('org_name');
        $org->org_years = $request->input('org_years');
        $org->org_based = $request->input('org_based');
        $org->org_position = $request->input('org_position');
        $org->save();
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
