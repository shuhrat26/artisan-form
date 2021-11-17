<?php
use Illuminate\Support\Facades\Route;


Route::middleware(config('artisan-form.middleware'))->name('artisan.')->group(function (){
    Route::get('artisan', [\Shuhrat26\ArtisanForm\Http\Controllers\ArtisanController::class, 'index'])->name('index');
    Route::post('artisan', [\Shuhrat26\ArtisanForm\Http\Controllers\ArtisanController::class, 'perform'])->name('perform');
});

