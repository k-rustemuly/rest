<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RestaurantController;
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
Route::group(['prefix' => '/{lang}'], function() {

    Route::get('about/{slug}', [RestaurantController::class, 'show']);

    Route::get('categories/{id}', [CategoryController::class, 'list'])->whereNumber('id');

    Route::get('items/{id}', [ItemController::class, 'list'])->whereNumber('id');

})->whereIn('lang', ['kk', 'ru', 'en']);
