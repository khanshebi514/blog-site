<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //index
    public function index(){
        $posts = Posts::all();
        return view("posts.index", compact("posts"));
    }

    public function currentPost($id){

        $post = Posts::find( $id );
        return view("posts.show", compact("post"));
    }

    public function editForm($id){
        $post = Posts::find( $id );
        return view("posts.edit-post" , compact("post"));
    }
    public function updatePost($id){
        $post = request()->validate([
            "title"=> ['required', 'string'],
            'body'=> ['required', 'string'],
        ]);

        $post = Posts::find( $id );

        $post->title = request('title');
        $post->post = request('post');

        $post = Posts::update([
            'title'=> request('title'),
            'post'=> request('post'),
        ]);

        redirect('/posts/'. $id);   
    }
    public function createPostForm(){
        return view('posts.create-form');

    }
    
    public function create(){
        $postAtt = request()->validate([
            "title"=> ["required","string","min:5"],
            'post'=>['required','string','min:10'],
        ]);

        Posts::create([
            'title'=> $postAtt['title'],
            'post'=> $postAtt['post'],
        ]);

        return redirect('/posts');
    }

    //destroy
    public function deletePost($id){
        $post = Posts::find( $id );
        $post->delete();
    }
}
