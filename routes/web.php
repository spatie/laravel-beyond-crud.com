<?php

use App\Http\Front\Controllers\HomeController;
use App\Http\Front\Controllers\SampleChapterController;
use App\Http\Front\Controllers\SubscribeToEmailListController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::get('/', HomeController::class);

Route::post('subscribe', SubscribeToEmailListController::class)->middleware(ProtectAgainstSpam::class);
Route::get('sample-chapter', SampleChapterController::class)->name('sample-chapter');

Route::view('terms-of-use', 'front.legal.terms-of-use')->name('termsOfUse');
Route::view('privacy', 'front.legal.privacy')->name('privacy');

