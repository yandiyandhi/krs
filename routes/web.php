<?php

use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Goodnews;


// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [NavbarController::class, 'home']);
Route::get('/blog', [NavbarController::class, 'blog']);
// Route::get('/goodnews', [NavbarController::class, 'goodnews']);
// Route::get('/service', [NavbarController::class, 'service']);
// Route::get('/about', [NavbarController::class, 'about']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
