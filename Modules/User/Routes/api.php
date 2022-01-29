<?php

use Illuminate\Support\Facades\Route;

    Route::post('/login', 'AuthApiController@login');
    Route::post('/register', 'AuthApiController@register');
    Route::post('/logout', 'AuthApiController@logout')->middleware('auth:api');

    Route::get('login/{provider}', 'AuthApiController@redirectToProvider')->name('api.login.redirect');
    Route::get('login/{provider}/callback', 'AuthApiController@handleProviderCallback')->name('api.login.callback');
