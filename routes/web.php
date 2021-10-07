<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Public\HomeController;
use Illuminate\Support\Facades\Route;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'access-admin-panel'], function () {

    Route::get('logs', [LogViewerController::class, 'index'])->name('logs')->middleware('role:developer');

    Route::get('/', fn() => view('admin.home'))->name('home');


    Route::resources([
//        'types' => AdminTypeController::class,
    ]);

});

# Home
Route::get('/', [HomeController::class, 'index'])->name('home');

# Auth
Route::get('/admin/login', [AdminAuthController::class, 'login'])->middleware('guest')->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'auth'])->middleware('guest');
