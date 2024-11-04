
<?php
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HistoriUController;
use Illuminate\Support\Facades\Route;


// Home Route
Route::get('/', function () {
    return view('home');
})->name('home');

// Other Public Routes
Route::get('/paket', [PaketController::class, 'index'])->name('paket');
Route::get('/histori', [App\Http\Controllers\HistoriController::class, 'index'])->name('historiU');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::post('/upload', [App\Http\Controllers\HistoriController::class, 'store'])->name('upload.store');

// Admin Routes Group (Accessible Only by Admins)
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');  // Admin Dashboard
    Route::resource('/admin/paket', PaketController::class);                       // Paket Management
    Route::resource('/admin/pemesanan', BookingController::class);                 // Booking Management
});

// Booking Routes (Accessible by Authenticated Users)
Route::middleware('auth')->group(function () {
    Route::get('/riwayat-pemesanan', [BookingController::class, 'history'])->name('booking.history');  // Booking History
    Route::get('/booking/{paket}', [BookingController::class, 'create'])->name('booking.create');      // Create Booking
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');               // Store Booking
});
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // For showing the login form
Route::post('/login', [LoginController::class, 'login'])->name('login.submit'); // For handling the login request

