<?php

namespace App\Http\Controllers;
use App\Models\Post;

class PagesController extends Controller{


    public function getIndex(){
        $all_posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages/index')->with('allposts', $all_posts);;
    }


    public function getContact(){
        return view('pages/contact');
    }

 
    public function getAbout(){
        return view('pages/about');
    }

}

?>