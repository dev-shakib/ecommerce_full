<?php
use Illuminate\Support\Facades\Route;

Route::get('categories', 'CategoryApiController@index');
Route::get('featured-categories', 'CategoryApiController@featuredCategories');
