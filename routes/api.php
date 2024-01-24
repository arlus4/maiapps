<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Api_BerandaController;
use App\Http\Controllers\API\Api_ProductController;
use App\Http\Controllers\API\AuthenticatedController;

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

Route::post('loginUser', [AuthenticatedController::class, 'loginUser']);

Route::post('/refresh', [AuthenticatedController::class, 'refresh']);
Route::get('/detail-product/{slug}', [Api_ProductController::class, 'detail_product']);

Route::middleware('auth:api')->group(function () {
    Route::get('/beranda', [Api_BerandaController::class, 'beranda']);
    Route::post('logoutUser', [AuthenticatedController::class, 'logoutUser']);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
