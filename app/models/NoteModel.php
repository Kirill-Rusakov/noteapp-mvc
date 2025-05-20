<?php
class NoteModel extends Database {
    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM notes ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }

    public function create($title, $content) {
        $stmt = $this->pdo->prepare("INSERT INTO notes (title, content, created_at) VALUES (?, ?, NOW())");
        return $stmt->execute([$title, $content]);
    }
}
