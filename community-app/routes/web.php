<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return ['Laravel' => app()->version()];
});

// 테스트 : 관리자 닉네임 찾기
Route::get('/api/admin/nickname', [UserController::class, 'getAdminNickname']);

Route::get('login', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('http://localhost:3000', [LoginController::class, 'handleGoogleCallback']);

require __DIR__.'/auth.php';