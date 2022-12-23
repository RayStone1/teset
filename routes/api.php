<?php

use App\Http\Controllers\MunOneController;
use App\Http\Controllers\MunOneSynonymController;
use App\Http\Controllers\MunTwoController;
use App\Http\Controllers\MunTwoSynonymController;
use App\Http\Controllers\NameController;
use App\Http\Controllers\NameSynonymController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\SourceController;
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



Route::resource('mun-one',MunOneController::class)->except(['edit','create'])->scoped();
Route::resource('mun-one.synonym',MunOneSynonymController::class)->except(['edit','create'])->scoped();

Route::resource('mun-two',MunTwoController::class)->only(['show','index','store','update']);
Route::resource('mun-two.synonym',MunTwoSynonymController::class)->except(['edit','create'])->scoped();

Route::resource('names',NameController::class)->only(['show','index','store','update']);
Route::resource('names.synonym',NameSynonymController::class)->except(['edit','create'])->scoped();




Route::resource('source',SourceController::class)->except(['edit','create'])->scoped();


//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('province',ProvinceController::class)->only(['show','index']);
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});
