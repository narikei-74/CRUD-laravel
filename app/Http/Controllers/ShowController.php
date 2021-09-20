<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ShowController extends Controller
{
    public function view(Post $post) {
        return view('show')->with(['post' => $post]);
    }
}
