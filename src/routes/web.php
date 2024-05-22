<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BreakController;

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

// ホーム(打刻画面)のルート
Route::get('/', [AuthController::class, 'stamp']);

//日別勤務一覧のルート
Route::get('/date', [AuthController::class, 'date']);

//勤務開始のルート
Route::post('/attendance-start', [AttendanceController::class, 'startTime']);

//勤務終了のルート
Route::post('/attendance-end', [AttendanceController::class, 'endTime']);

//休憩開始のルート(作成途中)
Route::post('/breaks-start', [BreakController::class, 'breakStart']);

//休憩終了のルート(作成途中)
Route::post('/breaks-end', [BreakController::class, 'breakEnd']);


//ログイン後のルート
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'stamp']);
    Route::get('/date', [AuthController::class, 'date']);
    //勤務開始のルート
    Route::post('/', [AttendanceController::class, 'startTime']);
    //勤務終了のルート
    Route::post('/', [AttendanceController::class, 'endTime']);
    //休憩開始のルート(作成途中)
    Route::post('/', [BreakController::class, 'breakStart']);
    //休憩終了のルート(作成途中)
    Route::post('/', [BreakController::class, 'breakEnd']);
});



