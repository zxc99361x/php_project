@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <a href="{{route ('posts.index')}}">返回</a>
@endsection