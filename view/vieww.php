<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text'])) {
        $task->add($_POST['text']);
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
