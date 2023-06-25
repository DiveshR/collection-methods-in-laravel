<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RoleController;

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

Route::get('users', [UserController::class,'index'])->name('users');
Route::resource('articles', ArticleController::Class);
Route::resource('roles', RoleController::class);
