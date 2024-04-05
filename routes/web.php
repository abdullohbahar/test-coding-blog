<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\PostAdminController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

    Route::prefix('post')->group(function () {
        Route::get('/', [PostAdminController::class, 'index'])->name('admin.post');
        Route::get('/create', [PostAdminController::class, 'create'])->name('admin.create.post');
        Route::post('/store', [PostAdminController::class, 'store'])->name('admin.store.post');
        Route::get('/edit/{id}', [PostAdminController::class, 'edit'])->name('admin.edit.post');
        Route::put('/update/{id}', [PostAdminController::class, 'update'])->name('admin.update.post');
        Route::delete('/destroy/{id}', [PostAdminController::class, 'destroy'])->name('admin.destroy.post');
    });
});
