<?php

class Product extends Eloquent {

	protected $fillable = array(
		'model',
		'color_class',
		'family',
		'ppmbw',
		'ppmcolor',
		'comment_one',
		'comment_two',
		'comment_three',
		'comment_four',
		'comment_five'
		);

	public function getAll()
	{
		$products = Product::all();
		return $products;
	}

	public function getFamily($family)
	{
		$products = Product::where('family', '==', $family);
		return $products;
	}

	public function getColorClass($color_class)
	{
		$products = Product::where('color_class', '==', $color_class);
		return $products;
	}

	public function getModel($model)
	{
		$products = Product::where('name', '==', $model);
		return $products;
	}

}
