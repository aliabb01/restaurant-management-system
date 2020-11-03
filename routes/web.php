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
    return view('welcome');
}]);
Route::get('admin', ['middleware' => 'isadmin', function () {
    return view('admin');
}]);

Route::get('about', function () {
    return view('/about');
});

Route::get('careers', function () {
    return view('/careers');
});

Route::get('order-reviews', function () {
    return view('/order-reviews');
});

Route::get('report', function () {
    return view('/report');
});
Route::get('job_application', function () {
    return view('job_application');
});

Route::get('/welcome', 'HomeController@index');

Route::get('/result', 'SearchController@index');

Route::get('/history', 'PaymentController@history');
Route::get('/cart', 'DishController@add');
Route::get('/payment', 'PaymentController@index');
Route::get('/delete_reviews', 'FeedbackController@index');
Route::get('/dish.index', 'DishController@index');
//Route::get('/job-application', 'DishController@new');
Auth::routes();
