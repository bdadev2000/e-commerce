<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function () {
    Route::prefix('/user')->group(function () {
        Route::get('/',[UserController::class,'list']);
        Route::get('/add',[UserController::class,'add']);
        Route::get('/edit/{id}',[UserController::class,'edit'])->name('admin.user.edit');
        Route::post('/edit/{id}',[UserController::class,'doEdit'])->name('admin.user.doEdit');
        Route::get('/delete/{id}',[UserController::class,'delete'])->name('admin.user.delete');
    });
});