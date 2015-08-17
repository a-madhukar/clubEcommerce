<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Session;
class AuthenticateController extends Controller {

	//
	public function login(Request $request){
		
		if (Auth::check()) {
			# code...
			Auth::logout();
		}
			# code...
			$rules=[
				'email'=>'required|email',
				'password'=>'required'
			];

			$validator = Validator::make($request->all(),$rules);
			if ($validator->fails()) {
			 	# code...
			 	return redirect()->back()->withErrors($validator); 
			 } 

			 $input = $request->all(); 

			 //dd($input); 
			 if (Auth::attempt(['email'=>$input['email'],'password'=>$input['password']])) {
			 	# code...
			 	return redirect('/home');
			 }else{
			 	Session::flash('loginError','Incorrect Credentials'); 
			 	
			 }
			 return redirect('/'); 
	}

}
