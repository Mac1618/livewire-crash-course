<?php

use App\Livewire\BirdCounter;
use App\Livewire\Counter;
use App\Livewire\LazyLoadingComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// livewire routes:     - php artisan livewire:layout
Route::get('/bird-counter', BirdCounter::class);
Route::get('/counter', Counter::class);
Route::get('/lazy', LazyLoadingComponent::class)->lazy();