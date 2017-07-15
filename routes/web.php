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


Route::get('/', function () {
    return view('auth/register');
});
Route::get('/customer', function () {
    return view('add_customer');
});
//Route customers//
Route::get('/customers', 'CustomerController@getAllCustomers');
Route::get('/customer/{id}', 'CustomerController@getCustomer');
Route::post('/customer', 'CustomerController@addCustomer');
Route::get('/customer/delete/{id}', 'CustomerController@deleteCustomer');
Route::post('customer/update/{id}', 'CustomerController@updateCustomer');


//Route products//
Route::get('/products', 'ProductController@getAllProducts');
Route::get('/product/{id}', 'ProductController@getProduct');
Route::post('/product', 'ProductController@addProduct');
Route::get('/product/delete/{id}', 'ProductController@deleteProduct');
Route::post('product/update/{id}', 'ProductController@updateProduct');
Route::get('/product', function () {
    return view('add_product');
});

//Route groups//
Route::get('/groups', 'GroupController@getAllGroups');
Route::get('/groups/{id}', 'GroupController@getGroup');
Route::post('/group', 'GroupController@addGroup');
Route::get('/group/delete/{id}', 'GroupController@deleteGroup');
Route::get('/group', function () {
  return view('add_group');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
