<?php

namespace Modules\User\Http\Controllers\Api;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class AuthApiController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['required'],
            'password' => ['required', 'string', 'confirmed'],
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        $token = $user->createToken('MyApp')->accessToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        //assign role
        $this->assignCustomerRole($user);

        //active user
        $this->active($user);

        return response($response, 201);
    }

    protected function assignCustomerRole($user)
    {
       return DB::table('user_roles')
                ->insert([
                    'user_id' => $user->id,
                    'role_id' => 2
                ]);
    }

    protected function active($user)
    {
        return DB::table('activations')
            ->insert([
                'user_id' => $user->id,
                'code' => str_random(),
                'completed' => 1
            ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email',],
            'password' => ['required', 'string']
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'bad login please check your credentials',
            ], 401);
        }

        $token = $user->createToken('MyApp')->accessToken; ;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user()->token();
            $user->revoke();
         }
        return ['message' => 'logged out!'];
    }
}
