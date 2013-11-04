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

// About route (http://www.raycocopiers.com/about)
Route::get('/about', array('as' => 'about', function()
{
	return View::make('about');
}));

/* Customer Routes
 * (http://www.raycocopiers.com/customers)
 * ****************/
Route::post('/customers/metersubmit', array('as' => 'metersubmited', 'uses' => 'CustomerController@meterSubmit'));

Route::post('/customers/metersubmit', array('as' => 'metersubmit', 'uses' => 'CustomerController@meterSubmit'));

Route::get('/customers/meter', array('as' => 'meter', 'uses' => 'CustomerController@showMeterForm' ));

Route::get('/customers', array('as' => 'customers', 'uses' => 'CustomerController@showIndex'));

/* Product Routes
 * (http://www.raycocopiers.com/products)
 * ***************/

Route::get('/products/create', array('as' => 'createProduct', 'uses' => 'ProductController@create'));

Route::get('/products/{family}/{color_class}/{model}', array('uses' => 'ProductController@showModel'));

Route::get('/products/{family}/{color_class}', array('uses' => 'ProductController@showFamily'));

Route::get('/products/store', array('as' => 'storedproduct', 'uses' => 'ProductController@store'));
Route::post('/products/store', array('as' => 'storeproduct', 'uses' => 'ProductController@store'));

Route::get('/products', array('as' => 'products', 'uses' => 'ProductController@index'));

// Index Route (http://www.raycocopiers.com)
Route::get('/', array('as' => 'home', function()
{
	return View::make('index');
}));
