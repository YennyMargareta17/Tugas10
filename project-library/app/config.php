<?php
spl_autoload_register(function ($class) {
    $file = __DIR__ . "/core/$class.php";
    if (file_exists($file)) {
        require_once $file;
    }
});

require_once __DIR__ . '/models/Book.php';
