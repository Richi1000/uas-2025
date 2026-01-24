<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PricingController;
use App\Http\Controllers\Api\LatestPostController;
use App\Http\Controllers\Api\ContactController;

/*
|--------------------------------------------------------------------------
| Public API Routes
|--------------------------------------------------------------------------
| API ini digunakan oleh client (frontend / mobile app)
| untuk mengakses data sistem absensi QR Code
*/

// ===== PRICING =====
Route::get('/pricings', [PricingController::class, 'index']);     
Route::post('/pricings', [PricingController::class, 'store']);    
Route::put('/pricings/{pricing}', [PricingController::class, 'update']); 
Route::delete('/pricings/{pricing}', [PricingController::class, 'destroy']); 

// ===== LATEST POSTS =====
Route::get('/posts', [LatestPostController::class, 'index']);
Route::post('/posts', [LatestPostController::class, 'store']);
Route::put('/posts/{post}', [LatestPostController::class, 'update']);
Route::delete('/posts/{post}', [LatestPostController::class, 'destroy']);

// ===== CONTACT (FORM SUBMISSION) =====
Route::post('/contact', [ContactController::class, 'store']);

// ===== TEST API =====
Route::get('/', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'API is working properly'
    ]);
});
