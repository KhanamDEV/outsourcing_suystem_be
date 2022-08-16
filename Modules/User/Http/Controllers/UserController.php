<?php

namespace Modules\User\Http\Controllers;

use App\Helpers\ResponseHelpers;
use App\Services\User\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function show(Request $request){
        try {
            return ResponseHelpers::showResponse($this->userService->find());
        } catch (\Exception $e){
            return ResponseHelpers::serverErrorResponse();
        }
    }

    public function uploadFile(Request $request){
        try {
            dd($request->all());
        } catch (\Exception $e){
            return ResponseHelpers::serverErrorResponse();
        }
    }
}
