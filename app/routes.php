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

// Gooses Guide Routes
Route::post('/goosesguide/prod/prob', array('as' => 'res', 'uses' => 'GoosesGuide@problemResolution'));
Route::post('/goosesguide/prod', array('as' => 'prob', 'uses' => 'GoosesGuide@problemDescription'));
Route::get('/goosesguide', array('as' => 'goose', 'uses' => 'GoosesGuide@index'));

// About route (http://www.raycocopiers.com/about)
Route::get('/about', array('as' => 'about', function()
{
	return View::make('about')->with('posts', Post::getPosts());
}));

/* Customer Routes
 * (http://www.raycocopiers.com/customers)
 * ****************/
Route::post('/customers/metersubmit', array('as' => 'metersubmit', 'before' => 'csrf' ,'uses' => 'CustomerController@meterSubmit'));

Route::get('/customers/meter', array('as' => 'meter', 'uses' => 'CustomerController@showMeterForm' ));

Route::get('/customers', array('as' => 'customers', 'uses' => 'CustomerController@showIndex'));

/* Product Routes
 * (http://www.raycocopiers.com/products)
 * ***************/

// Display form to create a new product
// raycocopiers.com/products/create
Route::get('/products/create', array('as' => 'createProduct', 'uses' => 'ProductController@create'));

// Creating and Storing new Products
// raycocopiers.com/products/store
Route::get('/products/store', array('as' => 'storedproduct', 'uses' => 'ProductController@store'));
Route::post('/products/store', array('as' => 'storeproduct', 'uses' => 'ProductController@store'));

// Display view to show a single machine
// raycocopiers.com//products/mfp/bw/MP301
Route::get('/products/{family}/{color_class}/{model}', array('uses' => 'ProductController@showModel'));

// Display view to show a class of machines
// raycocopiers.com/products/mfp/bw
Route::get('/products/{family}/{color_class}', array('uses' => 'ProductController@showFamily'));

// Post the Product Info form from below
// raycocopiers.com/products/info
Route::post('/products/info', array('as' => 'send_form', 'uses' => 'ProductController@send_request'));

// Display form to request info on a particular product
// raycocopiers.com/products/info?model=MP301
Route::get('/products/info', array('as' => 'info_form', 'uses' => 'ProductController@info'));

// Display a list of product families
// raycocopiers.com/products
Route::get('/products', array('as' => 'products', 'uses' => 'ProductController@index'));

// Index Route (http://www.raycocopiers.com)
Route::get('/', array('as' => 'home', function()
{
	return View::make('index')->with('posts', Post::getPosts());
}));

/*
|---------------------------
| Create Custom 404 Page
|---------------------------
|
*/

App::missing(function($exception)
{
    return Response::view('404', array(), 404);
});
