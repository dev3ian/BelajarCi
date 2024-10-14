<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita</title>
</head>
<body>
    <h1>Tambah Berita Baru</h1>
    <form action="/news/store" method="post">
        <label for="title">Judul:</label>
        <input type="text" id="title" name="title"><br><br>
        <label for="content">Konten:</label><br>
        <textarea id="content" name="content"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
