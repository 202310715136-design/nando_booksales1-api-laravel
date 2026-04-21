<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $data = Genre::getData();
        return view('genre', compact('data'));
    }
}