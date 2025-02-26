<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>文章列表</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>{{$post['title']}}</h2>
                <p>{{$post['content']}}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>