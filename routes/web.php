<?php

use Illuminate\Support\Facades\Route;
use App\Models\Staff;
use App\Models\Photo;
use App\Models\Product;

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
Route::get('createstaffphoto/{id}/{path}', function ($id, $path) {
    Staff::find($id)->photos()->create(['path' => $path]);
});