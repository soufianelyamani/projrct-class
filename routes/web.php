<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\commandeVenteController;
use App\Models\Client;

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

Route::get('/', function () {
    return view('auth.login');
});


// Route::get('/boot', function () {
//     return view('boot');
// });


//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth', 'verified'])->name('dashboard');

 Route::get('/dashboard', [ClientController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route::resource('user', UserController::class)-> shallow();

/* Route of Client */
Route::resource('/client', ClientController::class);
route::patch('/client/{id}/restore', [ClientController::class, 'restore']);
route::delete('/client/{id}/deletecompletely', [ClientController::class, 'deletecompletely']);
route::get('/client-archive', [ClientController::class, 'archive']);
route::get('/client-all', [ClientController::class, 'all']);

/* Route of Commande */
Route::resource('/commandeVente', commandeVenteController::class);
route::patch('/commandeVente/{id}/restore', [commandeVenteController::class, 'restore']);
route::delete('/commandeVente/{id}/deletecompletely', [commandeVenteController::class, 'deletecompletely']);
route::get('/commandeVente-archive', [commandeVenteController::class, 'archive']);
route::get('/commandeVente-all', [commandeVenteController::class, 'all']);


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



