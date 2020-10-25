<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::patch('/users/{user}/infected', [App\Http\Controllers\UserInfectionMarkController::class, 'update'])
    ->name('user.infected');

Route::resource('users', App\Http\Controllers\UserController::class)->only(['index', 'show']);

Route::group(['prefix' => 'messages'], function () {
    Route::get('/', [App\Http\Controllers\MessagesController::class, 'index'])->name('messages.index');
    Route::get('create/{recipient}', [App\Http\Controllers\MessagesController::class, 'create'])->name('messages.create');
    Route::post('/', [App\Http\Controllers\MessagesController::class, 'store'])->name('messages.store');
    Route::get('{id}', [App\Http\Controllers\MessagesController::class, 'show'])->name('messages.show');
    Route::put('{id}', [App\Http\Controllers\MessagesController::class, 'update'])->name('messages.update');
});
