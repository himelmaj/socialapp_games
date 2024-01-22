<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

// livewire routes


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');
    Route::view('profile', 'profile')->name('profile');
    Route::view('chats', 'chats')->name('chats');
    Route::view('add-chat', 'add-chat')->name('add-chat');
    Route::view('contact', 'contact')->name('contact');
 });



require __DIR__.'/auth.php';
