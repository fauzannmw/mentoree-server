<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('mentor/register', [mentorController::class, 'register']);
Route::post('mentor/login', [mentorController::class, 'login']);

Route::post('mentee/register', [userController::class, 'register']);
Route::post('mentee/login', [userController::class, 'login']); 

Route::post('mentor/logout', [mentorController::class, 'register']);
Route::post('mentee/logout', [userController::class, 'login']); 
