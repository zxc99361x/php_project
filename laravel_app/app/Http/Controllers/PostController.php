<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index() 
    {
        $posts=[
            ['title' => 'Laravel 範例1','content'=>'這是第一篇文章內容'],
            ['title' => 'Laravel 範例2','content'=>'這是第二篇文章內容']
        ];
        return view('posts.index',compact('posts'));
    }
    public function showPosts()
    {
        // 從資料庫取得所有文章
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|max:255',
            'content'=>'required'
        ]);
        post::create($data);
        return redirect('/posts');

    }


}
