<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	//
	protected $fillable = [
		'name', 
		'price',
		'quantity',
		'category_id',
		'image_path'
	];

	public function categories(){	
		return $this->belongsTo('App\Category','category_id'); 
	}
}
