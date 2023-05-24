<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionsController;
use App\Http\Controllers\TripsController;
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

//Primer vista
Route::get('/', function () {
    return view('auth.login');
});


Route::middleware('auth')->group(function () {

    // Inicio
    Route::controller(BaseController::class)->group(function(){
        Route::get('/inicio', 'main')->name('main');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//! Revisar
//Ruta suscripcion
// Route::post('/suscripcion', [SubscriptionsController::class, 'store'])->name('suscripcion.store');





