<?php

use Illuminate\Support\Facades\Route;

Route::get('lang/{locale}', [\App\Http\Controllers\LanguageController::class, 'swap']);
Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('welcome');
Route::get('/portfolio', [\App\Http\Controllers\FrontendController::class, 'showPortfolio'])->name('portfolio.show');

Route::get('/contact', [\App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [\App\Http\Controllers\FrontendController::class, 'contactStore'])->name('contact.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home');
})->name('dashboard');

Route::group(['prefix' => 'sushant', 'as' => 'sushant.', 'middleware' => ['auth:sanctum', 'verified']], function () {
    //Frontend-Backend Bridge
    Route::resource('/', \App\Http\Controllers\AdminController::class);

    Route::resource('profile', \App\Http\Controllers\ProfileController::class);

    Route::get('myprofile', [\App\Http\Controllers\ProfileController::class, 'myProfile'])->name('myProfile.show');
    Route::post('myprofile', [\App\Http\Controllers\ProfileController::class, 'myProfileUpdate'])->name('myProfile.update');

    Route::resource('seometa', \App\Http\Controllers\SEOMetaController::class);

    Route::resource('about', \App\Http\Controllers\AboutController::class);

    Route::resource('resume', \App\Http\Controllers\ResumeController::class);

    Route::resource('portfolio', \App\Http\Controllers\PortfolioController::class);

    Route::resource('contact', \App\Http\Controllers\ContactsController::class);

    Route::resource('service', \App\Http\Controllers\ServicesController::class);
});
