<?php


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strpos($path, '/add') !== false) {
    if (isset($update->text) && isset($update->userId)) {
        $task->add($update->text, $update->userId);
    }
}
if (strpos($path, '/all') !== false) {
    $task->getAll();
}
if (strpos($path, '/delete') !== false) {
    if (isset($update->task_id)) {
        $task->delete($update->task_id);
    }
}
if (strpos($path, '/complete') !== false) {
    if (isset($update->task_id)) {
        $task->complete($update->task_id);
    }
}
if (strpos($path, '/uncompleted') !== false) {
    if (isset($update->task_id)) {
        $task->uncompleted($update->task_id);
    }
}
