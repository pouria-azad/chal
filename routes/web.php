<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/dash', 'dashboard')->name('dashboard');;
Route::view('/list', 'list')->name('list');
Route::view('/c', 'c')->name('c');
Route::view('/ch', 'ch')->name('ch');
Route::view('/leaderboard', 'leaderboard')->name('leaderboard');
Route::view('/profile', 'profile')->name('profile');
Route::view('/ss', 'ss')->name('ss');
Route::view('/group', 'group')->name('group');
Route::view('/mod', 'mod')->name('mod');
Route::view('/settings', 'settings')->name('settings');
Route::view('/notif', 'notif')->name('notif');
Route::view('/hist', 'hist')->name('hist');

Route::view('/settings/account', 'settings.account')->name('settings.account');
Route::view('/settings/security', 'settings.security')->name('settings.security');
Route::view('/settings/notifications', 'settings.notifications')->name('settings.notifications');
Route::view('/settings/language-theme', 'settings.language-theme')->name('settings.language-theme');
Route::view('/settings/privacy', 'settings.privacy')->name('settings.privacy');


