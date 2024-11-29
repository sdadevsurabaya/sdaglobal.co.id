<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\HcsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\LevelController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\KarirController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\LandingController;
use App\Http\Controllers\Front\IndustriesController;
use App\Http\Controllers\Front\Policy\TermsController;
use App\Http\Controllers\Front\Policy\PolicyController;

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

});

// admin page
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');

// Logout
Route::get('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

// message
Route::get('/message', [AdminController::class, 'message'])->name('admin.message')->middleware('auth');
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

// karir
Route::get('/career', [KarirController::class, 'career'])->name('career');
Route::get('/form_career', [KarirController::class, 'form_career'])->name('form_career');

Route::post('/show_jobs/search_level', [KarirController::class, 'search_level'])->name('home.search_level');


// master level
Route::get('/level', [LevelController::class, 'index'])->name('adminhcs.level');
Route::post('/level/store', [LevelController::class, 'store'])->name('adminhcs.level_store');
Route::get('/level/show/{id}', [LevelController::class, 'show'])->name('adminhcs.level_show');
Route::get('/level/destroy/{id}', [LevelController::class, 'destroy'])->name('adminhcs.level_destroy');
Route::post('/level/update', [LevelController::class, 'update'])->name('adminhcs.level_update');

// jobs
Route::get('/vacancies', [HcsController::class, 'index'])->name('adminhcs.vacancies');
Route::post('/vacancies/store', [HcsController::class, 'vacancies_store'])->name('adminhcs.vacancies_store');
Route::get('/vacancies/detail/{id}', [HcsController::class, 'vacancies_detail'])->name('adminhcs.vacancies_detail');
Route::post('/vacancies/update', [HcsController::class, 'vacancies_update'])->name('adminhcs.vacancies_update');
Route::get('/vacancies/destroy/{id}', [HcsController::class, 'vacancies_destroy'])->name('adminhcs.vacancies_destroy');
Route::get('/vacancies/listCandidateByPosition/{id}', [HcsController::class, 'vacancies_listCandidateByPosition'])->name('adminhcs.vacancies_listCandidateByPosition');
