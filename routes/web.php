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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/* Routes inside needs authentication! */
Route::group(['middleware' => ['auth']], function () {
//    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('customers', 'CustomerController');
    Route::resource('products', 'ProductController');
    Route::resource('index', 'DashboardController');
    Route::resource('SalesOrder', 'SalesOrderController');

    Route::get('search/customer', 'CustomerController@search')->name('customers.search');
    Route::get('get_details/customer/{id}', 'CustomerController@getDetails')->name('customers.get_details');

    Route::get('search/product', 'ProductController@search')->name('products.search');

});