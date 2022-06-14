<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    app()->make('first service');
});

Route::get('/about', function (Request $request) {
    // $token = $request->session()->token();
    // $token = csrf_token();
    // dd($token);
    return view('about');
});
// Route::view('/about', 'about');
// Route::get('/about/{roll}', function($roll)
// {
//     return "My roll is $roll";
// });
// Route::match(['get', 'post'],md5('/about'), function () {
//     return view('about');
//     return redirect('/contact');
// })->name('contact.us');

Route::get('/country', function(){
    return view('country');
})->Middleware('CountryMW');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
