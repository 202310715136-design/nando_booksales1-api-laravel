<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $data = Author::getData();
        return view('author', compact('data'));
    }
}