<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\Post;

class BlogController extends Controller {

    public function index() {
        $posts = Post::All();
        return view('blog.index', compact('posts'));
    }

}
