<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\API\UserController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('user')->middleware('auth:api')->group(function(){
    Route::get('me', function (Request $request) {
        return $request->user();
    });
    Route::get('{id}', [UserController::class, "show"]);
});

Route::prefix('s2sc')->middleware('s2sc')->group(function() {
   Route::prefix('user')->controller(\App\Http\Controllers\API\S2SC\UserController::class)->group(function() {
       Route::get('{id}', 'show');
   });
});
