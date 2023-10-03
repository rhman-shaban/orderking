<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MerchantController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::domain('{subdomain}.orderking.test')->middleware('subdomain')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
});

Route::get('/', [DashboardController::class, 'index'])->name('users.index');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth:admin,user,merchant', 'verified'])->name('dashboard');

Route::middleware('auth:admin,merchant')->group(function () {
    Route::get('/about', fn () => Inertia::render('About'))->name('about');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('merchants', [MerchantController::class, 'index'])->name('merchants.index');
});

require __DIR__.'/auth.php';

