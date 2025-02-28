@extends('layouts.app')

@section('content')
    <h1>編輯文章</h1>
    <form action="{{route ('posts.update',$post->id)}}"method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$post->title}}" required>
    <textarea name="content" required>{{$post->content}}</textarea>
    <button type="submit">更新</button>
    </form>
@endsection