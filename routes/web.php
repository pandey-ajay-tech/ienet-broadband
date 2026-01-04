<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;




Route::get('/', [WebController::class, 'index'])->name('front.home');
Route::get('/about', [WebController::class, 'about'])->name('front.about-us');
Route::get('/contact-us', [WebController::class, 'show'])->name('front.contact-us');
