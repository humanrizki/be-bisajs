<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class OauthController extends Controller
{
    //
    public function registerGoogle(Request $request){
        $request->validate([
            "name"=>"required",
            "email" => "required",
            "avatar" => "required",
            "gauth_id"=>"required",
        ]);
        $finduser = User::where('gauth_id', $request->gauth_id)->first();

        if($finduser){
            if (count(DB::table('personal_access_tokens')->where('tokenable_id', $finduser->id)->get()) > 0) {
                DB::table('personal_access_tokens')->where('tokenable_id', $finduser->id)->delete();
            }
            $token = $finduser->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message'=>'Login Succeed',
                'user' => $finduser,
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }else{
            $newUser = User::create([
                'name' => $request->name,
                'username'=> implode('@', explode('@', $request->email, -1)),
                'email' => $request->email,
                'role_id'=> 1,
                'gauth_id'=> $request->gauth_id,
                'gauth_type'=> 'google',
                'avatar'=> $request->avatar,
                'password' => Hash::make('password')
            ]);
            $token = $newUser->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message'=>'Login Succeed',
                'user' => $newUser,
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }
    }

}
