<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    $name = request('name');
    $surname = 'domoestianu';
    return view('test', ['name' => $name, 'surname' => $surname]);
});
/*
Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'This is my first post!',
        'my-second-post' => 'This is my second post!'
    ];


    if (!array_key_exists($post, $posts)) {
        abort(404, "Error, that post doesn't exist");
    }

    return view('post', ['post' => $posts[$post] ?? 'Nothing', 'title' => $post] ?? '');
});
*/
// using controller for post

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/article', 'ArticlesController@index');
//Route::get('/articles/create', 'ArticlesController@create');

//Route::get('/articles/{article}', 'ArticlesController@show');





// GET articles
// GET /articles/:id 
// GET, POST, PUT, DELETE - http verbs

// PUT /articles/:id 
// DELETE /articles/:id 
// POST /articles
