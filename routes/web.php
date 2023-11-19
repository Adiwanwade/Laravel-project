<?php


use App\Http\Controllers\HomeController;

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


    Route::get('/', [
        HomeController::class, 'index'
    ]);



    Route::get('/aboutPage', function () {
            return view('aboutPage');
        });
        Route::get('/gallery', function () {
            return view('gallery');
        });
        Route::get('/history', function () {
            return view('history');
        });
        Route::get('/Achievement', function () {
            return view('Achievement');
        });
        Route::get('/contact', function () {
            return view('contact');
        });
