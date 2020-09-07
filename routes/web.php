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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

