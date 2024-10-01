<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Yenilə</title>
</head>
<body>
    <h1>Blog Yenilə</h1>

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Başlıq:</label>
        <input type="text" name="title" value="{{ $blog->title }}" required>

        <label for="content">Məzmun:</label>
        <textarea name="content" required>{{ $blog->content }}</textarea>

        <label for="image">Şəkil:</label>
        <input type="file" name="image">
        @if ($blog->image)
            <img src="{{ asset('storage/images/' . $blog->image) }}" width="100px">
        @endif

        <button type="submit">Yenilə</button>
    </form>
</body>
</html>
