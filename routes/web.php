<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;
use App\Http\Controllers\ProfileController;

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
Route::get('/nos-resto', function () {
    return view('nos-restaurant');
});
Route::get('/about', function () {
    return view('about');
});

/*MEEEEEEEEEEEEEEEENUUUUUUUUUUUUUU*/ 
Route::get('/menu', [menuController::class, 'index'])->name('menu.index');
Route::get('/menu', [menuController::class, 'store'])->name('menu.store');
Route::get('/validation', [menuController::class, 'validation'])->name('menu.validation');






/* blabla */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });
