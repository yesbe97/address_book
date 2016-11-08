<?php

Route::get('/', "defaultController@index")->name('overview');
Route::get('/{type}/type', "defaultController@index");

Route::get('/create', "defaultController@createForm")->name('createForm');
Route::post('/create', "defaultController@create")->name('create');


Route::get('/{id}/edit', "defaultController@editForm")->name('editForm');
Route::post('/{id}/edit', "defaultController@edit")->name('edit');

Route::get('/{id}/remove', "defaultController@remove")->name('remove');
