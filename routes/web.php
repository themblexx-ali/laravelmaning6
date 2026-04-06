<?php
use App\Http\Controllers\BookingController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lapangan', [LapanganController::class, 'index'])->name('lapangan.index');

Route::get('/lapangan/{id}', [LapanganController::class, 'detail'])->name('lapangan.detail');

Route::get('/jadwal', [JadwalController::class, 'index'])
    ->name('jadwal.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/booking', [BookingController::class, 'index'])->name('booking.index')->middleware(['auth', 'verified']);

Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create')->middleware(['auth', 'verified']);

// Route::get('/booking', function () {
//     return view('booking.index');
// })->middleware(['auth', 'verified'])->name('booking');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
