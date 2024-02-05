<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rolecontroller;
use App\Http\Controllers\permissioncontroller;
use App\Http\Controllers\formcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {  
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('admin', function () {
    return view('admin');
})->middleware(['auth', 'role:admin'])->name('admin')->prefix('admin');
require __DIR__.'/auth.php';
Route::get('manager', function () {
    return view('manager');
})->middleware(['auth', 'role:manager'])->name('manager');
Route::get('role',[rolecontroller::class,'role']);

Route::get('permission',[permissioncontroller::class,'permission']);
Route::get('forms',function(){
    return view('Roleform');
});
Route::post('formdata',[formcontroller::Class,'Rolestore']);
Route::get('permissionForm',function(){
    return view('permissionForm');
});
Route::post('Permissionform',[formcontroller::class, 'permissionStore']);
Route::get('edit/{id}',[rolecontroller::class, 'edit']);
Route::put('update/{id}',[rolecontroller::class, 'update']);
Route::get('delete/{id}',[rolecontroller::class, 'destroy']);
Route::get('edit/{id}',[permissioncontroller::class, 'edit']);
Route::get('delete/{id}',[permissioncontroller::class, 'delete']);
Route::put('update/{id}',[permissioncontroller::class, 'update']);