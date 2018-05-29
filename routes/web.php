<?php

Auth::routes();

//front
Route::get('/', function () {
    return view('front.index');
});

Route::get('/', 'Web\HomeController@index')->name('home');
Route::get('categoria/{category}', 'Web\CategoryController@category')->name('categoria');
Route::get('like/{id}', 'Web\HomeController@like')->name('like');

//back
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', 'Admin\DashboardController@index')->name('dashboard');

    Route::resource('category', 'Admin\CategoryController');
    Route::get('/listcategory', 'Admin\CategoryController@listCategory')->name('list');

    Route::resource('phrase', 'Admin\PhraseController');
    Route::get('/listphrases', 'Admin\PhraseController@listPhrase')->name('phrase');
    Route::get('/reject', 'Admin\PhraseController@reject')->name('reject');
    Route::get('/pending', 'Admin\PhraseController@pending')->name('pending');
    Route::get('/approvePhrase/{id}', 'Admin\PhraseController@approvePhrase')->name('approvePhrase');
    Route::get('/rejectPhrase/{id}', 'Admin\PhraseController@rejectPhrase')->name('rejectPhrase');

    Route::resource('photo','Admin\PhotoController');
    Route::get('/listPhoto', 'Admin\PhotoController@listPhoto')->name('listPhoto');
    Route::get('/photoPending', 'Admin\PhotoController@photoPending')->name('photoPending');
    Route::get('/photoReject', 'Admin\PhotoController@photoReject')->name('photoReject');
    Route::get('/approvePhoto/{id}', 'Admin\PhotoController@approvePhoto')->name('approvePhoto');
    Route::get('/rejectPhoto/{id}', 'Admin\PhotoController@rejectPhoto')->name('rejectPhoto');
});