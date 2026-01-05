<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;




Route::get('/', [WebController::class, 'index'])->name('/');
Route::get('/about', [WebController::class, 'about'])->name('front.about-us');
Route::get('/contact-us', [WebController::class, 'show'])->name('front.contact-us');
Route::get('/services', [WebController::class, 'services'])->name('services');
Route::get('/plans-pricing-carousel', [WebController::class, 'plans_carousel'])->name('plans');
Route::get('/plans-pricing', [WebController::class, 'plans_pricing'])->name('plans-pricing');
Route::get('/quick-recharge', [WebController::class, 'quickRecharge'])->name('quick.recharge');
Route::get('/my-account', [WebController::class, 'myAccount'])->name('account');
Route::get('/book-now', [WebController::class, 'bookNow'])->name('book.now');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::get('/services', [WebController::class, 'service'])->name('service');
Route::get('/terms', [WebController::class, 'terms'])->name('terms');
Route::get('/privacy', [WebController::class, 'privacy'])->name('privacy');
Route::post('/contact/send', [WebController::class, 'send_query'])->name('contact.send');