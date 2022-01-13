<?php

namespace Modules\Account\Http\Controllers\Api;

use Illuminate\Http\Request;
use Modules\User\Entities\User;
use Modules\User\Http\Requests\UpdateProfileRequest;
use Intervention\Image\ImageManagerStatic as Image;

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
    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'nullable|confirmed',
        ]);

       $user = User::findOrFail(auth('api')->user()->id);

        /**
         * converting base64 image string into jpg.
        */
        if(!empty($request->image)){
            $imageName = time().".jpg";
            $imagePath = "storage/media/".$imageName;
            Image::make($request->image)->save(public_path($imagePath));
            $user->image = $imageName;
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();

        return response([
            'message' => 'profile updated'
        ]);


    }
}
