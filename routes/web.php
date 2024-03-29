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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/app/add_product', "ProductController@storeProduct");

Route::any('{slug}', 'HomeController@home')->where('slug', '([A-z\d-\/_.]+)?');
