<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionsController;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\UserViewController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () 
{
    //* Inicio
    Route::controller(BaseController::class)->group(function(){
        Route::get('/inicio', 'main')->name('main');
    });

    //* Vistas de usuario
    Route::controller(UserViewController::class)->group(function() {
        Route::get('/destinos', 'getDestinations')->name('destinations.index');
        Route::get('/vuelos', 'getFlights')->name('flights.index');
        Route::get('/hoteles', 'getHotels')->name('hotels.index');
    });

    //* Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// //Ruta suscripcion
// Route::post('/suscripcion', [SubscriptionsController::class, 'store'])->name('suscripcion.store');

require __DIR__.'/auth.php';
