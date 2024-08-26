<?php

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\IndustriesController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\Front\Policy\PolicyController;
use App\Http\Controllers\Front\Policy\TermsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Back\AdminController;

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

// Route::get('/', function () {
//     return view('comingsoon');
// });

Route::get('/', [LandingController::class, 'landing'])->name('landing');

Route::middleware([RedirectIfAuthenticated::class])->group(function () {

    // login page
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

    // register page
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

    // admin page
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');
});

// Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');

// Logout
Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/message', [AdminController::class, 'message'])->name('admin.message');
Route::get('/read_message/{id}', [AdminController::class, 'read_message'])->name('admin.read_message');
Route::post('/reply_message/{id}', [AdminController::class, 'reply_message'])->name('admin.reply_message');

Route::post('/userip', [LandingController::class, 'userip'])->name('userip');
Route::post('/sessionlang', [LandingController::class, 'sessionlang'])->name('sessionlang');
Route::get('/industries', [IndustriesController::class, 'industries'])->name('industries');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/policy', [PolicyController::class, 'policy'])->name('policy.policy');
Route::get('/terms', [TermsController::class, 'terms'])->name('policy.terms');
