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
        return response()->json([$posts, 200, 'message' => 'OK', 'data' => $posts], 200, [], JSON_PRETTY_PRINT);
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

        return response()->json(['status' => 201, 'message' => 'The post was successfully created', 'data' => $post], 201, [], JSON_PRETTY_PRINT);
    }

    /**
 * Display the specified resource.
 */
    public function show(string $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['status' => 404, 'message' => "The post wasn't found", 'data' => null], 404, [], JSON_PRETTY_PRINT);
        }

        return response()->json(['status' => 200, 'message' => 'The post was found', 'data' => $post], 200, [], JSON_PRETTY_PRINT);
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
    $post = Post::find($id);

    if (!$post) {
        return response()->json(['status' => 404, 'message' => 'Post not found', 'data' => null], 404, [], JSON_PRETTY_PRINT);
    }

    $updatedData = $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'author' => 'required|string|max:255',
    ]);

    $post->update($updatedData);

    return response()->json(['status' => 200, 'message' => 'The post was successfully updated', 'data' => $post], 200, [], JSON_PRETTY_PRINT);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        if(!$post) {
            return response()->json(['status' => 200, 'message' => 'The post was successfully deleted', 'data' => null], 200, [], JSON_PRETTY_PRINT);
        }

        $post->delete();

        return response()->json(['message' => 'The post was successfully deleted'], 200);

    }

    public function getPaginatedPosts()
    {
        $posts = Post::paginate(10);

        return response()->json($posts);
    }
}
