<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
class AuthController extends Controller
{
    public $successStatus = 200;

    public function register(Request $request) {
        $validator = Validator::make($request->all(),
                    [
                    'fname' => 'required',
                    'lname' => 'required',
                    'email' => 'required|email|unique:user_client,email',
                    'status' => 'required',
                    'phone_no' =>'required|max:11|min:11',
                    'password' => 'required|min:6',
                    'c_password' => 'required|same:password',
                    ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        if($user)
        {
            $success['token'] =  $user->createToken('AppName')->accessToken;
        }
        return response()->json(['success'=>$success], $this->successStatus);
    }


    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')]))
        {
            $user = Auth::user();
            $success['token'] =  $user->createToken('AppName')-> accessToken;
            return response()->json(['success' => $success], $this-> successStatus);
        }
        else
        {
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function getUser()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }

}

