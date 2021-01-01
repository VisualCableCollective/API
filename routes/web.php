<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/user/settings', [UserProfileController::class, 'show'])->name('user.settings');

Route::prefix('legal')->name('legal.')->group(function(){
    Route::view('legal-disclosure', 'legal.legal_disclosure')->name('legal-disclosure');
    Route::view('terms-of-service', 'legal.terms_of_service')->name('terms-of-service');
    Route::view('privacy-policy', 'legal.privacy_policy')->name('privacy-policy');
});

Route::prefix('redirect')->name('redirect.')->group(function(){
    Route::redirect("discord", "https://discord.gg/WzdyBnm")->name('discord');
    Route::redirect("instagram", "https://www.instagram.com/_vcc_online_/")->name('instagram');
    Route::redirect("twitter", "https://twitter.com/vcc_online")->name('twitter');
});
