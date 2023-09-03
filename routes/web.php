<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClimbersController;
use App\Http\Controllers\GuidesController;
use FFI\CData;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/climbers', [ClimbersController::class, 'index']) ->name("climbers.index");
Route::get('/guides', [GuidesController::class, 'index']) ->name("guides.index");

Route::get('/climbers/signup', [ClimbersController::class, 'create'])->name("climbers.create");
Route::post('/climbers', [ClimbersController::class, 'store'])->name('climbers.store');