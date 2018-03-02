<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
use File;
use Validator;

class ProfileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function getProfile()
    {
    	// if(Auth::guest()){
     //        return view('errors.404');
     //    }
        // Get the user id of the user currently logged in.
        $user_id = auth()->user()->id;
        $user_avatar = User::find($user_id)->avatar;

        // Get the related model with the same 
        $student = User::findOrFail($user_id)->student;
        $father = User::findOrFail($user_id)->father;
        $mother = User::findOrFail($user_id)->mother;
        $guardian = User::findOrFail($user_id)->guardian;
        $siblings = User::findOrFail($user_id)->sibling;
        $schoolrecord = User::findOrFail($user_id)->schoolRecord;
        $orgs = User::findOrFail($user_id)->org;
        $about = User::findOrFail($user_id)->aboutstudent;        
        $violations = User::findOrFail($user_id)->violation;        
        $appointments = User::findOrFail($user_id)->appointment;        
        // return User::findOrFail($user_id)->schoolRecord;

        // if($father == NULL){
        //     return 'Wala kang tatay oy!!';
        // }


        // return $student, father, mother, guardian, siblings;
    	return view('profile', compact('student', 'father', 'mother', 'guardian', 'siblings', 'schoolrecord', 'orgs', 'about', 'violations', 'appointments', 'user_avatar'));
    }


    public function avatar_upload(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');

            $this->validate($request, [
                'avatar' => 'required|image',
            ]);

            $filename = time().'.'.$avatar->getClientOriginalExtension();

            Image::make($avatar)->fit(200, 200)->save( public_path('/img/avatars/'. $filename) );
            $user = Auth::user();

            // check if the current avatar is 
            if($user->avatar != "default.png"){
                $path = '/img/avatars/';
                $lastpath = $user->avatar;
                // deletes the previous profile picture 
                File::Delete(public_path( $path . $lastpath) );
            }

            $user->avatar = $filename;
            $user->save();
        } //endif
        return redirect('/profile');
    }


}
