<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing'); // Ini merujuk ke file landing.blade.php tadi
});