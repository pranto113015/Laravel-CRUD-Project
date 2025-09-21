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

            $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
          ]);

            $post = new Post;

            $post->name = $request->name;
            $post->description = $request->description;
            $post->image = time(). '.' . $request->image->extension();
            $post->save();

            //redirect
            return redirect()->route('home')->with('success', 'Post created successfully.');
        }
}

