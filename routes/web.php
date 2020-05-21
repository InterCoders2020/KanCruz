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

Route::get('contactUs', function () {
    return view('contact');
});

Route::get('ourRooms', function () {
    return view('room');
});

Route::get('Services', function () {
    return view('services');
});

Route::get('About', function () {
    return view('about');
});

Route::get('bookNow', function () {
    return view('booking');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('service', 'ServiceController')->middleware('auth');
Route::resource('room', 'RoomController')->middleware('auth');
Route::resource('booking', 'BookingController')->middleware('auth');
Route::resource('contact', 'ContactController')->middleware('auth');
Route::resource('availability', 'AvailabilityController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
