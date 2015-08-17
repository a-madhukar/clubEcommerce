<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Response; 

class ApiController extends Controller {

	//
	public function test(){
		$input = Input::all(); 
		return Response::json($input,200); 
	}

	public function name($name){
		return Response::json($name,200); 
	}
}
