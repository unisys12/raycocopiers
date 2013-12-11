<?php

class CustomerController extends BaseController {

	public function showIndex()
	{
		return View::make('customers.index')->with('posts', Post::getPosts());;
	}

	public function showMeterForm()
	{
		return View::make('customers.meterform')->with('posts', Post::getPosts());;
	}

	public function meterSubmit()
	{
		$data = Input::all();

		$rules = array(
			'name'		  => 'required',
			'email'		  => 'required | email',
			'CNumber'	  => 'required | numeric | min:4',
			'colorTotal'  => 'numeric',
			'bwTotal'	  => 'required | numeric'
			);

		$validator = Validator::make($data, $rules);

		if($validator->fails())
		{
			$messages = $validator->messages();

			return Redirect::to('customers/meter')
			->withErrors($messages)
			->withInput()
			->with('posts', Post::getPosts());
		}

		Mail::later(30,'emails.customers.meter', $data, function($message) use($data){
			$message->to($data['email'], $data['name'])->subject('Meter Reading Submission Test');
		});

		return View::make('customers.metersubmit')
			->with('posts', Post::getPosts());
	}

}
