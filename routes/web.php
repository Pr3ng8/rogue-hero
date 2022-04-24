<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{RegistrationController,HomeController,GamesController,StatsController};
use App\Http\Controllers\Auth\LoginController;
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

Route::middleware(['auth'])->group(function () {

    Route::prefix('game')->group(function () {

        Route::post('score', [GamesController::class, 'store'])->name('score');

        Route::post('logout', [LoginController::class, 'gameLogOut'])->name('gameLogOut');
    });

});

Route::prefix('game')->group(function () {
    Route::post('login', [LoginController::class, 'gameLogin'])->name('gameLogin');
});

Route::middleware(['guest'])->group(function () {

    Route::get('/bemutatkozo', [HomeController::class,'landing'])->name('Bemutatkozó');

    Route::get('/regisztracio', [RegistrationController::class,'create'])->name("Regisztráció");
    Route::post('/regisztracio', [RegistrationController::class,'store'])->name("createUser");

    Route::get('login', [LoginController::class, 'create']) ->name('Belépés');

    Route::post('login', [LoginController::class, 'store'])->name('login');

});


Route::middleware(['auth'])->group(function () {

    Route::name('user.')->group(function () {

        Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

        Route::get('/kezdolap', [HomeController::class,'index'])->name("Kezdőlap");

        Route::get('/jatekok', [GamesController::class,'index'])->name("Játékok");

        Route::get('/statok', [StatsController::class,'index'])->name("Statok");

    });

});




