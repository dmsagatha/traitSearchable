<?php

use App\Http\Livewire\Users;
use App\Http\Livewire\UsersTable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/**
 * Build a Live Search Box With Laravel Livewire and MySQL
 * https://www.twilio.com/blog/build-live-search-box-laravel-livewire-mysql
 */
Route::middleware(['auth'])->group(function () {
  Route::get('/usuarios', UsersTable::class)->name('users.search');
});

/**
 * Searchable trait to search in multiple columns with Laravel      https://echebaby.com/blog/2021-02-13-searchable-trait-to-search-in-multiple-columns-with-laravel/
 */
Route::middleware(['auth'])->group(function () {
  Route::get('/searchable', Users::class)->name('users.searchable');
});