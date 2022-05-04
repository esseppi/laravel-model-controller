<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index()
    {
        $myMovie = Movie::all();
        $data = [
            'movies' => $myMovie
        ];
        return view('pages.homePage', $data);
    }
}
