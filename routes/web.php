<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionsController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\HeadquarterController;
use App\Http\Controllers\HomeController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:organization'])->group(function () {
    Route::patch('/adoptions/{id}', 'AdoptionsController@update')->name('adoption.update');   //update
    Route::put('/pets/{id}', [PetController::class, 'update'])->name('pet.update');   //update
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::post('/organizations', 'OrganizationController@store');   //store
});

require __DIR__.'/auth.php';
