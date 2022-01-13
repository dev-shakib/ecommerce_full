<?php

namespace Modules\Account\Http\Controllers\Api;

class AccountReviewController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = auth('api')->user()
            ->reviews()
            ->with('product.files')
            ->whereHas('product')
            ->paginate(20);

        return response($reviews);
    }
}
