@extends('layouts.app')
@section('content')
    <h1>文章列表</h1>
    <a href="{{route ('posts.create')}}">新增文章</a>

    @foreach($posts as $post)
    <div>
        <h2>{{$post -> title}}</h2>
        <p>{{$post -> content}}</p>
        <a href="{{route ('posts.show',$post->id)}}">查看</a>
        <a href="{{route ('posts.edit',$post->id)}}">編輯</a>
        <form action="{{route('posts.destroy',$post->id)}}"method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">刪除</button>
        </form>
    </div>
    @endforeach
@endsection