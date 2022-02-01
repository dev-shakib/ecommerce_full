<?php

use Illuminate\Support\Facades\Route;

// Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactApiController@store')->name('api.contact.store');
