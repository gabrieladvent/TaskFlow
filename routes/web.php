<?php

use App\Http\Controllers\home\UserController;
use App\Http\Controllers\user\AuthController;
use App\Http\Controllers\user\EmailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('login-proses', [AuthController::class, 'login_user'])->name('login_post');
Route::post('register-proses', [AuthController::class, 'register_user'])->name('register_post');


Route::group([
    'middleware' => ['auth:sanctum', 'isLogin']
], function () {

    Route::get('/email/verify', function () {
        return view('auth.verify');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect('/login');
        }

        $request->fulfill();
        return redirect('/');
    })->name('verification.verify')->middleware('signed');

    Route::post('/email/verification-notification', [EmailController::class, 'resend_email'])
        ->name('verification.resend')
        ->middleware('throttle:6,1');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group([
    'middleware' => [\App\Http\Middleware\isLogin::class]
], function () {

    Route::get('/home', [UserController::class, 'index'])->name('home');
});

Route::get('/modal', function () {
    return view('components.modal');
});


Route::get('landing', function () {
    return view('landing_page');
});

Route::get('/forgot', function () {
    return view('emails.test');
});
Route::get('/verifi', function () {
    return view('emails.verify');
});


