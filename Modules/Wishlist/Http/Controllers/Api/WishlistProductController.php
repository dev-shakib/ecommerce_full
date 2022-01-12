<?php

namespace Modules\Wishlist\Http\Controllers\Api;

class WishlistProductController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return auth('api')->user()
            ->wishlist()
            ->with('files')
            ->latest()
            ->paginate(20);
    }
}
