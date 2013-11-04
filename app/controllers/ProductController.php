<?php

class ProductController extends BaseController {

	public function __construct(Product $product)
	{
		$this->product = $product;
	}

	/**
	 * Display the products index page, which lists the different families of products.
	 *
	 * @return Response
	 */
	public function index()
	{
		// http://www.raycocopiers.com/products
		return View::make('products.index');
	}

	/**
	 * Show the form for creating a new product.
	 *
	 * @return Response
	 */
	public function create()
	{
		// http://www.raycocopiers.com/products/create
		return View::make('products.create');
	}

	/**
	 * Store a newly created product in the database.
	 *
	 * @return Response
	 */
	public function store()
	{
		// http://www.raycocopiers.com/products/store

		$data = Input::all();

		$rules = array(
			'model'			=> 'required|alpha_num',
			'color_class'	=> 'required',
			'family'		=> 'required|alpha',
			'ppmbw'			=> 'required|integer',
			'ppmcolor'		=> 'integer',
			'comment_one' 	=> 'required',
			'comment_two' 	=> 'required',
			'comment_three' => 'required',
			'comment_four' 	=> 'required',
			'comment_five' 	=> 'required'
			);

		$validator = Validator::make($data, $rules);

		if($validator->fails())
		{
			$messages = $validator->messages();
			return Redirect::to('products/create')->withErrors($messages)->withInput();
		}

		$product = Product::create($data);

		return View::make('products.store');
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

	public function showFamily($family, $color_class)
	{
		$product = $this->product->where('family', '=', $family)
								 ->where('color_class', '=', $color_class)
								 ->get();

		return View::make('products.family')
			->with('family', $family)
			->with('color_class', $color_class)
			->with('product', $product);
	}

	public function showModel($family, $color_class, $model)
	{
		$product = $this->product->where('family', '=', $family)
								 ->where('color_class', '=', $color_class)
								 ->where('model', '=', $model)
								 ->get();

		return View::make('products.model')
			->with('family', $family)
			->with('color_class', $color_class)
			->with('model', $model)
			->with('product', $product);
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
