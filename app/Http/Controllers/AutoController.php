<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AutoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function autocomplete(Request $request)
	{
		// get the value of "term" in the request
		$term = $request->term;
		$names = User::where('name', 'LIKE', '%'.$term.'%')->get();
		if(count($names) == 0){
			$searchResult[] = 'No entry found'; 
		}else{
			foreach ($names as $key => $value) {
				$searchResult[] = $value->name;
			}
		}
		return $searchResult;
	}
}
