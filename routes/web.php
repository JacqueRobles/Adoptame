<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionsController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\HeadquarterController;
use App\Http\Controllers\HomeController;
use App\Models\Pet;

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
    $pets = Pet::where('adopter', false)->take(5); // Change 5 to the number of pets you want to display
    return view('index', ['pets' => $pets]);
});

Route::controller(PetController::class)->group(function() {
Route::get('/animals', 'index');
Route::get('/pets/{id}', 'show');
Route::post('/pets/{id}/update', 'update');
Route::get('/pets/{id}/update', 'edit');
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
    Route::get('/pets/create', [PetController::class, 'create'])->name('pet.create');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::post('/organizations', 'OrganizationController@store')->name('pet.update');   //store
});


require __DIR__.'/auth.php';
