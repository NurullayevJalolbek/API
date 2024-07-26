<?php
$path  = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = explode('/', $path);
if (array_search('add', $path) == true) {
    $task->add($update->text, $update->userId);
}
if (array_search('all', $path) == true) {
    echo "<pre>";
    print_r($task->getAll());
    echo "</pre>";
}
if (array_search('delete', $path)) {
    $task->delete($update->task_id);
}
if (array_search('complete', $path)) {
    $task->complete($update->task_id);
} elseif (array_search('uncompleted', $path)) {
    $task->uncompleted($update->task_id);
}
