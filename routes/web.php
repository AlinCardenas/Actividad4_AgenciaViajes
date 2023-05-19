<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Database\Console\Migrations\BaseCommand;
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
Route::controller(BaseController::class)->group(function(){
    Route::get('/', 'main')->name('main');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //* Consumir api
    Route::get('/test', [ApiController::class, 'getData']);
});

require __DIR__.'/auth.php';



//* Inicio antiguo
// Route::get('/', function () {
//     return view('welcome');
// });

//* Dasboard con middleware  
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');