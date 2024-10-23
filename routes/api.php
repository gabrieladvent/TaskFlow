<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::controller(AuthController::class)->group(function () {
//     Route::post('register', 'register_user');
//     Route::post('login', 'login_user');
// });

// Email verification routes
// Route::get('/email/verify', function () {
//     return response()->json([
//         'status' => 'success',
//         'message' => 'Cek Email.',
//     ], 201);
// })->middleware('auth:sanctum')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
//     return response()->json([
//         'status' => 'success',
//         'message' => 'Verifikasi Berhasil.',
//     ], 201);
// })->middleware(['auth:sanctum', 'signed'])->name('verification.verify');

// // Email verification notification
// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();
//     return response()->json([
//         'status' => 'success',
//         'message' => 'Email dikirim lagi -_-',
//     ], 201);
// })->middleware(['auth:sanctum', 'throttle:6,1']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
