<?php

Auth::routes();

//front
Route::get('/', function () {
    return view('front.index');
});

Route::get('/', 'Web\HomeController@index')->name('home');
Route::get('categoria/{id}', 'Web\HomeController@category')->name('categoria');
Route::get('like/{id}', 'Web\HomeController@like')->name('like');

//back
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', 'Admin\DashboardController@index')->name('dashboard');

    Route::resource('category', 'Admin\CategoryController');
    Route::get('/list', 'Admin\CategoryController@listCategory')->name('list');

    Route::resource('phrase', 'Admin\PhraseController');
    Route::get('/list', 'Admin\PhraseController@listPhrase')->name('phrase');
});