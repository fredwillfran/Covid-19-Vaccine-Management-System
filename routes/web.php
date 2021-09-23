<?php

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/checkin', function () {
    return view('users.checkin');
})->name('checkin')->middleware('isCheckin');

Route::get('/checkout', function () {
    return view('users.checkout');
})->name('checkout')->middleware('isCheckout');

Route::get('/appointment', 'CitizenController@create')->name('book-appointment');

Route::post('/appointment', 'CitizenController@store')->name('save-appointment');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
