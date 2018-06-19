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
    return redirect('/home');
});

Route::get('/home', function () {
  return view('homepage');
});

Route::get('/products', 'ProductsController@index');

Route::get('/shop', function () {
  return "this is shop haha";
});

Route::get('/account/create_form', function () {
  return view('account.profile_create');
});

Route::post('/account/create', 'ProfileController@create_user');

Route::get('/account/log_out', 'ProfileController@logout_user');
