<?php

use App\Livewire\Home;
use App\Livewire\OurAccountability;
use App\Livewire\ProvideFoodWater;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/how-we-work', Home::class)->name('how-we-work');
Route::get('/provide-food-water', ProvideFoodWater::class)->name('provide-food-water');
Route::get('/our-accountability', OurAccountability::class)->name('our-accountability');

