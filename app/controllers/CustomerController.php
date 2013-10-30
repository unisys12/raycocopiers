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
		//$data = Input::all();

		$rules = array(
			'CNumber'	  => 'required|numeric|min:4|max:4',
			'colorTotal'  => 'numeric',
			'bwTotal'	  => 'required|numeric'
			);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails())
		{
			$messages = $validator->messages();
			return View::make('customers.meterform')->withErrors($messages);
		}
		return View::make('customers.metersubmit');
	}

}
