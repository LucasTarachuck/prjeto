<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransparenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("home", [HomeController::class, "index"]);

Route::get("transparence", [TransparenceController::class, "index"]);
Route::get('transparence/create', [TransparenceController::class, 'create']);
Route::post('transparence', [TransparenceController::class, 'store']);
Route::get('transparence/{id}/edit', [TransparenceController::class, 'edit']);
Route::put('transparence/{id}', [TransparenceController::class, 'update']);
Route::delete('transparence/{id}', [TransparenceController::class, 'destroy']);