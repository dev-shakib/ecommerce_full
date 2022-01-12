<?php

namespace Modules\Wishlist\Http\Controllers\Api;

use Illuminate\Http\Request;

class WishlistController
{
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if (! auth('api')->user()->wishlistHas(request('productId'))) {
            auth('api')->user()->wishlist()->attach(request('productId'));
            return response([
                'message' => 'added to the wish list'
            ]);
        }
    }

    /**
     * Destroy resources by the given id.
     *
     * @param string $productId
     * @return void
     */
    public function destroy($productId)
    {
        auth()->user()->wishlist()->detach($productId);
    }
}
