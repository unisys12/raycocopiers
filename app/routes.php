<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/about', array('as' => 'about', function()
{
	return View::make('about');
}));

Route::get('/customers/metersubmit', array('as' => 'metersubmit', 'uses' => 'CustomerController@meterSubmit'));

Route::get('/customers/meter', array('as' => 'meter', 'uses' => 'CustomerController@showMeterForm' ));

Route::get('/customers', array('as' => 'customers', 'uses' => 'CustomerController@showIndex'));

Route::get('/products', array('as' => 'products', function()
{
	return View::make('products.index');
}));

Route::get('/', array('as' => 'home', function()
{
	return View::make('index');
}));
