<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    /*\App\Post::create([
        'title'=>'testtitle',
        'content'=>'testcontent',
        ]);*/

    /*$post=new \App\Post();
    $post->title= '測試資料3';
    $post->content= '測試資料中3';
    $post->save();*/

    /*$posts = \App\Post::all();
    dd($posts);*/

    /*$post = \App\Post::find(1);
    dd($post);*/

    /*$posts = \App\Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();
    dd($posts);*/

    /*$post = \App\Post::find(1);
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content',
    ]);*/

    /*$post = \App\Post::find(1);
    $post->title = 'saved title';
    $post->content = 'saved content';
    $post->save();*/

    /*$post = \App\Post::find(1);
    $post->delete();*/

    //\App\Post::destroy(3,5,7);
    
    /*$allPosts = \App\Post::all();
    dd($allPosts);
    $featuredPosts = \App\Post::where('is_feature', 1)->get();
    dd($featuredPosts);*/

    /*$fourthPost = \App\Post::find(4);
    dd($fourthPost);
    $lastPost = \App\Post::orderBy('id', 'DESC')->first();
    dd($lastPost);*/

    $post = \App\Post::find(4);
    foreach($post->comments as $comment) {
        echo $comment‐>content.'<br>';
    }
});
