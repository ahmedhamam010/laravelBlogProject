<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\StoreBlogPost;
class PostController extends Controller
{
    public function index(){
        return StoreBlogPost::collection(Post::all());
    }
}
