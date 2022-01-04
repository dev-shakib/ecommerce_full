<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', 'RegisterApiController@login');
Route::post('/register', 'RegisterApiController@register');
