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
});
