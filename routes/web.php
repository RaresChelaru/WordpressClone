<?php

use App\Http\Controllers\aggiungiImmagine;
use App\Http\Controllers\nuovaCategoria;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nuovoArticolo;

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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/listaArticoli', function () {
    return view('listaArticoli');
});

Route::get('/listaCategorie', function () {
    return view('listaCategorie');
});

Route::get('/libreria', function(){
    return view('libreria');
});

Route::get('/aggiungiImmagine', function(){
    return view('aggiungiImmagine');
});

Route::post('/insertImmagine',[aggiungiImmagine::class, 'insertImmagine']);

Route::get('/nuovoArticolo', [nuovoArticolo::class, 'f1']);
Route::post('/insertArticolo',[nuovoArticolo::class, 'insertArticolo']);

Route::get('/nuovaCategoria', [nuovaCategoria::class, 'f2']);
Route::post('/insertCategoria',[nuovaCategoria::class, 'insertCategoria']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
