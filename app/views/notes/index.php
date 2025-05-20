<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Заметки</title>
</head>
<body>
<h1>Список заметок</h1>
<a href="/notes/create">Добавить новую</a>
<ul>
<?php foreach (\$data['notes'] as \$note): ?>
    <li><strong><?= htmlspecialchars(\$note['title']) ?></strong> — <?= htmlspecialchars(\$note['content']) ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>
