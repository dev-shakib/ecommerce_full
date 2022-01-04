<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Modules\Product\Entities\ProductTranslation;

Route::get('products', 'ProductController@index');
Route::get('products/{slug}', 'ProductController@show');

Route::get('suggestions', 'SuggestionController@index');

Route::post('products/{id}/price', 'ProductPriceController@show');

// Route::post('/product/shot_des', function(Request $request){
//    $product = ProductTranslation::where('product_id', $request->id)->first();
//    return $product->short_description;
// })->name('product.short.des');
