<?php
require_once 'app/config.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Book';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerName = ucfirst($controller) . 'Controller';
require_once "app/controllers/$controllerName.php";

$controllerInstance = new $controllerName();
$controllerInstance->$action();
