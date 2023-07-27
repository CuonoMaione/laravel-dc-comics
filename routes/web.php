<?php
use App\Http\Controllers\Guest\PageController as GuestPageController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
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

Route::get('/', [GuestPageController::class, 'index']) ->name('guest.welcome');
// Route::resource('admin/comics', AdminPageController::class);
route::get('admin/index',[AdminPageController::class,'index']) ->name('admin.index');   
route::get('admin/{id}',[AdminPageController::class,'show']) ->name('admin.show');   