<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\ProfileController;
use App\Http\Controllers\API\V1\Admin\GameController;
use App\Http\Controllers\API\V1\Admin\RoleController;
use App\Http\Controllers\API\V1\Admin\TypeController;
use App\Http\Controllers\API\V1\Admin\UserController;
use App\Http\Controllers\API\V1\Admin\BrandController;
use App\Http\Controllers\API\V1\Admin\ScreenController;
use App\Http\Controllers\API\V1\Admin\ConsoleController;
use App\Http\Controllers\API\V1\Admin\StationController;
use App\Http\Controllers\API\V1\Admin\CategoryController;
use App\Http\Controllers\API\V1\Admin\ComplexityController;
use App\Http\Controllers\API\V1\Admin\PermissionController;

// Routes start here

Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    Route::apiResource('profiles', ProfileController::class);
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'security'], function () {
            Route::apiResource('roles', RoleController::class);
            Route::apiResource('permissions', PermissionController::class);
        });
        Route::group(['prefix' => 'inventory'], function () {
            Route::group(['prefix' => 'devices'], function () {
                Route::apiResource('consoles', ConsoleController::class);
                Route::apiResource('screens', ScreenController::class);
            });
            Route::group(['prefix' => 'miscellaneous'], function () {
                Route::apiResource('brands', BrandController::class);
                Route::apiResource('types', TypeController::class);
                Route::apiResource('categories', CategoryController::class);
            });
            Route::apiResource('stations', StationController::class);
            Route::apiResource('games', GameController::class);
            Route::apiResource('complexities', ComplexityController::class);
        });
        Route::apiResource('users', UserController::class);
    });
});
