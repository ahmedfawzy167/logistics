<?php

use App\Http\Controllers\Api\V1\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\BlogController;
use App\Http\Controllers\Api\V1\ContactController;
use App\Http\Controllers\Api\V1\PortfolioController;
use App\Http\Controllers\Api\V1\ServiceController;

Route::namespace('App\Http\Controllers\Api\V1')
    ->prefix('v1')
    ->group(function () {
        /* Start of Auth Routes */
        Route::middleware('lang')->group(function () {
            Route::post('/register', [AuthController::class, 'register']);
            Route::post('/login', [AuthController::class, 'login']);
            Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
            Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
            Route::post('/reset-password', [AuthController::class, 'resetPassword']);
            /* End of Auth Routes */
        });

        /* Start of Portfolios Routes */
        Route::get('/portfolios', [PortfolioController::class, 'index']);
        /* End of Portfolios Routes */

        /* Start of Services Routes */
        Route::get('/services', [ServiceController::class, 'index']);
        /* End of Services Routes */

        /* Start of Contact Routes */
        Route::get('/contact-details', [ContactController::class, 'index']);
        Route::post('/contact', [ContactController::class, 'store'])->middleware('lang');
        /* End of Contact Routes */

        /* Start of Blogs Routes */
        Route::get('/blogs', [BlogController::class, 'index']);
        /* End of Blogs Routes */
    });
