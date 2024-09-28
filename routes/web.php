<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Website\Contact\ContactController;
use App\Http\Controllers\Website\Home\HomeController;
use App\Http\Controllers\Website\Product\ProductController;
use App\Http\Controllers\Website\Service\ServiceController;


// if ($this->app->environment('production')) {
//     \URL::forceScheme('https');
// }

Route::get('/', [HomeController::class, 'index'])->name('landing.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('service.show');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/admin.php';
