<?php

use App\Http\Controllers\MainController;
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

Route::group(['middleware'=>'auth:sanctum'],function (){
    Route::resource('mun-one',MunOneController::class)->except(['edit','create'])->scoped();
    Route::resource('mun-one.synonym',MunOneSynonymController::class)->except(['edit','create'])->scoped();

    Route::resource('mun-two',MunTwoController::class)->only(['show','index','store','update']);
    Route::resource('mun-two.synonym',MunTwoSynonymController::class)->except(['edit','create'])->scoped();

    Route::resource('names',NameController::class)->only(['show','index','store','update']);
    Route::resource('names.synonym',NameSynonymController::class)->except(['edit','create'])->scoped();

    Route::resource('province',ProvinceController::class)->only(['show','index']);

    Route::resource('source',SourceController::class)->except(['edit','create'])->scoped();
});




