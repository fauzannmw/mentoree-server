<?php

use App\Http\Controllers\mentorController;
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
//public
Route::post('mentor/register', [mentorController::class, 'register']);
Route::post('mentor/login', [mentorController::class, 'login']);

Route::post('mentee/register', [userController::class, 'register']);
Route::post('mentee/login', [userController::class, 'login']); 

Route::post('mentor/logout', [mentorController::class, 'register']);
Route::post('mentee/logout', [userController::class, 'login']); 


Route::get('mentor/{id}', [mentorController::class, 'detail']);
Route::get('mentor',[mentorController::class,'getall']);
Route::get('mentor/bidang/{kategoriid}',[mentorController::class,'explore']);



// protected
// Route::group(['middleware'=>['auth:sanctum']],function() {
//     Route::get('mentor/{id}', [mentorController::class, 'detail']);
//     Route::get('mentor',[mentorController::class,'getall']);
//     Route::get('mentor/explore/{kategoriid}',[mentorController::class,'explore']);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
