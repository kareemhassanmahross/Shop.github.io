<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('product/All-Products');
// });


Route::get("/",[ProductController::class,"index"])->name("get-All-Products");
Route::get("/Add-Product",[ProductController::class,"create"])->name('Add-Product');
Route::post("/Store-Product",[ProductController::class,"store"])->name('Store-Product');
