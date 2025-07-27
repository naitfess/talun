<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::controller(GuestController::class)->group(function () {
    Route::get('/', 'beranda')->name('beranda');
    Route::get('/sejarah-desa', 'sejarahDesa')->name('sejarah-desa');
    Route::get('/visi-misi', 'visiMisi')->name('visi-misi');
    Route::get('/monografi-desa', 'monografiDesa')->name('monografi-desa');
    Route::get('/struktur-organisasi', 'strukturOrganisasi')->name('struktur-organisasi');
    Route::get('/perangkat-desa', 'perangkatDesa')->name('perangkat-desa');
    Route::get('/lembaga-desa', 'lembagaDesa')->name('lembaga-desa');
    Route::get('/lembaga-desa/{slug}', 'lembagaDesaDetail')->name('lembaga-desa-detail');
    Route::get('/kesehatan', 'kesehatan')->name('kesehatan');
    Route::get('/dukuh', 'dukuh')->name('dukuh');
    Route::get('/dukuh/{slug}', 'dukuhDetail')->name('dukuh-detail');
    Route::get('/artikel', 'artikel')->name('artikel');
    Route::get('/artikel/kategori/{slug}', 'artikelKategori')->name('artikel-kategori');
    Route::get('/artikel/{slug}', 'artikelDetail')->name('artikel-detail');
    Route::get('/hubungi-kami', 'hubungiKami')->name('hubungi-kami');
});

// route for the dashboard


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';
