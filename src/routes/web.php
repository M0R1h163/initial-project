<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;

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

//会員登録
// Route::get('/register', [AuthController::class, 'create']);
// Route::post('/register', [AuthController::class,'store']);

// ホーム(打刻画面)のルート
Route::get('/', [AuthController::class, 'stamp']);

//日別勤務一覧のルート
Route::get('/date', [AuthController::class, 'date']);

//勤務開始のルート
Route::post('/attendance-start', [AttendanceController::class, 'startTime']);

//勤務終了のルート
Route::post('/', [AttendanceController::class, 'endTime']);

//ログイン後のルート
Route::middleware('auth')->group(function () {
    // Route::get('/', [AuthController::class, 'showLoginForm']);
    Route::get('/', [AuthController::class, 'stamp']);
    Route::get('/date', [AuthController::class, 'date']);
    //勤務開始のルート
    Route::post('/', [AttendanceController::class, 'startTime']);
    //勤務終了のルート
    Route::post('/', [AttendanceController::class, 'endTime']);
});




//Attendanceコントローラーのルート
// Route::get('/stamp',[AttendanceController::class, 'stamp']);

