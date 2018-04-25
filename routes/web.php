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
	Route::get('/admin', 'Admin\AdminController@index')->name('index');

    Route::get('/admin/category', 'Admin\CategoryController@show')->name('showCategories');
    Route::get('/admin/category/form/create', 'Admin\CategoryController@showCreateForm')->name('showCreateForm');
    Route::get('/admin/category/form/edit/{categoryId}', 'Admin\CategoryController@showEditForm')->name('editCategoryForm');
    Route::post('/admin/category', 'Admin\CategoryController@create')->name('createCategory');
    Route::post('/admin/category/{categoryId}', 'Admin\CategoryController@edit')->name('editCategory');
    Route::post('/admin/category/{categoryId}/delete', 'Admin\CategoryController@delete')->name('deleteCategory');

    Route::get('/admin/sub-category', 'Admin\SubCategoryController@show')->name('showSubCategories');
    Route::post('/admin/sub-category', 'Admin\SubCategoryController@create')->name('createSubCategory');
    Route::put('/admin/sub-category{subCategoryId}', 'Admin\SubCategoryController@edit')->name('editSubCategory');
    Route::delete('/admin/sub-category{subCategoryId}', 'Admin\SubCategoryController@delete')->name('deleteSubCategory');

    Route::get('/admin/products', 'Admin\ProductController@showAll')->name('showProducts');
	Route::post('/admin/products', 'Admin\ProductController@create')->name('createProduct');
	Route::get('/admin/products/{productId}', 'Admin\ProductController@show')->name('showProduct');
	Route::put('/admin/products/{productId}', 'Admin\ProductController@edit')->name('editProduct');
    Route::delete('/admin/products/{productId}', 'Admin\ProductController@delete')->name('deleteProduct');

    Route::get('/admin/contact', 'Admin\ContactController@show')->name('showContact');
    Route::post('/admin/contact/{contactId}', 'Admin\ContactController@edit')->name('editContact');

    Route::get('/admin/introduction', 'Admin\IntroductionController@show')->name('showIntroduction');
    Route::post('/admin/introduction', 'Admin\IntroductionController@edit')->name('editIntroduction');

    Route::get('/admin/feedback', 'Admin\FeedbackController@show')->name('showFeedback');
    
});

// Route::get('/admin', 'Admin\AdminController@index');
Route::get('/test', function () {
    $a = App\Product::all()->first();
    return view('contact')->with('a', $a);
});
