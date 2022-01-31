<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ThingController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\UseController;

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
    return view('main');
});

Route::get('/registration', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'indexlogin'])->name('login');

Route::post('/custom-login', [AuthController::class, 'login']);
Route::post('/reg', [AuthController::class, 'customRegistration']);

Route::get('/logout', [AuthController::class, 'logout']);


Route::group(['prefix' => '/things', 'middleware'=>'auth'], function(){
    Route::get('', [ThingController::class, 'show']);
    Route::get('/{id}', [ThingController::class, 'showExact']);
    // Route::get('/create', [ThingController::class, 'createindex']);
});

Route::get('/creatething', [ThingController::class, 'createindex'])->middleware('auth');
Route::post('/thing', [ThingController::class, 'create'])->middleware('auth');

Route::get('/deletething/{id}', [ThingController::class, 'delete'])->middleware('auth');

Route::get('/updatething/{id}', [ThingController::class, 'updatething'])->middleware('auth');
Route::post('/thingupdate/{id}', [ThingController::class, 'update'])->middleware('auth');

Route::get('/places', [PlaceController::class, 'show'])->middleware('auth');

Route::get('/createplace', [PlaceController::class, 'createindex'])->middleware('auth');
Route::post('/place', [PlaceController::class, 'create'])->middleware('auth');

Route::get('/deleteplace/{id}', [PlaceController::class, 'delete'])->middleware('auth');

Route::get('/updateplace/{id}', [PlaceController::class, 'updateplace'])->middleware('auth');
Route::post('/placeupdate/{id}', [PlaceController::class, 'update'])->middleware('auth');

Route::get('/uses', [UseController::class, 'show'])->middleware('auth');

Route::get('/updateuse/{id}', [UseController::class, 'updateuse'])->middleware('auth');
Route::post('/useupdate/{id}', [UseController::class, 'update'])->middleware('auth');

Route::get('/givething', [UseController::class, 'givething'])->middleware('auth');
Route::post('/thinggive', [UseController::class, 'give'])->middleware('auth');