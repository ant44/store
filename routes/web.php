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
    return view('Site.index');
});
// Route::get('/index', function () {
//     return view('Site.index');
// });
Route::get('/index', 'Homecontroller@showHome')->name('ShowHomePage');

Route::get('/AdminPanel/login', 'AdminPanel\LoginAndRegisterController@login')->name('adminLogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'adminPanel\dashbordController@index')->name('dashboard');
Route::get('/dashborad/products', 'adminPanel\productController@index')->name('dashborad.product.index');
Route::get('/dashborad/products/create', 'adminPanel\productController@create')->name('dashborad.product.create');
Route::get('/logoutUser', 'Auth\LogoutController@Logout')->name('logoutUser');
