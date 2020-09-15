<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show($post)
    {


        /*  $posts = [
            1 => 'This is my first post!',
            2 => 'This is my second post!',
            3 => 'This is my third post!',
        ]; */


        if (!array_key_exists($post, $posts)) {
            abort(404, "Error, that post doesn't exist");
        }

        return view('post', ['post' => $posts[$post] ?? 'Nothing', 'title' => $post] ?? '');
    }
}
