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
    return view('welcome');
});

Auth::routes();

\Illuminate\Support\Facades\Route::get('/home', 'HomeController@index')->name('home');
\Illuminate\Support\Facades\Route::resource('customers','CustomerController');
\Illuminate\Support\Facades\Route::resource('products','ProductController');
\Illuminate\Support\Facades\Route::resource('index','DashboardController');
\Illuminate\Support\Facades\Route::resource('SalesOrder','SalesOrderController');