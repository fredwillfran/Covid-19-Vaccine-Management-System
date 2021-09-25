<?php

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/checkin', 'CheckinController@index')->name('checkin.index')->middleware('isCheckin');
Route::get('/checkin/{citizen}/edit', 'CheckinController@edit')->name('checkin.edit')->middleware('isCheckin');
Route::patch('checkin/{citizen}', 'CheckinController@update')->name('checkin.update')->middleware('isCheckin');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('isCheckout');
Route::get('/checkout/{citizen}/edit', 'CheckoutController@edit')->name('checkout.edit')->middleware('isCheckout');
Route::patch('checkout/{citizen}', 'CheckoutController@update')->name('checkout.update')->middleware('isCheckout');

Route::get('/appointment', 'CitizenController@create')->name('book-appointment');
Route::post('/appointment', 'CitizenController@store')->name('save-appointment');

Route::get('/report/citizen', 'ReportsController@showCitizenReport')->middleware(['auth']);
Route::post('/report/citizen', 'ReportsController@reportCitizen')->middleware(['auth']);
Route::get('/report/citizen/pdf', 'ReportsController@citizen_export_pdf')->middleware(['auth']);

Route::get('/generalReport/citizen', 'ReportsController@showGeneralCitizenReport')->middleware(['auth']);
Route::post('/generalReport/citizen', 'ReportsController@generalReportCitizen')->middleware(['auth']);
Route::get('/generalReport/citizen/pdf', 'ReportsController@generalReport_export_pdf')->middleware(['auth']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
