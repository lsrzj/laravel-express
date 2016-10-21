<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogAdminController extends Controller
{
    /**
     *
     * @var Post 
     */
    private $post;

    public function __construct(Post $post) {
        $this->post = $post;
    }
    public function index() {
        $posts = $this->post->all();
        return view('admin.posts.index', compact('posts'));
    }
}
