<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('deposite/money', [App\Http\Controller\HomeController::class, 'deposite'])->name('deposite.money')->middleware('verified');

Route::post('resent-mail', [App\Http\Controller\HomeController::class, 'resent'])->name('varification-resend');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/home', [App\Http\Controller\HomeController::class, 'home'])->name('home');

Route::get('/user/details/{id}', [App\Http\Controller\HomeController::class, 'details'])->name('user.details');

Route::post('/store/user', [App\Http\Controller\HomeController::class, 'store'])->name('store.user');

Route::get('/password/change', [App\Http\Controller\HomeController::class, 'password_change'])->name('password.change')->middleware('verified');
Route::post('/password/change', [App\Http\Controller\HomeController::class, 'update_password'])->name('update.password')->middleware('verified');