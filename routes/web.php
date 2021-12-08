<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MessageController;

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
    return view('home', ["title" => "Home"]);
});

Route::get('/dashboard', function () {
    return redirect('/');
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About Us",
        "desc" => "There is something about us."
    ]);
});

Route::get('/catalog', function () {
    return view('catalog', [
        "title" => "Catalog",
        "desc" => "Let's order some cakes."
    ]);
});

Route::post('/cart', [CartController::class, 'store']);
Route::get('/cart', [CartController::class, 'index'])->middleware('auth');

Route::post('/deleteItem', [CartController::class, 'destroy']);

Route::post('/checkout', [TransactionController::class, 'store']);

Route::get('/invoice/{file}', [InvoiceController::class, 'index'])->middleware('auth');


Route::get('/transaction', [TransactionController::class, 'index'])->middleware('auth');

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "desc" => "Our address and telephone number, and also you can send us a message using email."
    ]);
});

Route::post('/contact', [MessageController::class, 'store']);

Route::get('ajax/{slug}', function ($slug) {
    return view('ajax.'.$slug);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);