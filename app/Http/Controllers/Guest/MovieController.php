<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// importazione modello Movie
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        // prendo tutti i Movie dal database movies
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }
    public function show($id)
    {

        // SELECT * FROM movies WHERE id  = $id
        $movie = Movie::find($id);

        return view('movies.show', compact('movie'));
    }
}
