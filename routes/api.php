<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;


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


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/index',[PersonController::class,'index']);
// Route::post('/index',[PersonController::class,'store']);
// Route::get('/index/{id}',[PersonController::class,'show']);;
// Route::put('/index/{id}',[PersonController::class,'update']);
// Route::delete('/index/{id}',[PersonController::class,'destroy']);
// Route::post('/index/{id}',[PersonController::class,'edit']);

//API Basic
// Route::resource('/index', ProductController::class);

// Route::get('/find/{keyword}',[ProductController::class,'Find']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware'=>'auth:sanctum'], function(){
    Route::resource('/index', ProductController::class);
});//Verify_CSRF_Token

Route::post('register',[AuthController::class,'register']);
