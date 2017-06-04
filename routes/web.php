<?php
use Illuminate\Support\Facades\Redis;
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

Route::get('/', function () { 
	return view('homepage.default'); 
})->name('homepage');

/* 
 |--------------------------------------------------------------------------
 | General blogging routes for displaying blog contents
 |--------------------------------------------------------------------------
 */
Route::get('/pages', 'PageController@index')->name('page-index');
Route::get('/categories', 'CategoryController@list')->name('category-list');



/* 
 |--------------------------------------------------------------------------
 | User authentication and profile related routes 
 |--------------------------------------------------------------------------
 */
Auth::routes();
Route::get('/redirect/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');
Route::get('/profile', 'ProfileController@user')->name('profile');
Route::get('/profile/user/{slug}', 'ProfileController@user')->name('user');

Route::post('/profile/user/change/type', 'ProfileController@setType')->name('user-change-type');
Route::post('/profile/user/delete', 'ProfileController@delete')->name('delete-user');



/* 
 |--------------------------------------------------------------------------
 | ADMIN user and related routes 
 |--------------------------------------------------------------------------
 */
Route::get('/admin', 'AdminController@show')->name('admin');
Route::get('/admin/users', 'AdminController@users')->name('admin-users');
Route::get('/admin/designer/show', 'AdminController@designer')->name('admin-designer');

/* 
 |--------------------------------------------------------------------------
 | Category related routes that only admin can access
 |--------------------------------------------------------------------------
 */
Route::get('/admin/category/create', 'CategoryController@create')->name('category-create');
Route::post('/admin/category/store', 'CategoryController@store')->name('category-store');
Route::get('/admin/category/edit/{id}', 'CategoryController@edit')->name('category-edit');
Route::patch('/admin/category/save', 'CategoryController@save')->name('category-save');

/* 
 |--------------------------------------------------------------------------
 | Blogging related routes that only admin can access
 |--------------------------------------------------------------------------
 */
Route::get('/admin/page/create', 'PageController@create')->name('page-create');
Route::post('/admin/page/store', 'PageController@store')->name('page-store');
Route::get('/admin/page/edit/{id}', 'PageController@edit')->name('page-edit');
Route::patch('/admin/page/save', 'PageController@save')->name('page-save');
Route::post('/admin/page/delete/{id}', 'PageController@destroy')->name('page-delete');


/* 
 |--------------------------------------------------------------------------
 | Blogging related routes that only admin can access
 |--------------------------------------------------------------------------
 */
Route::get('/admin/modules', 'ModuleController@index')->name('module-list');
Route::get('/admin/module/create', 'ModuleController@create')->name('module-create');
Route::post('/admin/module/store', 'ModuleController@store')->name('module-store');
Route::patch('/admin/module/save', 'ModuleController@update')->name('module-update');
Route::get('/admin/module/{id}', 'ModuleController@show')->name('module-show');
Route::get('/admin/module/edit/{id}', 'ModuleController@edit')->name('module-edit');
Route::post('/admin/module/delete/{id}', 'ModuleController@destroy')->name('module-delete');


Route::get('/api/v1/get/categories', 'API\v1\ApiCategoryController@getCategories')->name('api-categories');

Route::get('/{CategorySlug}', 'CategoryController@show')->name('category-view');
Route::get('/{categorySlug}/{page?}', 'PageController@show')->name('page-view');



