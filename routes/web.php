<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'HomeController@showHome')->name('home');
Route::get('/introduction', 'HomeController@showIntroduction')->name('introduction');
Route::get('/contact', 'HomeController@showContact')->name('contact');

Route::name('products.')->group(function () {
	Route::get('/sub_category/{sub_category_id}', 'ProductController@showBySubCategory')->
    name('showBySubCategory');	
    Route::get('/products/{products_id}', 'ProductController@show')->
    name('show');
});

Route::name('feedback.')->group(function () {
    Route::get('/feedback', 'FeedbackController@show')->name('show');
    Route::post('/feedback', 'FeedbackController@send')->name('send');
});

Auth::routes();

// TODO: ADMIN
Route::name('admin.')->group(function () {
	Route::get('/admin', 'Admin.AdminController@index')->name('index');
	Route::get('/products/create', 'Admin.AdminController@create')->name('create');
	Route::get('/products/{product_id}', 'Admin.AdminController@show')->name('show');
	Route::post('/products/{product_id}', 'Admin.AdminController@edit')->name('create');
});


Route::get('/test', function () {
    $a = App\Product::all()->first();
    return view('contact')->with('a', $a);
});
