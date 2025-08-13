<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationsController;

Route::get('/', [DestinationsController::class, 'index']);
