<?php

use App\Http\Front\Controllers\HomeController;
use App\Http\Front\Controllers\SubscribeToEmailListController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::demoAccess('demo');

Route::get('under-construction', function () {
    return redirect()->to('https://spatie.be');
});

Route::middleware('demoMode')->group(function () {
    Route::get('/', HomeController::class);

    Route::post('subscribe', SubscribeToEmailListController::class)->middleware(ProtectAgainstSpam::class);

    Route::view('terms-of-use', 'front.legal.terms-of-use')->name('termsOfUse');
    Route::view('privacy', 'front.legal.privacy')->name('privacy');
});
