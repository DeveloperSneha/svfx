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

Route::get("/","MainController@index")->name('svfx');
// Route::get('tutorial','MainController@getTutorial');
Route::post("contact","MainController@contact");
Route::get('logo-design','MainController@logoDesign');
Route::get('alert','PaymentController@alert');
Route::get('cover-art','MainController@coverArt');
Route::get('motion','MainController@motion');
Route::get('flyer','MainController@flyer');
Route::get('pay','MainController@pay');
Route::post('pymnt','PaymentController@payWithpaypal');
Route::get('status','PaymentController@getPaymentStatus')->name('status');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/banners','BannerController');
Route::resource('/services','ServiceController');
Route::resource('/testimonials','TestimonialController');
Route::resource('/portfolios','PortfolioController');
Route::resource('/faqs','FaqController');
// Route::resource('/tutorials','TutorialController');
Route::resource('/teams','TeamController');
Route::get('/users','TeamController@getUsers');
Route::get('/user/{id}','TeamController@getdetails');
Route::delete('/user/{id}/delete','UserController@destroy');
Route::get('/em','TeamController@getEm');
Route::get('/updatepassword','TeamController@getUpdatePasswordForm');
Route::post('/updatepassword','TeamController@updatePassword');
// Route::group(['middleware' => ['auth']], function() {
	

// });  



