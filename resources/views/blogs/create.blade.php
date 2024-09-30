<form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Başlıq:</label>
    <input type="text" name="title" required><br>

    <label for="content">Məzmun:</label>
    <textarea name="content" required></textarea><br>

    <label for="image">Şəkil yüklə:</label>
    <input type="file" name="image" required><br>

    <button type="submit">Blogu əlavə et</button>
</form>
