<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
           $posts = Post::with('user', 'category')->orderBy('id', 'desc')->limit(10)->paginate(12);
           return view('welcome', compact('posts'));
    }
}
