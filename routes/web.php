<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', function () {
    return view('index');
}); 


Route::get('/about', [WebController::class, 'index'])->name('front.about-us');
Route::get('/contact-us', [WebController::class, 'show'])->name('front.contact-us');
