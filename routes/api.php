<?php
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\UserKategoriController;
use App\Http\Controllers\Api\DetailMentorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('User',[UserController::class, 'indexApi']);
Route::post('User',[UserController::class, 'store']);


Route::post('kategori',[KategoriController::class, 'store']);
Route::GET('kategori',[KategoriController::class, 'index']);
Route::GET('kategori/{id}', [KategoriController::class, 'index']);
Route::PUT('/kategori/{id}', [KategoriController::class, 'index']);

Route::post('user-kategori',[UserKategoriController::class, 'store']);
Route::get('user-kategori',[UserKategoriController::class, 'index']);

Route::post('detail-mentor',[DetailMentorController::class, 'createDetailMentor']);
Route::get('detail-mentor',[DetailMentorController::class, 'index']);
Route::get('detail-mentor/user/{id}', [DetailMentorController::class, 'findDetailByUserId']);
