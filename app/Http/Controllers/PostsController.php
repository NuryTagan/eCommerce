<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function peoples(){
        return People::find(2)->posts;
    }

    public function posts(){
        return Post::all();
    }
}
