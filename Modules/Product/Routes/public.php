<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Modules\Product\Entities\ProductTranslation;

Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/{slug}', 'ProductController@show')->name('products.show');

Route::get('suggestions', 'SuggestionController@index')->name('suggestions.index');

Route::post('products/{id}/price', 'ProductPriceController@show')->name('products.price.show');

Route::post('/product/shot_des', function(Request $request){
   $product = ProductTranslation::where('product_id', $request->id)->first();
   return $product->short_description;
})->name('product.short.des');
