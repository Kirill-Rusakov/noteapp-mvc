# NoteApp MVC

Простое приложение заметок на PHP с использованием собственного MVC-фреймворка.

## Возможности
- Просмотр всех заметок
- Создание новой заметки
- Простая архитектура MVC

## Установка

1. Клонируйте репозиторий:
   ```bash
   git clone https://github.com/yourusername/noteapp-mvc.git
   ```

2. Настройте веб-сервер:
   - Установите корень сайта на `/public`
   - Убедитесь, что включён `mod_rewrite`
   - Пропишите `.htaccess` для роутинга

3. Импортируйте SQL:
   ```sql
   CREATE TABLE notes (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       content TEXT NOT NULL,
       created_at DATETIME DEFAULT CURRENT_TIMESTAMP
   );
   ```

4. Откройте в браузере: `http://localhost/noteapp-mvc/public/`

## Структура
- `app/core/` — ядро MVC
- `app/controllers/` — контроллеры
- `app/models/` — модели
- `app/views/` — представления
