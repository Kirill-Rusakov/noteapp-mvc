<?php
class Notes extends Controller {
    public function index() {
        $notes = $this->model('NoteModel')->getAll();
        $this->view('notes/index', ['notes' => $notes]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $content = $_POST['content'] ?? '';
            $this->model('NoteModel')->create($title, $content);
            header('Location: /');
        } else {
            $this->view('notes/create');
        }
    }
}
