<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
class BlogPostController extends Controller
{
    public function index(){
        $posts = BlogPost::all();
        return $posts;
    }
    public function create(){
        
    }
    public function store(Request $request){

    }
    public function show(BlogPost $blogPost){
        return $blogPost;
    }
    public function edit(BlogPost $blogPost){

    }
    public function update(Request $request, BlogPost $blogPost){

    }
    public function remove(BlogPost $blogPost){

    }
    public function showId(BlogPost $blogPost){
        return $blogPost->id;
    }
}
