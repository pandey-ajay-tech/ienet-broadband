<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;




Route::get('/', [WebController::class, 'index'])->name('/');
Route::get('/about', [WebController::class, 'about'])->name('front.about-us');
Route::get('/contact-us', [WebController::class, 'show'])->name('front.contact-us');
Route::get('/services', [WebController::class, 'services'])->name('services');
Route::get('/plans-pricing', [WebController::class, 'plans'])->name('plans');
Route::get('/quick-recharge', [WebController::class, 'quickRecharge'])->name('quick.recharge');
Route::get('/my-account', [WebController::class, 'myAccount'])->name('account');
Route::get('/book-now', [WebController::class, 'bookNow'])->name('book.now');
Route::get('/contact-us', [WebController::class, 'contact'])->name('contact');


Route::get('/services-carousel', [WebController::class, 'carousel'])->name('services.carousel');

Route::get('/service-d-broadband', [WebController::class, 'fiberBroadband'])->name('service.broadband');

Route::get('/service-d-iptv', [WebController::class, 'iptv'])->name('service.iptv');

Route::get('/service-d-cyber-security', [WebController::class, 'cyberSecurity'])->name('service.cyber.security');

Route::get('/service-d-landline', [WebController::class, 'landline'])->name('service.landline');

Route::get('/service-d-tv', [WebController::class, 'fireTv'])->name('service.firetv');

Route::get('/service-d-connectivity', [WebController::class, 'connectivity'])->name('service.connectivity');
