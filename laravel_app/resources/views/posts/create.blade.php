<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>新增文章</h1>
    <form action="/post" method="POST">
        @csrf  <!-- 跨站請求保護 -->
        <div>
            <label for="title">標題:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">內容:</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <button type="submit">送出</button>
    </form>
</body>
</html>
