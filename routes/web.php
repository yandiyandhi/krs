<?php

use App\Models\Goodnews;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoodnewsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;

// Route::get('/', function () {
//     return view('home');
// });



// Route::get('/', [GoodnewsController::class, 'home']);
// Route::get('/blog', [NavbarController::class, 'blog']);

// Route::get('/goodnews', [GoodnewsController::class, 'goodnews']);

//Route::get('/goodnews/{news:slug}', [GoodnewsController::class, 'news']);
// Route::get('/service', [NavbarController::class, 'service']);
// Route::get('/about', [NavbarController::class, 'about']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(GoodnewsController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/goodnews', 'goodnews');
    Route::get('/goodnews/{news:slug}', 'news');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/service', 'service');
    Route::get('/about', 'about');
    Route::get('/contactus', 'contact');
    Route::get('/privacypolice', 'privacy');
    Route::get('/terms', 'term');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
