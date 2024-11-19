<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StreamController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/streams', [StreamController::class, 'index']);
Route::post('/streams', [StreamController::class, 'store']);

Route::get('/admin', function () {
    return view('admin.index');
});
