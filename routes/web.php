<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/blog", [BlogController::class, "index"]);
Route::delete("/blog/{id}", [BlogController::class, "destroy"]);
Route::get("/blog/create", [BlogController::class, "create"]);
Route::post("/blog", [BlogController::class, "store"]);
Route::put("/blog/{id}", [BlogController::class, "update"]);
Route::get("/blog/{id}/edit", [BlogController::class, "edit"]);

