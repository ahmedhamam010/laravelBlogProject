<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostBlogRequest;
class PostController extends Controller
{
    public function index(){
        return StoreBlogPost::collection(Post::all());
    }
    public function show($id){
        
        return new StoreBlogPost(Post::find($id));
    }
    public function store(PostBlogRequest $request){
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = $request->user()->id;
        $post->save();
    }
}
