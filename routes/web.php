<?php

use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');


Route::get('/home', function () {
    return view('home');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/feed', [ProfileController::class, 'feed'])->name('feed');
Route::get('/travel', [ProfileController::class, 'travel'])->name('travel');
Route::get('/restaurants', [ProfileController::class, 'restaurant'])->name('restaurant');
Route::get('/hotels', [ProfileController::class, 'hotel'])->name('hotel');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/setting', [ProfileController::class, 'setting'])->name('setting');

