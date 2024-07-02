<?php

use App\Http\Controllers\UserController\ProfileController;
use App\Http\Controllers\UserController\AccommodationController;
use App\Http\Controllers\UserController\FeedController;
use App\Http\Controllers\UserController\FrontendController;
use App\Http\Controllers\UserController\LocationController;
use App\Http\Controllers\UserController\RestaurantController;
use app\Http\Controllers\UserProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});


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

Route::get('/test2', function () {
    return view('user.single-hotel');
});

Route::get('/user/name', [AuthController::class, 'getLoggedInUserName'])->name('user.name');




Route::middleware(['auth'])->group(
    function () {
        Route::get('/feed', [FeedController::class, 'feed'])->name('feed');
        Route::get('/travel', [LocationController::class, 'travel'])->name('travel');
        Route::get('/restaurants', [RestaurantController::class, 'restaurant'])->name('restaurant');
        Route::get('/hotels', [AccommodationController::class, 'hotel'])->name('hotel');
        Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
        Route::get('/setting', [ProfileController::class, 'setting'])->name('setting');

        Route::get('/hotel/details/{id}', [AccommodationController::class, 'singleHotel'])->name('hotel.details');
        Route::get('/restaurant/details/{id}', [RestaurantController::class, 'singleRestaurant'])->name('restaurant.details');
        Route::get('/travel-location/details/{id}', [LocationController::class, 'singleTravelLocation'])->name('travel.details');

        Route::POST('/add-review', [FrontendController::class, 'addReview'])->name('addreview');
    }
);


