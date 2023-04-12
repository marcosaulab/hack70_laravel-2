<?php

use App\Http\Controllers\PublicController;
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


// ! esiste una rotta di tipo get che abbiamo come uri [quello passato nel browser]


Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/chisiamo', [PublicController::class, 'staff'])->name('aboutus'); // staff è il nome della funzione che usiamo all'interno del PublicController
                                                                            // /chisiamo è l'uri
// rotta parametrica
Route::get('/movie/{id}', [PublicController::class, 'movieShow'])->name('movie.show'); // nome del dato che sto trattando . la funzione  (convenzione in Laravel)                   

Route::get('/movie/genre/{genre}', [PublicController::class, 'movieByGenre'])->name('movie.genre');