<?php

use App\Livewire\BecomeAMember;
use App\Livewire\FAQs;
use App\Livewire\Home;
use App\Livewire\OurAccountability;
use App\Livewire\OurHistory;
use App\Livewire\ProvideFoodWater;
use App\Livewire\Donate;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/how-we-work', Home::class)->name('how-we-work');
Route::get('/provide-food-water', ProvideFoodWater::class)->name('provide-food-water');
Route::get('/our-accountability', OurAccountability::class)->name('our-accountability');
Route::get('/our-history', OurHistory::class)->name('our-history');
Route::get('/become-a-member', BecomeAMember::class)->name('become-a-member');
Route::get('/faqs', FAQs::class)->name('faqs');
Route::get('/donate', Donate::class)->name('donate');

