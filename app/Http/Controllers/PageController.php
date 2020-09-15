<?php
// Developed by Cristian Franco Bedoya & Santiago Ramón Álvarez
namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts() {
        return view('posts', [
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }
    
    public function post(Post $post) {
        return view('post', ['post' => $post]);
    }
    
    public function comment(Comment $comment) {
        return view('comment', ['comment' => $comment]);
    }
}
