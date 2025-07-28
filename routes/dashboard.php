<?php

use App\Models\Position;
use App\Models\VillageInstitution;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SubVillageController;
use App\Http\Controllers\VillageSettingController;
use App\Http\Controllers\VillageOfficialController;
use App\Http\Controllers\VillageInstitutionController;

Route::get('/admin/dashboard', function () {
    $data['page_title'] = 'Dashboard';
    return view('admin.dashboard', $data);
})->middleware('auth')->name('admin.dashboard');

Route::prefix('admin/informasi-desa')->middleware('auth')->name('admin.informasi-desa.')->group(function () {
    Route::get('/', [VillageSettingController::class, 'index'])->name('index');
    Route::put('/{id}', [VillageSettingController::class, 'update'])->name('update');
});

Route::prefix('admin/slider')->middleware('auth')->name('admin.slider.')->group(function () {
    Route::get('/', [SliderController::class, 'index'])->name('index');
    Route::get('/create', [SliderController::class, 'create'])->name('create');
    Route::post('/', [SliderController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [SliderController::class, 'edit'])->name('edit');
    Route::put('/{id}', [SliderController::class, 'update'])->name('update');
    Route::delete('/{id}', [SliderController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/artikel')->middleware('auth')->name('admin.artikel.')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/', [ArticleController::class, 'store'])->name('store');
    Route::get('/{slug}/edit', [ArticleController::class, 'edit'])->name('edit');
    Route::put('/{slug}', [ArticleController::class, 'update'])->name('update');
    Route::patch('/{slug}', [ArticleController::class, 'updateStatus'])->name('update-status');
    Route::delete('/{slug}', [ArticleController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/kategori')->middleware('auth')->name('admin.kategori.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/{slug}', [CategoryController::class, 'show'])->name('show');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    Route::put('/{slug}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{slug}', [CategoryController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/lembaga-desa')->middleware('auth')->name('admin.lembaga-desa.')->group(function () {
    Route::get('/', [VillageInstitutionController::class, 'index'])->name('index');
    Route::get('/create', [VillageInstitutionController::class, 'create'])->name('create');
    Route::get('/{id}', [VillageInstitutionController::class, 'edit'])->name('edit');
    Route::post('/', [VillageInstitutionController::class, 'store'])->name('store');
    Route::put('/{id}', [VillageInstitutionController::class, 'update'])->name('update');
    Route::delete('/{id}', [VillageInstitutionController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/halaman')->middleware('auth')->name('admin.halaman.')->group(function () {
    Route::get('/beranda', [PageController::class, 'beranda'])->name('beranda');
    Route::get('/sejarah-desa', [PageController::class, 'sejarahDesa'])->name('sejarah-desa');
    Route::get('/visi-misi', [PageController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/monografi-desa', [PageController::class, 'monografiDesa'])->name('monografi-desa');
    Route::get('/struktur-organisasi', [PageController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
    Route::get('/perangkat-desa', [PageController::class, 'perangkatDesa'])->name('perangkat-desa');
    Route::get('/lembaga-desa', [PageController::class, 'lembagaDesa'])->name('lembaga-desa');
    Route::get('/hubungi-kami', [PageController::class, 'hubungiKami'])->name('hubungi-kami');
    Route::get('/kesehatan', [PageController::class, 'kesehatan'])->name('kesehatan');
    Route::put('/{slug}/update', [PageController::class, 'update'])->name('update');
    Route::get('/badan-permusyawaratan-desa', [PageController::class, 'badanPermusyawaratanDesa'])->name('badan-permusyawaratan-desa');
    
});

Route::prefix('admin/perangkat-desa')->middleware('auth')->name('admin.perangkat-desa.')->group(function () {
    Route::get('/', [VillageOfficialController::class, 'index'])->name('index');
    Route::get('/create', [VillageOfficialController::class, 'create'])->name('create');
    Route::post('/', [VillageOfficialController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [VillageOfficialController::class, 'edit'])->name('edit');
    Route::put('/{id}', [VillageOfficialController::class, 'update'])->name('update');
    Route::delete('/{id}', [VillageOfficialController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/posisi')->middleware('auth')->name('admin.posisi.')->group(function () {
    Route::get('/', [PositionController::class, 'index'])->name('index');
    Route::get('/{id}', [PositionController::class, 'show'])->name('show');
    Route::post('/', [PositionController::class, 'store'])->name('store');
    Route::put('/{id}', [PositionController::class, 'update'])->name('update');
    Route::delete('/{id}', [PositionController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/dukuh')->middleware('auth')->name('admin.dukuh.')->group(function () {
    Route::get('/', [SubVillageController::class, 'index'])->name('index');
    Route::get('/create', [SubVillageController::class, 'create'])->name('create');
    Route::get('/{slug}', [SubVillageController::class, 'edit'])->name('edit');
    Route::post('/', [SubVillageController::class, 'store'])->name('store');
    Route::put('/{slug}', [SubVillageController::class, 'update'])->name('update');
    Route::delete('/{slug}', [SubVillageController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/user')->middleware('auth')->name('admin.user.')->group(function () {
   Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
});

Route::middleware('auth')->group(function () {
    Route::post('/images/upload', [ImageController::class, 'upload'])->name('images.upload');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
