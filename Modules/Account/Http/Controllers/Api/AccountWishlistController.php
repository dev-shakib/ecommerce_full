<?php

namespace Modules\Account\Http\Controllers\Api;

class AccountWishlistController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.account.wishlist.index');
    }
}
