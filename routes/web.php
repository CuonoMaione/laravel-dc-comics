<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController as AdminPageController;


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
Route::get ('/', [AdminPageController::class, 'index'])->name('home');
Route::get ('/admin', [AdminPageController::class, 'index'])->name('admin.index');

Route::get('/admin/create', [AdminPageController::class, 'create'])->name('admin.create');
Route::post('/admin/comics', [AdminPageController::class, 'store'])->name('admin.store');
Route::get('/admin/{id}', [AdminPageController::class, 'show'])->name('admin.show');
Route::get('/admin/{id}/edit', [AdminPageController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{id}', [AdminPageController::class, 'update'])->name('admin.update');
Route::delete('/admin/{id}', [AdminPageController::class, 'destroy'])->name('admin.destroy');