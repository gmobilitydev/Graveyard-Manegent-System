<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
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


Route::get('/', [HomeController::class, 'whkGraveyards'])->middleware(['auth'])->name('dashboard');

Route::get('/regions', [App\Http\Controllers\website\HomeController::class, 'listRegions'])->middleware(['auth']);
Route::get('/regions/{region}', [App\Http\Controllers\website\HomeController::class, 'showRegion'])->middleware(['auth']);
Route::get('/graves', [App\Http\Controllers\website\HomeController::class, 'searchGraveDashboard'])->middleware(['auth']);
Route::get('/graves/{grave}', [App\Http\Controllers\website\HomeController::class, 'showGrave'])->middleware(['auth']);
// Route::get('/locations', [App\Http\Controllers\website\HomeController::class, 'listLocations'])->middleware(['auth']);
// Route::get('/locations/{location}', [App\Http\Controllers\website\HomeController::class, 'showLocation'])->middleware(['auth']);
Route::get('/graveyard/{graveyard}', [App\Http\Controllers\website\HomeController::class, 'showGraveyard'])->middleware(['auth']);
Route::get('/search', [App\Http\Controllers\website\HomeController::class, 'search'])->name('search');
Route::get('/search-grave', [App\Http\Controllers\website\HomeController::class, 'searchGrave'])->name('search-grave');
Route::get('/search-grave/{grave}', [App\Http\Controllers\website\HomeController::class, 'showGrave'])->name('grave');
Route::get('/search-graveyard', [App\Http\Controllers\website\HomeController::class, 'searchGraveyard'])->name('search-graveyard');



require __DIR__.'/auth.php';
