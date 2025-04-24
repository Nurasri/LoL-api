<?php

use App\Http\Controllers\Api\LoLController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('api/region', [LoLController::class, 'getRegion']);
