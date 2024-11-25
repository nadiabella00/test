<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ResiController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TransactionController;

Auth::routes();

// Public Routes (For All Users)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/paket', [PaketController::class, 'index'])->name('paket');

Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/resi/{booking}', [BookingController::class, 'resi'])->name('resi.show');

Route::post('booking/form/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
Route::post('/seats/reserve', [SeatController::class, 'reserve'])->name('seats.reserve');
Route::get('/booking/form', [BookingController::class, 'create'])->name('booking.form');
// Untuk memproses form (POST)
Route::post('booking/form', [BookingController::class, 'store'])->name('booking.form.store');

// Admin Routes (Restricted by Middleware Role: Admin)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/index', [adminController::class, 'adminIndex'])->name('index');
    Route::get('/admin/packages', [PackageController::class, 'index'])->name('admin.packages.index');
    Route::resource('/packages', PackageController::class)->except(['show']);
    Route::put('/packages/{packages}', [PackageController::class, 'update'])->name('admin.package.update');
    Route::resource('/services', ServiceController::class)->except(['show']);
    Route::resource('/bookings', BookingController::class)->except(['bookings.show']);
    Route::resource('/reviews', ReviewController::class);
    Route::put('/reviews/{id}', [ReviewController::class, 'update'])->name('admin.reviews.update');
    Route::resource('/resis', ResiController::class);
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('bookings', BookingController::class);
    });
    
    
});

// User Dashboard Routes (Restricted by Middleware Role: User)
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/booking/resi', [BookingController::class, 'resi'])->name('booking.resi');
    Route::get('/riwayatbooking', [HistoriController::class, 'index'])->name('histori');
    Route::put('/admin/services/{service}/cancel', [ServiceController::class, 'cancel'])->name('admin.services.cancel');
    
});

Route::get('/booking/form/{package_id}', [BookingController::class, 'showForm'])->name('booking.form');

// Route untuk menyimpan data booking
Route::post('/booking/form', [BookingController::class, 'store'])->name('booking.store');

Route::get('/booking/{id}', [BookingController::class, 'show']);

Route::get('/booking/form/{package_id}', [BookingController::class, 'showForm'])->name('booking.form');

Route::get('/booking/{id}/detail', [BookingController::class, 'show'])->name('booking.detail');
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/data-penumpang', [AdminController::class, 'dataPenumpang'])->name('admin.data-penumpang');
});

Route::get('/admin/package/index', [AdminController::class, 'index'])->name('admin.package.index');
Route::resource('booking', BookingController::class);
Route::get('admin/dataPenumpang', [BookingController::class, 'index'])->name('admin.dataPenumpang');

Route::get('transaction/create', [TransactionController::class, 'create'])->name('transaction.create');