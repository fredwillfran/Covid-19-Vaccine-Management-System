<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/checkin', function () {
    return view('users.checkin');
})->name('checkin')->middleware('isCheckin');

Route::get('/checkout', function () {
    return view('users.checkout');
})->name('checkout')->middleware('isCheckout');
