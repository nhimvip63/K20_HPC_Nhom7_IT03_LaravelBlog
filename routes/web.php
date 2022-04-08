<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('blogs/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('blogs/create', [BlogController::class, 'store'])->name('blog.store');
Route::delete('blogs/destroy/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');
Route::get('blogs/edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('blogs/edit/{blog}', [BlogController::class, 'update'])->name('blog.update');
Route::get('/', [HomeController::class, 'index'])->name('index');
