<?php

class GoosesGuide extends \BaseController {

	public function __construct(Goose $goosesguide)
	{
		$this->goose = $goosesguide;
	}

	/**
	 * Display a listing of the product families.
	 *
	 * @return product $model
	 */
	public function index()
	{
		// www.raycocopiers.com/goosesguide

		$product = $this->goose->select('prodCode')->distinct()->orderBy('prodCode')->get();

		return View::make('goosesguide.index')->with('product', $product);
	}

	/**
	 * Display a listing of the product issues.
	 *
	 * @return product $problem
	 */
	public function problemDescription()
	{
		$product = Input::get('prodCode');
		$problem = $this->goose->select('probDesc')->distinct()->where('prodCode', '=', $product)->get();

		//var_dump($product) . '<br>'; // string
		//var_dump($problem); // array object (must be processed with loop)

		return View::make('goosesguide.problem')->with('problem', $problem)->with('product', $product);
	}

	/**
	 * Display a listing of the problem resolutions.
	 *
	 * @return product $resolutions
	 */
	public function problemResolution()
	{
		$problem = Input::get('problem');
		$product = Input::get('prodCode');
		$resolutions = $this->goose->select('probRes')
								   ->distinct()->where('prodCode', '=', $product)
								   			   ->where('probDesc', '=', $problem)
								   			   ->get();

		return View::make('goosesguide.resolution')->with('product', $product)
												   ->with('problem', $problem)
												   ->with('probRes',  $resolutions);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
