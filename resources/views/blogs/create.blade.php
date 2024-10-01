<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Blog Əlavə Et</title>
</head>
<body>
    <h1>Yeni Blog Əlavə Et</h1>

  
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Başlıq:</label>
    <input type="text" name="title" required>

    <label for="content">Məzmun:</label>
    <textarea name="content" required></textarea>

    <label for="image">Şəkil:</label>
    <input type="file" name="image" required>

    <button type="submit">Əlavə Et</button>
</form>

</body>
</html>
