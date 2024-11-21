<?php
require_once 'app/core/Controller.php';

class BookController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Book();
    }

    public function index()
    {
        $books = $this->model->getAll();
        $this->view('book_list', ['books' => $books]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->add($_POST['title'], $_POST['author']);
            header('Location: index.php?controller=Book&action=index');
        } else {
            $this->view('book_add');
        }
    }
}
