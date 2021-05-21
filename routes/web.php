<?php

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
    return view('welcome');
});

Route::get('/nuovoArticolo', [nuovoArticolo::class, 'f1']);
Route::post('/insertArticolo',[nuovoArticolo::class, 'insertArticolo']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
