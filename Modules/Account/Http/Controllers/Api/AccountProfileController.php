<?php

namespace Modules\Account\Http\Controllers\Api;

use Modules\User\Http\Requests\UpdateProfileRequest;

class AccountProfileController
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return response([
            'account' => auth('api')->user(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Modules\User\Http\Requests\UpdateProfileRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request)
    {
        $request->bcryptPassword($request);

        auth()->user()->update($request->all());

        return back()->with('success', trans('account::messages.profile_updated'));
    }
}
