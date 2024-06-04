<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return file_get_contents(public_path('ui/index.html'));
});

Route::get('/history', function () {
    return file_get_contents(public_path('ui/history.html'));
});


Route::get('/way', function () {
    return file_get_contents(public_path('ui/way.html'));
});

Route::get('/leadership', function () {
    return file_get_contents(public_path('ui/leadership.html'));
});

Route::get('/businesses', function () {
    return file_get_contents(public_path('ui/businesses.html'));
});

Route::get('/news', function () {
    return file_get_contents(public_path('ui/news.html'));
});

Route::get('/careers', function () {
    return file_get_contents(public_path('ui/careers.html'));
});

Route::get('/contact', function () {
    return file_get_contents(public_path('ui/contact.html'));
});