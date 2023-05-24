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

// Inicio
Route::controller(BaseController::class)->group(function()
{
    Route::get('/', 'main')->name('main');
});
//User views
Route::get('/flights',function()
{
    return view('userViews.flights');
})->name('flights.index');
Route::get('/destinations',function()
{
    return view('userViews.destinations');
})->name('destinations.index');
Route::get('/hotels',function()
{
    return view('userViews.hotels');
})->name('hotels.index');
Route::get('/dashboard', function () 
{
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/trips', function () 
{
    return view('trips.create');
})->middleware(['auth', 'verified'])->name('trips');

Route::middleware('auth')->group(function () 
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //* Consumir api
    Route::get('/test', [ApiController::class, 'getData']);
});
//Ruta suscripcion
Route::post('/suscripcion', [SubscriptionsController::class, 'store'])->name('suscripcion.store');
require __DIR__.'/auth.php';
//Inicio antiguo
Route::get('/', function () 
{
    return view('welcome');
});
Route::get('/vuelos', function () 
{
    return view('flights.index');
});
Route::get('/vuelos/reservar', function () {
    return view('flights.create');
});
