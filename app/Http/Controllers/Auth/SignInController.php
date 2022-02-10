<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignInController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        if(!$token = auth()->attempt($request->only('email','password'))){
            return response(null,401);
        }
        $user = User::where('email',$request->email)->first();
        return response()->json(compact('token','user'));
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password),'dob'=>$request->dob,'role'=>$request->role,'name'=>$request->fullname,'status']
        ));
        if($user && $request->role =='tutor' ){
            $tutor =Tutor::firstOrNew(['user_id'=>$user->id]);
            $tutor->first_name = explode(" ", $request->fullname)[0];
            $tutor->last_name = explode(" ", $request->fullname)[1];
            $tutor->status = 0;
             $tutor->user_id = $user->id;
            $tutor->save();
            
        }

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }
}
