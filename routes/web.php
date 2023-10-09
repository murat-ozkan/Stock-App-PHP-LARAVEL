<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\UpdateProductController;

use Illuminate\Support\Facades\Route;

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


Route::get("/", [ProductsController::class, "index"]);
Route::get("/products", [ProductsController::class, "index"]);

Route::get("/addproduct", [AddProductController::class, "index"])->name("addproduct");
Route::post("/addproduct", [AddProductController::class, "addform"]);

Route::get("/updateproduct/{id}", [UpdateProductController::class, "index"])->name("updateproduct");
Route::post("/updateproduct/{id}", [UpdateProductController::class, "addform"]);
