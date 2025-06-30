<?php

use App\Models\Cfproducts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/shop', function () {
    $product = Cfproducts::get();

    return view('pages/store', ['products' => $product]);
});
