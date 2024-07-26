<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Search;
use App\Livewire\SearchExample;
use App\Livewire\Welcome;

Route::get('/', Search::class);
Route::get('/search', SearchExample::class);
