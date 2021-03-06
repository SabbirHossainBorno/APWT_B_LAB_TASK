<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify')->name('login.verify');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/signup','SignupController@index')->name('signup.index');
Route::post('/signup','SignupController@index')->name('signup.index');

