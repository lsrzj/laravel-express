<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\Post;
use App\Tag;

class BlogController extends Controller {

    public function index() {
        $posts = Post::all();
        $tags = Tag::all();
        return view('blog.index', compact('posts', 'tags'));
    }

}
