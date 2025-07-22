<?php

use App\Http\Controllers\ArticleController;
use App\Models\Position;
use App\Models\VillageInstitution;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\VillageSettingController;
use App\Http\Controllers\VillageOfficialController;
use App\Http\Controllers\VillageInstitutionController;

// ->middleware('auth')
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Route::prefix('pages')->middleware('auth')->name('pages.')->group(function () {
//     Route::get('/', [PageController::class, 'index'])->name('index');
//     Route::get('/create', [PageController::class, 'create'])->name('create');
//     Route::post('/', [PageController::class, 'store'])->name('store');
//     Route::get('/{pageSlug}/show', [PageController::class, 'show'])->name('show');
//     Route::get('/{pageSlug}/edit', [PageController::class, 'edit'])->name('edit');
//     Route::put('/{pageSlug}', [PageController::class, 'update'])->name('update');
//     Route::delete('/{pageSlug}', [PageController::class, 'destroy'])->name('destroy');
//     Route::patch('/{pageSlug}/publish', [PageController::class, 'updatePublish'])->name('updatePublish');
//     Route::put('/{pageSlug}/synchronize', [PageController::class, 'synchronize'])->name('synchronize');
// });

Route::prefix('admin/informasi-desa')->name('admin.informasi-desa.')->group(function () {
    Route::get('/', [VillageSettingController::class, 'index'])->name('index');
    Route::put('/{id}', [VillageSettingController::class, 'update'])->name('update');
});

Route::prefix('admin/slider')->name('admin.slider.')->group(function () {
    Route::get('/', [SliderController::class, 'index'])->name('index');
    Route::get('/create', [SliderController::class, 'create'])->name('create');
    Route::post('/', [SliderController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [SliderController::class, 'edit'])->name('edit');
    Route::put('/{id}', [SliderController::class, 'update'])->name('update');
    Route::delete('/{id}', [SliderController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/artikel')->name('admin.artikel.')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/', [ArticleController::class, 'store'])->name('store');
    Route::get('/{slug}/edit', [ArticleController::class, 'edit'])->name('edit');
    Route::put('/{slug}', [ArticleController::class, 'update'])->name('update');
    Route::patch('/{slug}', [ArticleController::class, 'updateStatus'])->name('update-status');
    Route::delete('/{slug}', [ArticleController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/kategori')->name('admin.kategori.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/{slug}', [CategoryController::class, 'show'])->name('show');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    Route::put('/{slug}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{slug}', [CategoryController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/lembaga-desa')->name('admin.lembaga-desa.')->group(function () {
    Route::get('/', [VillageInstitutionController::class, 'index'])->name('index');
    Route::get('/create', [VillageInstitutionController::class, 'create'])->name('create');
    Route::get('/{id}', [VillageInstitutionController::class, 'edit'])->name('edit');
    Route::post('/', [VillageInstitutionController::class, 'store'])->name('store');
    Route::put('/{id}', [VillageInstitutionController::class, 'update'])->name('update');
    Route::delete('/{id}', [VillageInstitutionController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/halaman')->name('admin.halaman.')->group(function () {
    Route::get('/beranda', [PageController::class, 'beranda'])->name('beranda');
    Route::get('/sejarah-desa', [PageController::class, 'sejarahDesa'])->name('sejarah-desa');
    Route::get('/visi-misi', [PageController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/geografis-demografi', [PageController::class, 'geografisDemografi'])->name('geografis-demografi');
    Route::get('/struktur-organisasi', [PageController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
    Route::get('/perangkat-desa', [PageController::class, 'perangkatDesa'])->name('profil-perangkat');
    Route::get('/lembaga-desa', [PageController::class, 'lembagaDesa'])->name('lembaga-desa');
    Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
    Route::get('/kesehatan', [PageController::class, 'kesehatan'])->name('kesehatan');
});

Route::prefix('admin/perangkat-desa')->name('admin.perangkat-desa.')->group(function () {
    Route::get('/', [VillageOfficialController::class, 'index'])->name('index');
    Route::get('/create', [VillageOfficialController::class, 'create'])->name('create');
    Route::post('/', [VillageOfficialController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [VillageOfficialController::class, 'edit'])->name('edit');
    Route::put('/{id}', [VillageOfficialController::class, 'update'])->name('update');
    Route::delete('/{id}', [VillageOfficialController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/posisi')->name('admin.posisi.')->group(function () {
    Route::get('/', [PositionController::class, 'index'])->name('index');
    Route::get('/{id}', [PositionController::class, 'show'])->name('show');
    Route::post('/', [PositionController::class, 'store'])->name('store');
    Route::put('/{id}', [PositionController::class, 'update'])->name('update');
    Route::delete('/{id}', [PositionController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/dukuh')->name('admin.dukuh.')->group(function () {
    Route::get('/', function () { return view('admin.sub-villages.index');})->name('index');
    Route::get('/create', function () { return view('admin.sub-villages.create');})->name('create');
});

Route::prefix('admin/user')->name('admin.user.')->group(function () {
    Route::get('/', function () { return view('admin.users.index');})->name('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::post('/images/upload', [ImageController::class, 'upload'])->name('images.upload');


require __DIR__.'/auth.php';
