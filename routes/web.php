<?php

Auth::routes();

//front
Route::get('/', function () {
    return view('front.index');
});

Route::get('/', 'Web\HomeController@index')->name('home');
Route::get('categoria/{id}', 'Web\HomeController@category')->name('categoria');