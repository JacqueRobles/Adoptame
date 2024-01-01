<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\HeadquarterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetitionController;
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
    Route::get('/pets', 'index')->name('pet.index');
    //Route::middleware('auth')->group(function() {
        Route::get('/pets/create', 'create')->name('pet.create');             //organization
        Route::post('/pets/store', 'store')->name('pet.store');        //organization
        Route::get('/pets/{id}/update', 'edit')->name('pet.edit');             //organization
        Route::post('/pets/{id}/update', 'update')->name('pet.update');        //organization
        Route::get('/pets/{id}/destroy', 'destroy')->name('pet.destroy');      //admin
    //});
    Route::get('/pets/{id}', 'show')->name('pet.show');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::post('/organizations', 'OrganizationController@store')->name('pet.update');   //store
});
Route::controller(OrganizationController::class)->group(function() {
    Route::get('/organizations', 'index')->name('organization.index');     //user role organization
    Route::get('/organizations/new', 'create')->name('organization.create');     //user role organization
    Route::post('/organizarions/new', 'store')->name('organization.store');        //organization
    Route::get('/organizations/{id}/update', 'edit')->name('organization.edit');     //user role organization
    Route::post('/organizations/{id}/update', 'update')->name('organization.update');     //user role organization
    Route::get('/organizations/{id}/destroy', 'destroy')->name('organization.destroy');     //user role organization

});


Route::controller(HeadquarterController::class)->group(function() {
    Route::get('/headquarters', 'index')->name('headquarter.index');     //user role organization
    Route::get('/headquarters/new', 'create')->name('headquarter.create');     //user role organization
    Route::post('/headquarters/new', 'store')->name('headquarter.store');        //organization
    Route::get('/headquarters/{id}/update', 'edit')->name('headquarter.edit');     //user role organization
    Route::post('/headquarters/{id}/update', 'update')->name('headquarter.update');     //user role organization
    Route::get('/headquarters/{id}/destroy', 'destroy')->name('headquarter.destroy');     //user role organization

});

Route::controller(AdoptionsController::class)->group(function() {
    Route::get('/adoptions', 'index')->name('adoption.index');     //user role organization
    Route::get('/adoptions/new', 'create')->name('adoption.create');     //user role organization
    Route::post('/adoptions/new', 'store')->name('adoption.store');        //organization
    Route::get('/adoptions/{id}/update', 'edit')->name('adoption.edit');     //user role organization
    Route::post('/adoptions/{id}/update', 'update')->name('adoption.update');     //user role organization
    Route::get('/adoptions/{id}/destroy', 'destroy')->name('adoption.destroy');     //user role organization

});

Route::controller(PetitionController::class)->group(function() {
    Route::get('/petitions', 'index')->name('petition.index');     //user role organization
    Route::get('/pets/{id}/petitions', 'create')->name('petition.create');     //user role organization
    Route::post('/pets/{id}/petitions', 'store')->name('petition.store');        //organization
    Route::get('/pets/{id}/petitions/update', 'edit')->name('petition.edit');     //user role organization
    Route::post('/pets/{id}/petitions/update', 'update')->name('petition.update');     //user role organization
    Route::get('/pets/{id}/petitions/destroy', 'destroy')->name('petition.destroy');     //user role organization

});
// Route::middleware(['auth', 'role:organization'])->group(function () {
//     Route::patch('/adoptions/{id}', 'AdoptionsController@update')->name('adoption.update');   //update
//     Route::put('/pets/{id}', [PetController::class, 'update'])->name('pet.update');   //update
//     Route::get('/pets/create', [PetController::class, 'create'])->name('pet.create');
// });

require __DIR__.'/auth.php';
