<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('/user/settings', [UserProfileController::class, 'show'])->middleware('auth')->name('user.settings');

Route::prefix('legal')->name('legal.')->group(function(){
    Route::view('legal-disclosure', 'legal.legal_disclosure')->name('legal-disclosure');
    Route::view('terms-of-service', 'legal.terms_of_service')->name('terms-of-service');
    Route::view('privacy-policy', 'legal.privacy_policy')->name('privacy-policy');
    Route::view('privacy-policy/arcade-driver', 'legal.privacy_policy_ad')->name('privacy-policy-ad');
});

Route::prefix('redirect')->name('redirect.')->group(function(){
    Route::redirect("discord", "https://discord.gg/WzdyBnm")->name('discord');
    Route::redirect("instagram", "https://www.instagram.com/_vcc_online_/")->name('instagram');
    Route::redirect("twitter", "https://twitter.com/vcc_online")->name('twitter');
});

//Route::view('sponsorship', 'sponsorship')->name('sponsorship');

// Email verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/?verified=1');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
