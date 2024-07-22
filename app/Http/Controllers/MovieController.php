<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    //index
    public function index()
    {
        $movies = Movie::all();
        //$catogories = Category::all();
        return view('movies.index', [
            'movies' => $movies
        ]);
    }
    /*
    public function showCategory($id)
    {
        $category = Category::find($id);
        $movies = Movie::where('category_id', $id)->get();
        return view('movies.category', [
            'movies' => $movies,
            'category' => $category
        ]);
    }
    public function showMovie($id)
    {
        $movie = Movie::find($id);
        return view('movies.show', [
            'movie' => $movie
        ]);
    }
    */
}
