<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except' => []]);
    }

    public function index() {

        $allPosts = Post::where('isActiviated', 1)->get();
        return view('welcome')->with('allPosts', $allPosts);

    }
    
    public function postsList($id) {

        $boolean_usertype = auth()->user()->usertype;

        if($boolean_usertype == 1) {

            $postsList = Post::orderBy('updated_at', 'DESC')->get();

        }else if($boolean_usertype == 0) {

            $postsList = Post::where('user_id', $id)->get();

        }

        return view('post.listPost')->with('postsList', $postsList);

    }

}
