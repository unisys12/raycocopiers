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
		return View::make('products.index')->with('posts', Post::getPosts());
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
			'family'		=> 'required',
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

		return View::make('products.store')->with('posts', Post::getPosts());
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
			->with('product', $product)
			->with('posts', Post::getPosts());
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
			->with('product', $product)
			->with('posts', Post::getPosts());
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

	/**
	 * Retrieve model info from view, display form prefilled with info from view
	 */
	public function info()
	{
		$model = Request::query('model');
		return View::make('products.info_form')
			->with('model', $model)
			->with('posts', Post::getPosts());
	}

	public function send_request()
	{
		$data = Input::all();

		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'product' => 'required|alpha_num',
			'users' => 'required|integer|min:1'
			);

		$validator = Validator::make($data, $rules);

		if($validator->fails())
		{
			$messages = $validator->messages();
			return Redirect::to(route('info_form'))
				->withErrors($messages)
				->withInput()
				->with('posts', Post::getPosts()
			);
		}

		Mail::send('emails.customers.info_request', $data, function($message) use ($data)
		{
			$message->to('sales@raycocopiers.com', $data['name'])
					->subject($data['name'] . ' would like some info on one of our products!')
					->from($data['email']);
		});

		return View::make('products.request_sent')
			->with('data', $data)
			->with('posts', Post::getPosts());

	}

}
