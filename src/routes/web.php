<?php

use Gdce\Contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;

// use Illuminate\Routing\Route;

// Route::get('contact', function () {
//     return view('contact::contact');
// })->name('contact');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact');

