<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', function () {
    return view('index');
})->name('/'); 


Route::get('/about', [WebController::class, 'about'])->name('front.about-us');
Route::get('/contact-us', [WebController::class, 'show'])->name('front.contact-us');
