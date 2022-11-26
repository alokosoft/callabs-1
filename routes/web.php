<?php

use Illuminate\Support\Facades\Route;

// Home Page Routes
Route::get('/', 'FrontEndController@index');
Route::get('/new-appointment/{doctorId}/{date}', 'FrontEndController@show')->name('create.appointment');
Route::get('/dashboard', 'DashBoardController@index');

Route::get('/home', 'HomeController@index');
Route::get('/frontend-login', 'FrontendLogInController@index');
Route::get('/frontend-signup', 'FrontendLogInController@signup');

Route::get('package/{id}', 'FrontEndController@package')->name('package-details');
Route::get('listing', 'ListingController@index')->name('listing');
Route::post('search-test', 'ListingController@search')->name('search-test');


Route::get('add-to-cart/{evt}/{id}/{subtest_id}', 'FrontEndController@addToCart')->name('add_to_cart');
Route::get('cart', 'FrontEndController@cart')->name('cart');


Route::get('session/remove', 'FrontEndController@deleteSessionData')->name('session');
Route::delete('remove-from-cart', 'FrontEndController@remove')->name('remove_from_cart');
Route::any('getAjaxtests', 'FrontEndController@getajaxTest')->name('getajaxTest');


Route::get('about', 'ListingController@about')->name('about');
Route::post('user-signup', 'FrontendLogInController@create')->name('user-signup');
Route::post('user-login', 'FrontendLogInController@userlogin')->name('user-login');

Route::get('checkout', 'FrontendLogInController@checkout')->name('checkout');

Route::post('payment', 'FrontendLogInController@iniitiate')->name('payment');

Route::any('success', 'FrontendLogInController@success')->name('success');

Route::get('organs/{id}', 'FrontendLogInController@forntendshow')->name('organs.details');

Route::get('allorgans', 'FrontEndController@allOrgan')->name('allorgans');

Route::get('lab/{id}', 'FrontendLogInController@showlab')->name('show.labs');

Route::post('addpatient', 'FrontEndController@addPatient')->name('patient.create');

Auth::routes();

Route::get('/user-profile', 'ProfileController@index')->name('profile');
Route::get('/downloadreoprt', 'ProfileController@downloadreoprt')->name('report');
    
// Patient Routes
Route::group(['middleware' => ['auth', 'patient']], function () {
    // Profile Routes
    Route::post('/user-profile', 'ProfileController@store')->name('profile.store');
    Route::post('/profile-pic', 'ProfileController@profilePic')->name('profile.pic');

    Route::post('/book/appointment', 'FrontEndController@store')->name('book.appointment');
    Route::get('/my-booking', 'FrontEndController@myBookings')->name('my.booking');
    Route::get('/my-prescription', 'FrontEndController@myPrescription')->name('my.prescription');
});


// Doctor Routes
Route::group(['middleware' => ['auth', 'doctor']], function () {
    Route::resource('appointment', 'AppointmentController');
    Route::post('/appointment/check', 'AppointmentController@check')->name('appointment.check');
    Route::post('/appointment/update', 'AppointmentController@updateTime')->name('update');
    Route::get('patient-today', 'PrescriptionController@index')->name('patient.today');
    Route::post('prescription', 'PrescriptionController@store')->name('prescription');
    Route::get('/prescription/{userId}/{date}', 'PrescriptionController@show')->name('prescription.show');
    Route::get('/all-prescriptions', 'PrescriptionController@showAllPrescriptions')->name('all.prescriptions');
});



require_once "admin.php";