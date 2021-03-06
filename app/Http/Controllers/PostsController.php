<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostBlogRequest;

use App\Post;
class PostsController extends Controller
{
    function index () {
        
        return view('posts.index' , ['posts' => Post::all() ]);
    }

    function store ( PostBlogRequest $request ) {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id  = request()->user()->id;
        $post->save();
        return redirect('posts');
    }

    function show($id){
    
        return view( 'posts/show' , ['posts' => Post::find($id) ] );
    }

    function edit ($postId) {

          
        return view( 'posts.edit' , ['postId' => $postId  , 'idDetails' =>  Post::find($postId) ] );
    }

    function update(PostBlogRequest $request,$id){

        $post = Post::find($id);
        $post->title = request()->title;
        $post->content = request()->content;
        $post->save();
        return redirect('posts');
    }

    function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('posts');
    }
}
