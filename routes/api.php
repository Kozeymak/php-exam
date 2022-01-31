<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ThingController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UseController;

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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/reg', [AuthController::class, 'customRegistration']);

Route::group(['prefix' => '/thing', 'middleware'=>'auth:sanctum'], function(){
    Route::get('', [ThingController::class, 'show']);
    Route::get('/{id}', [ThingController::class, 'showExact']);
    Route::post('/', [ThingController::class, 'create']);
    Route::delete('/{id}', [ThingController::class, 'delete']);
    Route::post('/{id}', [ThingController::class, 'update']);
});

Route::group(['prefix' => '/place', 'middleware'=>'auth:sanctum'], function(){
    Route::get('', [PlaceController::class, 'show']);
    Route::post('', [PlaceController::class, 'create']);
    Route::delete('/{id}', [PlaceController::class, 'delete']);
    Route::post('/{id}', [PlaceController::class, 'update']);
});

Route::middleware('auth:sanctum')->post('/use/{thing_id}/give/{to_id}', [UseController::class, 'give']);
Route::middleware('auth:sanctum')->post('/use/{id}', [UseController::class, 'update']);