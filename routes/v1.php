<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Portal\CategoryController as PortalCategoryController;
use App\Http\Controllers\Portal\ItemController as PortalItemController;
use App\Http\Controllers\Portal\Restaurant\MenuCategoryController;
use App\Http\Controllers\Portal\RestaurantController as PortalRestaurantController;
use App\Http\Controllers\Portal\UploadController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\SignController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setlocale')->group(function () {

    Route::get('about/{slug}', [RestaurantController::class, 'show']);

    Route::get('categories/{id}', [CategoryController::class, 'list'])->whereNumber('id');

    Route::get('items/{id}', [ItemController::class, 'list'])->whereNumber('id');

    Route::get('order-settings/{restaurant_id}', [OrderController::class, 'settings'])->whereNumber('restaurant_id');

    Route::group(['prefix' => 'portal', 'as' => 'portal.'], function() {

        Route::post('sign-in', [SignController::class, 'signIn']);

        Route::middleware(['auth:sanctum'])->group(function () {

            Route::apiResource('restaurants', PortalRestaurantController::class)->middleware('role:Super Admin');

            Route::apiResource('restaurants.categories', MenuCategoryController::class)->middleware('role:Super Admin');

            Route::apiResource('categories', PortalCategoryController::class)->middleware('role:Super Admin');

            Route::apiResource('categories.items', PortalItemController::class)->shallow()->middleware('role:Super Admin');

            Route::post('uploads', [UploadController::class, 'store'])->middleware('role:Super Admin');

        });

    });

});
