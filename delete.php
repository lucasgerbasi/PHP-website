<?php
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["task"])) {
    $taskToDelete = urldecode($_GET["task"]);
    $tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES);

    $tasks = array_diff($tasks, [$taskToDelete]);

    file_put_contents("tasks.txt", implode(PHP_EOL, $tasks));
}

header("Location: index.php");
?>
