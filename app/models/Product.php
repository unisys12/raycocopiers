<?php

class Product extends Eloquent {

	protected $guarded = array(
		'id', 'created_at', 'updated_at'
		);

	public function getAll()
	{
		$products = Product::all();
		return $products;
	}

	public function getFamily($family)
	{

		//echo $family . ' From Model';
		$family = DB::table('products')->where('family', 'mfp')->get();
		return $family;
	}

	public function getColorClass($color_class)
	{
		$products = Product::where('color_class', '=', $color_class);
		return $products;
	}

	public function getModel($model)
	{
		$products = Product::where('name', '=', $model);
		return $products;
	}

}
