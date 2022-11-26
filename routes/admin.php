<?php

use Illuminate\Support\Facades\Route;

// Admin Routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('doctor', 'DoctorController');
    Route::get('/patients', 'PatientListController@index')->name('patients');
    Route::get('/status/update/{id}', 'PatientListController@toggleStatus')->name('update.status');

    Route::get('/all-patients', 'PatientListController@allTimeAppointment')->name('all.appointments');
    Route::resource('/department', 'DepartmentController');
    Route::get('/test', 'TestController@create')->name('test.create');
    Route::post('/test-store', 'TestController@store')->name('test.store');

    Route::get('/category', 'CategoryController@index')->name('category.create');
    Route::post('/category-store', 'CategoryController@store')->name('category.store');
    Route::get('/category-show', 'CategoryController@show')->name('category.show');
    Route::get('/category-edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/category-update/{id}', 'CategoryController@update')->name('category.update');
    Route::post('/category-destroy/{id}', 'CategoryController@destroy')->name('category.destroy');

    Route::get('/lab', 'LabController@index')->name('lab.create');
    Route::post('/lab-store', 'LabController@store')->name('lab.store');
    Route::get('/all-labs', 'LabController@show')->name('lab.show');
    Route::get('/lab-edit/{id}', 'LabController@edit')->name('lab.edit');
    Route::post('/lab-update/{id}', 'LabController@update')->name('lab.update');
    Route::delete('/lab-destroy/{id}', 'LabController@destroy')->name('lab.destroy');
    Route::get('/labpackage', 'LabController@labpackage')->name('lab.package');
    Route::post('/labpackage-store', 'LabController@storelabpackage')->name('labpackage.store');
    Route::get('/labpackage-show', 'LabController@showlabpackage')->name('labpackage.show');
    Route::get('/labpackage-edit/{id}', 'LabController@labpackagedit')->name('labpackage.edit');
    Route::post('/labpackage-update/{id}', 'LabController@labpackageupdate')->name('labpackage.update');
    Route::get('/labsubtestpackage-edit/{id}', 'LabController@labsubtestpackagedit')->name('labsubtestpackage.edit');

    Route::delete('/labpackage-destroy/{id}', 'LabController@labpackagedestroy')->name('labpackage.destroy');
    


    //  Route::resource('/lab', 'LabController');

    Route::resource('/testbyorgan', 'TestByOrganController');
    Route::resource('/organ', 'OrganController');

    Route::get('/organ-test', 'TestByOrganController@forntendshow')->name('organ-test'); 
    Route::get('/organtest-edit/{organ_id}', 'TestByOrganController@organtestedit')->name('organtest.edit');

    
    Route::post('/organtest-update/{organ_id}', 'TestByOrganController@organtestupdate')->name('organtest.update');


    Route::get('/sub-test', 'TestController@subtest')->name('subtest.create');
    Route::post('/sub-test-store', 'TestController@subteststore')->name('subtest.store');
    Route::get('/sub-test-show', 'TestController@subtestshow')->name('subtest.show');
    Route::get('/sub-test-edit/{id}', 'TestController@findsubtest')->name('subtest.find');
    Route::get('/subtest-edit/{id}', 'TestController@subtestedit')->name('subtest.edit');
    Route::post('/subtest-update/{id}', 'TestController@subtestupdate')->name('subtest.update');
    Route::delete('/subtest-destroy/{id}', 'TestController@subtestdestroy')->name('subtest.destroy');


    Route::get('/parent-test', 'TestController@parenttest')->name('parenttest.create');
    Route::post('/parent-test-store', 'TestController@parentteststore')->name('parenttest.store');
    Route::get('/parent-test-show', 'TestController@parenttestshow')->name('parenttest.show');
    Route::get('/parent-test-edit/{id}', 'TestController@parenttestedit')->name('parenttest.edit');
    Route::post('/parent-test-update/{id}', 'TestController@parenttestupdate')->name('parenttest.update');


    Route::get('/package-show', 'TestController@package')->name('package.show');
    Route::get('/package-edit/{id}', 'TestController@edit')->name('package.edit');
    Route::post('/package-update/{id}', 'TestController@update')->name('package.update');

    Route::post('/package-destroy/{id}', 'TestController@packagedestroy')->name('package.destroy');
   
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/order', 'OrderController@index')->name('order');
    Route::post('/upload-report/{id}', 'OrderController@uploadreport')->name('order.uploadreoprt');
   
});

?>