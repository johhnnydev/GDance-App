<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class smsController extends Controller
{
    public function index()
    {
    	return view('sms.index');
    }
    public function itexmo($number,$message,$apicode){
		$url = 'https://www.itexmo.com/php_api/api.php';
		$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
		$param = array(
		    'http' => array(
		        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        'method'  => 'POST',
		        'content' => http_build_query($itexmo),
		    ),
		);
		$context  = stream_context_create($param);
		return file_get_contents($url, false, $context);
	}
	public function send(Request $request)
	{
		// return $request->all();
		$results = [];
		$this->validate($request, [
			'recipient.*' => array('required', 'regex:/^(09|\+639)\d{9}$/'),
			'body' => 'required|max:255'
		]);
		$arr = $request->recipient;
		foreach($arr as $reciever){
			$body = $request->body;
			$result = $this->itexmo($reciever, $body,"TR-JOHNL993408_ZB92D");
			// $results = array_push($results, $result);	
			$results[] = $result;
			// if ($result == ""){
			// echo "di gumagana";	
			// }else if ($result == 0){
			// 	return back()->with('message', 'Message Succesful');
			// }else{	
			// 	return back()->with('message', 'Message Failed');
			// }
		}
		// array_push($results, 0);
		// array_push($results, 0);
		// return $results;
		return back()->with('messages', $results);
		// return $request->recipient;
		// $recipient = $request->recipient;
		// $body = $request->body;
		// $result = $this->itexmo($recipient, $body,"TR-JOHNL993408_ZB92D");
		// if ($result == ""){
		// 	echo "di gumagana";	
		// 	}else if ($result == 0){
		// 		return back()->with('message', 'Message Succesful');
		// 	}else{	
		// 		return back()->with('message', 'Message Failed');
		// 	}
		}
}
