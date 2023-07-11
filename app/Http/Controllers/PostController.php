<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function deletePost(Post $post) {

            $post->delete();

        return redirect('/');
    }

    public function updatePost(Post $post, Request $request) {


        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'color' => 'required'

        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['color'] = strip_tags($incomingFields['color']);


        $post->update($incomingFields);

        return redirect('/');
    }


    public function showEditScreen(Post $post) {

        return view('edit-post', ['post'=> $post]);
    }

    public function createPost(Request $request) {

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'color' => 'required',
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['color'] = strip_tags($incomingFields['color']);

        Post::create($incomingFields);

        return redirect('/');
    }


    public function savePost(Request $request) {




        return redirect('/');
    }
}
