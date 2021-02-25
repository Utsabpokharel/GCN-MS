<?php

use App\Http\Controllers\Admin\departmentController;
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
use App\Http\Controllers\Admin\userController;

Route::get('/', function () {
    return view('Admin.layouts.master');
});
//user
Route::resource('user', userController::class);
Route::resource('department', departmentController::class);