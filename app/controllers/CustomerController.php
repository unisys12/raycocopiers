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

}
