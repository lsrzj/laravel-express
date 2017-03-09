<?php

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

/*<?php

namespace App\Http\Controllers;

use Doctrine\ORM\EntityManagerInterface;

class BlogController extends Controller {

    protected $em;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }

    public function index() {
        $posts = $this->em->getRepository('App\Entities\Post')->findAll();
        $tags = $this->em->getRepository('App\Entities\Tag')->findAll();
        return view('blog.index', compact('posts', 'tags'));
    }

}*/
