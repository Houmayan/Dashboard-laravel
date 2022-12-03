<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

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

Route::get('/admin/logout',[adminController::class,'destroy'])->name('admin.logout');
Route::get('/admin/profile',[adminController::class,'Profile'])->name('admin.profile');
Route::get('/edit/profile',[adminController::class,'EditProfile'])->name('edit.profile');
Route::post('/store/profile',[adminController::class,'StoreProfile'])->name('store.profile');
Route::get('/change/password',[adminController::class,'ChangePassword'])->name('change.password');
Route::post('/update/password',[adminController::class,'UpdatePassword'])->name('update.password');



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
