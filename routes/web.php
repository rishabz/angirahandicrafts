<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/blog',[HomeController::class, 'blog']);
Route::get('/bloge/{title}',[HomeController::class, 'blogeDetails']);
Route::get('/store',[HomeController::class, 'store']);
Route::get('/about-us',[HomeController::class, 'aboutUs']);
Route::get('/contact-us',[HomeController::class, 'contactUs']);
