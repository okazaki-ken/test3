<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

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

//ログインの認証
Route::middleware('auth')->group(function(){
Route::get('/weight_logs',[AuthorController::class,'weight_logs']);
});

//登録画面
Route::get('/register/step1',[AuthorController::class,'register']);
Route::post('/register/step2',[AuthorController::class,'register']);
Route::get('/register/step2', [AuthorController::class, 'register_step2']);

