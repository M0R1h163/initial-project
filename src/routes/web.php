<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

//Laravel入門　0-8:route編　ルートプレフィックス参照　login/*** など *基本的はコントローラーで指示//
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'login']);
    });
    
Route::get('/login', [AttendanceController::class, 'login']);
Route::get('/register', [AttendanceController::class, 'register']);
Route::get('/', [AttendanceController::class, 'stamp']);
Route::get('/date',[AttendanceController::class, 'date']);


