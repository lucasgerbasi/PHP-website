<!DOCTYPE html>
<html>

<head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>To-Do List</h1>

    <form action="add.php" method="post" class="container">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>

    <h2>Tasks:</h2>
    <form action="index.php" method="post">
    <ul>
        <?php
        $tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES);
        foreach ($tasks as $task) {
            echo "<li>
                <input type=\"checkbox\" name=\"completed[]\" value=\"" . htmlspecialchars($task) . "\">
                $task
                <a href=\"delete.php?task=" . urlencode($task) . "\">X</a>
            </li>";
        }
        ?>
    </ul>
</form>
</body>

</html>