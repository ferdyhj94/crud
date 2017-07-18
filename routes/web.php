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
Route::post('addRegister','LoginController@register')->name('addRegister');
Route::get('register',function(){
	$role = App\Role::all();
	return view('auth.register')->with('role',$role);
})->name('register');

Route::get('login',function(){
	return view('auth.login');
})->name('login');
Route::get('password-reset',function(){
	return view('auth.ResetPassword');
})->name('password.request');

Route::get('product','barangController@index')->name('listProduct');
Route::get('add-product','barangController@addProduct')->name('addProduct');
Route::post('tambah-product','barangController@postAddProduct');
Route::get('edit-product/{id}','barangController@editProduct');
Route::post('ubah-product','barangController@postEditProduct');
Route::get('delete-product/{id}','barangController@deleteProduct');

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('units', 'UnitsController', ['except' => ['create', 'show', 'edit']]);