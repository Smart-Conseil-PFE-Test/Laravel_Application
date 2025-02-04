<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::apiResource('articles', ArticleController::class);
Route::get('/', function () {
    return view('welcome');
});
