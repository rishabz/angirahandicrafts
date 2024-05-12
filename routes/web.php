<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

// website routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/blog',[HomeController::class, 'blog']);
Route::get('/blog/{title}',[HomeController::class, 'blogDetails']);
Route::get('/store',[HomeController::class, 'store']);
Route::get('/about-us',[HomeController::class, 'aboutUs']);
Route::get('/contact-us',[HomeController::class, 'contactUs']);
Route::get('/shop',[HomeController::class, 'shop']);
// website routes

// login routes
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login_submit',[AuthController::class,'login'])->name('login_submit');
// login routes


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard',function(){
        echo "Wellcome to dashboard.";
    
        // $user = Auth::user();
        // echo $user->hasRole('Supper Admin');die();
    
        // Auth::logout(); 
    })->name('dashboard');
});
