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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', ['middleware' => 'auth', function () {
    return view('user');
}]);
Route::get('admin', ['middleware' => 'isadmin', function () {
    return view('admin');
}]);

Route::get('about', function () {
    return view('about');
});

Route::get('/welcome', 'HomeController@index');

Auth::routes();
