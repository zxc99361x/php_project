@extends('layouts.app')
@section('content')
    <h1>新增文章</h1>
    <form action="{{ route('posts.store') }}" method="POST" class="flex flex-col space-y-4 w-1/2 mx-auto">
    @csrf
    <input type="text" name="title" placeholder="標題" required 
        class="border border-gray-300 p-2 rounded w-full">
    
    <textarea name="content" placeholder="內容" required 
        class="border border-gray-300 p-2 rounded w-full h-32"></textarea>
    <button type="submit" 
    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
    提交
    </button>

    
</form>
@endsection