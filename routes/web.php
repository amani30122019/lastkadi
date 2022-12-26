<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify' => true]);
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resources(
        [
            'roles' => RoleController::class,
            'users' => UserController::class,
            'products' => ProductController::class,
            'sub-categories' => SubCategoryController::class,
            'categories' => CategoryController::class,
            'news' => NewsController::class,
            'permissions' => PermissionController::class,
        ]
    );
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [HomeController::class, 'updatePassword'])->name('update-password');
});