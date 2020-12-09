<?php

use Illuminate\Support\Facades\Route;
use App\Dish;
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
    return view('/welcome');
});
Route::get('/po', function () {
    $dishes = Dish::where(function($query){

		$min_price = Request::has('min_price') ?  Request::get('min_price') : null;
		$max_price = Request::has('max_price') ? Request::get('max_price') : $max_price = null;
		

		if(isset($min_price) && isset($max_price)){

			

			$query-> where('price','>=',$min_price);
			$query-> where('price','<=',$max_price);
		}

	})->get();
	return View::make('result1', compact('dishes',$dishes));
});


Route::get('user', ['middleware' => 'auth', function () {
    return view('welcome');
}]);
Route::get('admin', ['middleware' => 'isadmin', function () {
    return view('admin.dashboard');
}]);

Route::get('about', function () {
    return view('/about');
});

Route::get('careers', function () {
    return view('/careers');
});

Route::get('/result','SearchController@search');
Route::get('/pr','SearchController@search1');
Route::get('feedback', function () {
    return view('/feedback');
});
Route::get('order-reviews', 'ReviewController@index');
Route::post('/storereview','ReviewController@store');
Route::get('/delete_reviews', 'ReviewController@create');
Route::get('/delete/{id}', 'ReviewController@show');
Route::delete('/de/{id}','ReviewController@destroy');
Route::get('/report', 'FeedbackController@reprot');
Route::post('/storereport','FeedbackController@storereport');
Route::get('job_application', function () {
    return view('job_application');
});

Route::post('/uplade','Usercontroller@updateavatar');
Route::get('my-profile','Usercontroller@index');
Route::get('prodel/{id}','Usercontroller@show');
Route::delete('/del/{id}','Usercontroller@destroy');

Route::get('/feedback','FeedbackController@index1');
Route::post('/feedback-store','FeedbackController@store');
//Route::get('di', function () {
  //  return view('dishinformation');
//});


Route::get('/welcome', 'HomeController@index');
Route::get('/most', 'HomeController@most');

Route::get('/history', 'OrderController@index');
Route::get('/cart', 'DishController@add');
Route::get('/payment', 'PaymentController@index');

Route::get('/dish', 'DishController@index');
//Route::get('a', 'DishController@index');
Route::get('/addToCart/{dish}', 'DishController@addToCart')->name('cart.add');
Route::get('shopping', 'DishController@showCart')->name('show');
Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/payment/{amount}', 'DishController@checkout')->name('payment');
Route::get('/dishinformation/{id}','DishController@edit1');
Route::get('/dish/edit/{id}','DishController@edit');
Route::put('/upd1/{id}','DishController@update');
Route::post('/store1','DishController@store');
Route::get('dish/create','DishController@create');
Route::delete('/del2/{id}','DishController@destroy');
Route::get('/dish/delete/{id}','DishController@show');
Route::get('/proedt/{id}','UserController@edit');
Route::put('/upd3/{id}','UserController@update');
Route::post('/store',' UserController@store');
Route::delete('/dishes/{dish}', 'DishController@destroy1')->name('cart.remove');
Route::put('/dishes/{dish}', 'DishController@update1')->name('cart.update');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::post('/charge', 'DishController@charge')->name('cart.charge');


Route::get('p', function () {
    return view('payment-email');
});
Route::get('/invoice', function(){
    $pdf = PDF::loadView('invoice');
    return $pdf->download('invoice.pdf');
});

Route::get('/de', 'HomeController@details');



Auth::routes();
//Route::get('/job-application', 'DishController@new');

