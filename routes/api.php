<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/test', function (Request $request){
    return "Authenticated";
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ROUTE SUPPLEMENTAIRE AVEC UN PREFIX ET UN GROUP POUR DONNER INFORMATION SUR DES VERSIONS. 

// Route::middleware('auth:api')->prefix('v1')->group(function(){
//     Route::get('/user', function (Request $request){
//         return $request->user();
//     });
// });

// Route::middleware('auth:api')->group(function(){
//     Route::get('/user', function (Request $request) {
//     return $request->user();
//     });
//     Route::put('/mod', [UserController::class, 'usercfg']);
// });