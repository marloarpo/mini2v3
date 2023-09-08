<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClimbersController;
use App\Http\Controllers\GuidesController;
use App\Http\Controllers\HomeController;
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

//Route::get('home', [App\Http\Controller\HomeController::class, 'index'])->('home');
//Normal Users Routes List
Route::middleware(['auth', 'user-access:guest'])->group(function () {
    Route::get('/home',[HomeController::class, 'index'])->name('guest.home');
});

Route::middleware(['auth', 'user-access:guide'])->group(function () {
    Route::get('/guide/home',[HomeController::class, 'guideHome'])->name('guide.home');
});

Route::middleware(['auth', 'user-access:officer'])->group(function () {
    Route::get('/officer/home',[HomeController::class, 'officerHome'])->name('officer.home');
});

//Climbers Registration Form
//Climbers Controller -Function Create
//Then redirected Climbers/create.blade.php
Route::get('/climbers/create', [ClimbersController::class, 'create'])->name("climbers.create");

//From Create Page - Action = climbers.store
//Climbers Controller - Function Store(stporing db)
Route::post('/climbers', [ClimbersController::class, 'store'])->name('climbers.store');
//default
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//list
Route::get('/climbers', [ClimbersController::class, 'index']) ->name("climbers.index");
Route::get('/guides', [GuidesController::class, 'index']) ->name("guides.index");

//list individual
Route::get('/climbers/{climber}', [ClimbersController::class, 'show'])->name("climbers.show");

//edit
//partner
Route::get('/climbers/{climber}/edit', [ClimbersController::class, 'edit'])->name("climbers.edit");
Route::put('/climbers/{climber}', [ClimbersController::class, 'update'])->name('climbers.update');

Route::delete('/climbers/{climber}', [ClimbersController::class, 'destroy'])->name('climbers.destroy');





