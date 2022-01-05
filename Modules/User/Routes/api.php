<?php

use Illuminate\Support\Facades\Route;

    Route::post('/login', 'AuthApiController@login');
    Route::post('/register', 'AuthApiController@register');
    Route::post('/logout', 'AuthApiController@logout');

