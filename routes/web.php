<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Services;
use App\Livewire\Markets;
use App\Livewire\Contact;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/services', Services::class)->name('services');
Route::get('/markets', Markets::class)->name('markets');
Route::get('/contact', Contact::class)->name('contact');
