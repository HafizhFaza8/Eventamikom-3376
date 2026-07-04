<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\Admin\TransactionController;

// --- Rute User Area ---
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute detail menggunakan {event}
Route::get('event/{event}', [EventController::class, 'show'])->name('events.show');
// Checkout routes per tugas: tampilkan form dan simpan transaksi
Route::get('checkout/{event}', [CheckoutController::class, 'create'])->name('checkout.create');
Route::post('checkout/{event}', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

// Rute Tambahan Pertemuan 2
Route::get('/katalog', [EventController::class, 'index'])->name('katalog');
Route::get('/tentang', function () {
    return view('about');
})->name('about');


Route::get('/payment/{order_id}', [\App\Http\Controllers\CheckoutController::class, 'payment'])->name('checkout.payment');
Route::get('/success/{order_id}', [\App\Http\Controllers\CheckoutController::class, 'success'])->name('checkout.success');

// Redirect global /login ke route admin.login
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Grouping untuk URL berawalan /admin
Route::prefix('admin')->name('admin.')->group(function () {
    // Rute Login bebas akses
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // Mengamankan Route Administrasi di balik tembok (Middleware)
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // Halaman Laporan Transaksi
        Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');

        // Manajemen Kategori (tetap tersedia)
        Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');

        // Manajemen event menggunakan resource controller
        Route::resource('events', EventAdminController::class);

        Route::post('/midtrans/callback', [\App\Http\Controllers\MidtransWebhookController::class, 'handle']);
    });

});

