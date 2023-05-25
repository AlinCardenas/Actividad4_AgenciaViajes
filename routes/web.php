<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthApiController;
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
//* Iniciar sesion
Route::get('/', [AuthApiController::class, 'showLoginForm'])->name('auth.form');
Route::post('/auth/login', [AuthApiController::class, 'login'])->name('auth.login');

Route::group(['middleware' => 'session'], function () {
    //* Ventana principal
    Route::controller(BaseController::class)->group(function(){
        Route::get('/inicio', 'main')->name('main');
    });

    //* Cerrar sesion
    Route::get('/auth/logout', [AuthApiController::class, 'cerrar']);

    //* Vistas de usuario
    Route::controller(UserViewController::class)->group(function() {
        Route::get('/destinos', 'getDestinations')->name('destinations.index');
        Route::get('/vuelos', 'getFlights')->name('flights.index');
        Route::get('/hoteles', 'getHotels')->name('hotels.index');
    });
});


/*
    Route::middleware('auth')->group(function () 
    {
        //* Perfil
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
*/

require __DIR__.'/auth.php';
