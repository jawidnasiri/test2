<?php

use App\tasks;
use App\projects;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
      //$name = 'JJ';
      $tasks = DB::table('tasks')->get();
      //return view('new') ->with('name', 'HAHA');
      //return view('new', ['name'=> 'JAWID']);
      return view('new', compact('tasks'));
});

Route::get('/new/n', function () {
    $tasks = tasks::g();
    return view('new', compact('tasks'));
});


Route::get('/lay', function () {
    return view('layout');
});

Route::get('/post', function () {
    return view('post.posts');
});

Route::get('/haha {id}', function ($id) {

    /*$project = App\projects::get($id);
    return view('projects', 'projects');*/
    $title = DB::table('projects')->pluck('description')->where('id', $id);
    return view('projects', $title);
});
