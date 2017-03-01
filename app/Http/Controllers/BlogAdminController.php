<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use App\Tag;

class BlogAdminController extends Controller {

    /**
     *
     * @var Post 
     */
    private $post;
    
    private function getTagsIds($tags) {
        //filter to eliminate empty element in the array, trim to eliminate blanks in the tags
        $tagList = array_filter(array_map('trim', explode(',', $tags)));
        //firstOrCreate returns the first record found or, if it doesn't exists, creates a new record
        foreach ($tagList as $tagName) {
            $tagsIDs[] = Tag::firstOrCreate(['name' => $tagName])->id;
        }
        return $tagsIDs;
    }

    public function __construct(Post $post) {
        $this->post = $post;
    }
    
    public function index() {
        $posts = $this->post->paginate(20);
        return view('admin.posts.index', compact('posts'));
    }

    public function create() {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request) {
        $post = $this->post->create($request->all());
        //binds tags to the new post
        $post->tags()->sync($this->getTagsIds($request->tags));

        return redirect()->route('admin.posts.index');
    }

    public function edit($id) {
        if ($this->post->find($id)) {
            $post = $this->post->find($id);
        }
        return view('admin.posts.edit', compact('post'));
    }

    public function update($id, PostRequest $request) {
        if ($this->post->find($id)) {
            $this->post->find($id)->update($request->all());
            $post = $this->post->find($id);
            //binds tags to the new post
            $post->tags()->sync($this->getTagsIds($request->tags));
        }
        return redirect()->route('admin.posts.index');
    }

    public function destroy($id) {
        if ($this->post->find($id)) {
            $this->post->find($id)->delete();
            return json_encode([
                'success' => TRUE
            ]);
        } else {
            return json_encode([
                'success' => FALSE
            ]);
        }
    }

}
