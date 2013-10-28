<?php

class CustomerController extends BaseController {

	public function showIndex()
	{
		return View::make('customers.index');
	}

	public function showMeterForm()
	{
		return View::make('customers.meterform');
	}

	public function meterSubmit()
	{
		$rules = array(
			'companyName' => 'required|alpha',
			'CNumber'	  => 'required|numeric',
			'colorTotal'  => 'numeric',
			'bwTotal'	  => 'required|numeric'
			);

		$validate = Validator::make(Input::all(), $rules);

		if($validate->fails())
		{
			$messages = $validator->messages();
			return Redirect::to('customers/meter')->withErrors($validate);
		}else{
			return View::make('customers.metersubmit');
		}

	}

}
