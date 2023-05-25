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

Route::get('/staff/{id}/photos/create/{path}', function ($id, $path) {
    Staff::find($id)->photos()->create(['path' => $path]);
    return redirect('/staff/' . $id . '/photos/read/all');
});

Route::get('/product/{id}/photos/create/{path}', function ($id, $path) {
    Product::find($id)->photos()->create(['path' => $path]);
    return redirect('/product/' . $id . '/photos/read/all');
});

Route::get('/staff/{id}/photos/read/all', function ($id) {
    foreach (Staff::find($id)->photos as $photo) {
        echo '<br>Id: ' . $photo->id . ', Path: ' . $photo->path . ';';
    };
});

Route::get('/product/{id}/photos/read/all', function ($id) {
    foreach (Product::find($id)->photos as $photo) {
        echo '<br>Id: ' . $photo->id . ', Path: ' . $photo->path . ';';
    };
});