<?php

use App\Http\Controllers\PhotoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/staff/{id}/photos/create/{path}', [PhotoController::class, 'createStaffPhoto']);

Route::get('/product/{id}/photos/create/{path}', [PhotoController::class, 'createProductPhoto']);

Route::get('/staff/{id}/photos/read/all', [PhotoController::class, 'readStaffPhoto']);

Route::get('/product/{id}/photos/read/all', [PhotoController::class, 'readProductPhoto']);

Route::get('/staff/{id}/photos/update/{idPhoto}/{path}', [PhotoController::class, 'updateStaffPhoto']);

Route::get('/product/{id}/photos/update/{idPhoto}/{path}', [PhotoController::class, 'updateProductPhoto']);

Route::get('/staff/{id}/photos/delete/{idPhoto}', [PhotoController::class, 'deleteStaffPhoto']);

Route::get('/product/{id}/photos/delete/{idPhoto}', [PhotoController::class, 'deleteProductPhoto']);