<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AccountGameController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/users', [UserController::class, 'users']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/create', [UserController::class, 'make']);
Route::get('/users/{user}', [UserController::class, 'edit']);
Route::post('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/delete/{user}', [UserController::class, 'delete']);


Route::get('/accounts', [AccountController::class, 'accounts']);
Route::get('/accounts/create', [AccountController::class, 'create']);
Route::post('/accounts/create', [AccountController::class, 'make'])->name('users.create');
Route::get('/accounts/{account}', [AccountController::class, 'edit']);
Route::post('/accounts/{account}', [AccountController::class, 'update']);
Route::delete('/accounts/delete/{account}', [AccountController::class, 'delete']);

Route::get('/games', [GameController::class, 'games']);
Route::get('/accountgames', [AccountGameController::class, 'accountgames']);

