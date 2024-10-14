<!DOCTYPE html>
<html>
<head>
    <title>Breaking News</title>
</head>
<body>
    <h1>Breaking News</h1>
    <a href="/news/create">Tambah Berita</a>

    <?php if (!empty($news) && is_array($news)): ?>
        <?php foreach ($news as $item): ?>
            <h2><?= esc($item['title']); ?></h2>
            <p><?= esc($item['content']); ?></p>
            <p><small><?= esc($item['created_at']); ?></small></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Tidak ada berita.</p>
    <?php endif; ?>
</body>
</html>
