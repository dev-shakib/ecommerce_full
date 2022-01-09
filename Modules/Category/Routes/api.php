<?php
use Illuminate\Support\Facades\Route;

Route::get('categories', 'CategoryApiController@index');
Route::get('categories/{category}/products', 'CategoryProductController@index');
Route::get('featured-categories', 'CategoryApiController@featuredCategories');


