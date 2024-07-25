<?php

use Illuminate\Support\Facades\Route;   
use Illuminate\Http\Request; // Tambahkan ini
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\SpecialistDoctorController;
use App\Http\Controllers\FeedbackController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/provider/{id}', [ProviderController::class, 'show'])->name('provider.show');
Route::get('/account', [AccountController::class, 'index'])->name('account');
Route::get('/notification', [NotificationController::class, 'index'])->name('notification');
Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service.detail');
Route::get('/appointment', [AppointmentController::class, 'create'])->name('appointment.create');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

// Pilih salah satu controller untuk rute ini dan hapus yang lain
Route::get('/jadwal-dokter', [JadwalDokterController::class, 'jadwalDokter'])->name('jadwal.dokter');
// Jika yang benar adalah AppointmentController, gunakan ini dan hapus yang di atas
// Route::get('/jadwal-dokter', [AppointmentController::class, 'jadwalDokter'])->name('jadwal.dokter');

Route::get('/specialist/anjing', [SpecialistDoctorController::class, 'showAnjing'])->name('specialist.anjing');
Route::get('/specialist/kucing', [SpecialistDoctorController::class, 'showKucing'])->name('specialist.kucing');
Route::get('/specialist/ayam', [SpecialistDoctorController::class, 'showAyam'])->name('specialist.ayam');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::post('/kritik-saran-submit', function (Request $request) {
    // Logika untuk menyimpan data kritik dan saran
    return back()->with('success', 'Terima kasih atas kritik dan sarannya!');
})->name('kritik.saran.submit');

Route::get('/artikel/artikel1', function () {
    return view('artikel.artikel1');
})->name('artikel1');

Route::get('/artikel/artikel2', function () {
    return view('artikel.artikel2');
})->name('artikel2');

Route::get('/artikel/artikel3', function () {
    return view('artikel.artikel3');
})->name('artikel3');

Route::post('/kritik-saran-submit', [FeedbackController::class, 'submit'])->name('kritik.saran.submit');
