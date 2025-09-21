<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }


       //store data
        public function ourfilestore(Request $request){

            $post = new Post;

            $post->name = $request->name;
            $post->description = $request->description;
            $post->image = $request->image;
            $post->save();

            //redirect
            return redirect()->route('home')->with('success', 'Post created successfully.');
        }
}

