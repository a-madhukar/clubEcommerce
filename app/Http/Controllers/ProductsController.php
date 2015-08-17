<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth; 
use Validator; 
use App\Category; 
use App\Product;

class ProductsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		if (Auth::check()) {
			# code...
			$categories=Category::lists('name','id'); 
			return view('products.add',compact('categories')); 
		}
		return redirect('/'); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		if (Auth::check()) {
			# code...
			$rules=[
				'name'=>'required|string|unique:products',
				'price'=>'required|numeric',
				'quantity'=>'required|integer',
				'category_id'=>'required|integer',
				'image_path'=>'required|image'

			];

			$validator = Validator::make($request->all(),$rules); 
			if ($validator->fails()) {
				# code...
				return redirect()->back()->withErrors($validator);
			}

			if ($request->hasFile('image_path')) {
				# code...
				$input=$request->all();
				$image=$input['image_path'];
				$name=''.$input['name'].'.png';
				$image=$image->move(public_path().'/images/products/',studly_case($name));
				$url="192.168.0.16/images/products/".studly_case($name);
				//dd($input); 
				$product=Product::create(['name'=>$input['name'],'price'=>$input['price'],'quantity'=>$input['quantity'],'category_id'=>$input['category_id'],'image_path'=>$url]); 
				return redirect('home'); 
			}

			return redirect()->back()->withErrors('something went wrong'); 
		}
		return redirect('/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
