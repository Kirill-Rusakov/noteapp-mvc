<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новая заметка</title>
</head>
<body>
<h1>Добавить заметку</h1>
<form method="post" action="/notes/create">
    <input type="text" name="title" placeholder="Заголовок" required><br>
    <textarea name="content" placeholder="Текст заметки" required></textarea><br>
    <button type="submit">Сохранить</button>
</form>
</body>
</html>
