<?php

namespace Modules\User\Http\Controllers\Auth;

use App\Helpers\ResponseHelpers;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class SignInController extends Controller
{
    public function signIn(Request $request){
        try {
            $credentials = $request->only(['email', 'password']);
            if (! $token = auth('user')->attempt($credentials)) {
                return ResponseHelpers::authenticateErrorResponse();
            }
            return ResponseHelpers::showResponse(['access_token' => $token, 'expires_in' => auth('user')->factory()->getTTL() * 60]);
        } catch (\Exception $e){
            return ResponseHelpers::serverErrorResponse();
        }
    }

    public function refreshToken(){
        try {
            return ResponseHelpers::showResponse(['access_token' => auth('user')->refresh()]);
        } catch (\Exception $e){
            return ResponseHelpers::serverErrorResponse();
        }
    }

    public function logout(){
        try {
            auth('user')->logout();
        } catch (\Exception $e){
            return ResponseHelpers::serverErrorResponse();
        }
    }

}
