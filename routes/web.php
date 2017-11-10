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


Route::group(array('middleware' => 'auth'), function () {

});

/*
 * Feedback : create and Store page
 */
Route::get('/feedback/create','FeedbackController@create');
Route::post('/feedback/create','FeedbackController@store');

// route to show the login form
Route::get('/login', 'HomeController@showLogin');
// route to process the form
Route::post('/login', 'HomeController@doLogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
