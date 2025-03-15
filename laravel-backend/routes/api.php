<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TodoController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('todos')->group(function () {
        Route::get('/', [TodoController::class, 'index']); // 一覧取得
        Route::post('/', [TodoController::class, 'store']); // 新規登録
    });
});