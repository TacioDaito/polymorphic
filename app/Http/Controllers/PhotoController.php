<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Photo;
use App\Models\Product;

class PhotoController extends Controller
{
    public function createProductPhoto(Request $request)
    {
        Product::findOrFail($request->id)->photos()->create(['path' => $request->path]);
        return redirect('/product/' . $request->id . '/photos/read/all');
    }

    public function createStaffPhoto(Request $request)
    {
        Staff::findOrFail($request->id)->photos()->create(['path' => $request->path]);
        return redirect('/staff/' . $request->id . '/photos/read/all');
    }

    public function readProductPhoto(Request $request)
    {
        foreach (Product::findOrFail($request->id)->photos as $photo) {
            echo '<br>Id: ' . $photo->id . ', Path: ' . $photo->path . ';';
        };
    }

    public function readStaffPhoto(Request $request)
    {
        foreach (Staff::findOrFail($request->id)->photos as $photo) {
            echo '<br>Id: ' . $photo->id . ', Path: ' . $photo->path . ';';
        };
    }
}
