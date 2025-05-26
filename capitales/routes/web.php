<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CapitalController;

Route::get('/', function() {
    return redirect()->route('capitales.index');
});

Route::get('/capitales', [CapitalController::class, 'index'])->name('capitales.index');
Route::get('/capitales/{id}', [CapitalController::class, 'show'])->name('capitales.show');
