<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserKategoriController;
use App\Http\Controllers\Api\DetailMentorController;
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



Route::get('/', [UserKategoriController::class, 'index']);

Route::get('/detail-mentor/{id}', [DetailMentorController::class, 'CariDetailMentor']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tentang', function () {
    return view('about');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/sertifikasi', function () {
    return view('sertifikasi');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/prakerja', function () {
    return view('prakerja');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/detailmentor', function () {
    return view('detailmentor');
});

Route::get('/admin', [AdminController::class, 'index']);
