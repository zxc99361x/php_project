<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index() 
    {
        $posts=Post::all();
        return view('posts.index',['posts'=>Post::all()]);
    }
    public function create()
    {
        return view('posts.create',['user'=>auth()->user() ?? null]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);
        Post::create([
            'title' => $request->title,
            'content' => $request->content, // ✅ 確保 content 被正確儲存
        ]);
        return redirect()->route('posts.index')->with('success','文章已新增');

    }
    public function show(Post $post){
        return view('posts.show',compact('post'));
    }
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }
    public function update(Request $request,Post $post)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success','文章已更新');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success','文章已刪除');
    }
}
