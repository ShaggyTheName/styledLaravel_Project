<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function showAll() {

        $posts = Post::all();
    
        return view('home', ['posts' => $posts]); 
    }

    public function show() {

        $posts = Post::all();
    
        return view('formular', ['posts' => $posts]); 
    } 
    
    public function create(Request $request) {

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category = $request->category;
        $post->author = $request->author;
        $post->pearllinks = $request->pearllinks;

        $post->save();
    
        return redirect('/home');
    } 
       
    public function delete($id) {
    
        $result = Post::findOrFail($id)->delete(); 
    
        return redirect('/home');         
    }  
    
    public function view($id) {
    
        $post = Post::findOrFail($id); 
    
        return view('postDetail', ['post' => $post]); 
    }
}
