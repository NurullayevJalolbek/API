<?php

require_once "vendor/autoload.php";


use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

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

    require 'view/vieww.php';
}
require 'view/home.php';
