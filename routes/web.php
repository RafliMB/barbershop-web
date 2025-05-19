<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::get('/', function () {
//     return view('pages.home');
// });

// Route::get('/tentang', function () {
//     return view('pages.tentang');
// });

// Route::get('/layanan', function () {
//     return view('pages.layanan');
// });

// Route::get('/galeri', function () {
//     return view('pages.galeri');
// });

// Route::get('/produk', function () {
//     return view('pages.produk'); // Buat file produk.blade.php nanti
// });


Route::get('/', function () {
    return view('welcome');
});

// Admin
Route::view('/admin/dashboard', 'admin.dashboard');


require __DIR__.'/auth.php';
