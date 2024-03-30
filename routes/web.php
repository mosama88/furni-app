<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::controller(ThemeController::class)->name('front.')->group(function(){
    Route::get('/about','about')->name('about');
    Route::get('/services','services')->name('services');
    Route::get('/contact','contact')->name('contact');
    Route::get('/displayContact','display')->name('displayContact');
    Route::post('/contact/store','store')->name('contact.store');
});


require __DIR__.'/auth.php';