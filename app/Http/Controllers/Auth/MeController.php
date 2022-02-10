<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class MeController extends Controller
{

    // public function __construct()
    // {
    //      $this->middleware(['auth:api']);
    // }
    public function __invoke()
    {

        return response()->json(auth()->user());
    }

    private function respondWithToken($token)
    {
        return response()->json([
            'token' => $token,
            'access_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }


    public function logout()
    {
        auth()->logout();
        return response()->json(['msg' => 'User successfully logged out']);
    }


    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    public function me()
    {
        return response()->json(auth()->user());
    }
}
