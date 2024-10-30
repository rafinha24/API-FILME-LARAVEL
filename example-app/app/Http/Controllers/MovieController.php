<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    
    public function store(Request $request)
    {

        $validated = $request->validate([
            'file' => 'required|image|mimes:jpeg,png|max:2048',
        ]);
        $path = ($request -> FILE('file') -> store('images', 'public'));
        
        $movie = Movie::create($request->all());
        return response()->json(['arquivo' => $path], 201);
    }

    
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return response()->json($movie);
    }

    
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return response()->json($movie);
    }

    
    public function destroy($id)
    {
        Movie::destroy($id);
        return response()->json(null, 204);
    }
    


    
}

