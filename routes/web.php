<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login',[\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login');
Route::get('/logout',[\App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');





Route::view('/login', 'login');

Route::middleware(['auth'])->group(function (){

    Route::get('/group', [\App\Http\Controllers\ChalController::class, 'index'])->name('group');
    Route::get('/ss', [\App\Http\Controllers\ChalUserController::class, 'index'])->name('chaluser.index');
    Route::post('/chaluser/', [\App\Http\Controllers\ChalUserController::class, 'store'])->name('chaluser.store');
    Route::patch('/chaluser/{id}', [\App\Http\Controllers\ChalUserController::class, 'update'])->name('chaluser.update');

    Route::get('/dash', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::view('/list', 'list')->name('list');
    Route::view('/c', 'c')->name('c');
    Route::view('/ch', 'ch')->name('ch');
    Route::view('/leaderboard', 'leaderboard')->name('leaderboard');
    Route::view('/profile', 'profile')->name('profile');
    Route::view('/sss', 'ss')->name('ss');
    Route::view('/mod', 'mod')->name('mod');
    Route::view('/settings', 'settings')->name('settings');
    Route::view('/notif', 'notif')->name('notif');
    Route::view('/hist', 'hist')->name('hist');

    Route::view('/settings/account', 'settings.account')->name('settings.account');
    Route::view('/settings/security', 'settings.security')->name('settings.security');
    Route::view('/settings/notifications', 'settings.notifications')->name('settings.notifications');
    Route::view('/settings/language-theme', 'settings.language-theme')->name('settings.language-theme');
    Route::view('/settings/privacy', 'settings.privacy')->name('settings.privacy');

});



