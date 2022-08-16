<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware(['api'])->group(function () {
   Route::prefix('v1/user')->group(function (){
       Route::post('upload-file', 'UserController@uploadFile');
       Route::prefix('authenticate')->group(function (){
           Route::post('sign-in','Auth\SignInController@signIn');
       });
       Route::middleware(['jwt.user'])->group(function (){
          Route::get('profile', 'UserController@show');
       });
   });
});

