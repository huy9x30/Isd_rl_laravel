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

// CLIENT
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


// ADMIN
Auth::routes();

Route::group(["prefix" => "/admin", "as" => "admin."],function () {

	Route::get('/', 'Admin\AdminController@index')->name('index');

    Route::resources([
        'categories' => 'Admin\CategoryController',
        'subCategories' => 'Admin\SubCategoryController',
        'products' => 'Admin\ProductController',
        'introductions' => 'Admin\IntroductionController',
        'contacts' => 'Admin\ContactController'
    ]);

    Route::get('/admin/feedbacks', 'Admin\FeedbackController@show')->name('showFeedback');
    
});