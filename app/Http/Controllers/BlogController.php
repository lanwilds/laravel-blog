<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    	return view('index');
    }
    public function posts()
    {
    	return view('posts');
    }
    public function post($id)
    {
    	return view('post',[
    		'postId' => $id
    	]);
    }
    public function about()
    {
        return view('about');
    }
}
