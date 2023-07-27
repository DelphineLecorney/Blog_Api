<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts, 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for creating a new resource.
     */


     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'title' => 'required|string|max:255',
             'body' => 'required|string',
             'author' => 'required|string|max:255',
         ]);
         
         $post = Post::create($validatedData);
     
         return response()->json(['message' => 'The post was successfully created', 'data' => $post], 201);
     }
     
     

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return response()->json(['message' => 'The post was not found'], 404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
