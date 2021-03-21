<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

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
Route::resource('/post', PostController::class);
Route::get('/', [PostController::class, 'index']);
Route::middleware(['auth', 'admin'])->group(function () {
    // Route::resource('/dashboard', AdminController::class);
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('dashboard/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('dashboard/', [AdminController::class, 'store'])->name('admin.store');
    // Route::patch('dashboard/', [AdminController::class, 'update'])->name('admin.update');
    Route::get('dashboard/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::delete('dashboard/', [AdminController::class, 'destroy'])->name('admin.destroy');

});
/* Route::get('post/', [PostController::class, 'index'])->name('post.index');
Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::get('post/show/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('post/', [PostController::class, 'store'])->name('post.store');
Route::patch('post/show/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('post/{id}', [PostController::class, 'destroy'])->name('post.destroy'); */




Auth::routes();

