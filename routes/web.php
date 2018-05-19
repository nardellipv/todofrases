<?php

Auth::routes();

//front
Route::get('/', function () {
    return view('front.index');
});

Route::get('/', 'Web\HomeController@index')->name('home');
Route::get('categoria/{id}', 'Web\CategoryController@category')->name('categoria');
Route::get('like/{id}', 'Web\HomeController@like')->name('like');

//back
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', 'Admin\DashboardController@index')->name('dashboard');

    Route::resource('category', 'Admin\CategoryController');
    Route::get('/listcategory', 'Admin\CategoryController@listCategory')->name('list');

    Route::resource('phrase', 'Admin\PhraseController');
    Route::get('/listphrases', 'Admin\PhraseController@listPhrase')->name('phrase');
});