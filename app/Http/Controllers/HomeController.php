<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth; 

class HomeController extends Controller {

	public function index(){

		if (Auth::check()) {
			# code...
			Auth::logout(); 
		}
		return view('home.index'); 
	}

	public function home(){
		if (Auth::check()) {
			# code...
			return view('home.home'); 
		}
		return redirect('/'); 
	}
}
