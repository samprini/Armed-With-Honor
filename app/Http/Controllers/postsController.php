<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class postsController extends Controller

{
public function index()
{
  
    $posts = Post::all();
}
}