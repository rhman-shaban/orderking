<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::group(['prefix' => '{type}/'], function () {
        Route::controller(AuthenticatedSessionController::class)->group(function () {
            Route::post('login', 'store');
        });
        Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    });
});

Route::middleware('auth:admin,user,merchant')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
