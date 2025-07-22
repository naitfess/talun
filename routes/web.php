<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/articles', function () {
    return view('articles');
})->name('articles');

Route::get('/article-details', function () {
    return view('article-details');
})->name('article-details');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/page-details', function () {
    return view('page-details');
})->name('page-details');

Route::get('/village-institutions', function () {
    return view('village-institutions');
})->name('village-institutions');

Route::get('/village-institution-details', function () {
    return view('village-institution-details');
})->name('village-institution-details');

Route::get('/sub-villages', function () {
    return view('sub-villages');
})->name('sub-villages');

Route::get('/sub-village-details', function () {
    return view('sub-village-details');
})->name('sub-village-details');


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
