<?php

require_once "vendor/autoload.php";
require "src/Task.php";

date_default_timezone_set('Asia/Tashkent');

$update = json_decode(file_get_contents('php://input'));
$task = new Task();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = explode("/", $uri);

if (array_search("api", $path)) {
    require "API.php";
    return;
}

if (isset($update->update_id)) {
    require 'bot/bot.php';
    exit;
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text'])) {
            $task->add2($_POST['text']);
        }
        if (isset($_GET['complete'])) {
            $task->complete($_GET['complete']);
        }
        if (isset($_GET['uncompleted'])) {
            $task->uncompleted($_GET['uncompleted']);
        }
        if (isset($_GET['delete'])) {
            $task->delete($_GET['delete']);
        }
    }
}

require 'view/home.php';
