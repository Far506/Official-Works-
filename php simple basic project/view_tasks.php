<?php
// Read tasks from tasks.txt file
$tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES);

if (!empty($tasks)) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Task</th></tr>";
    foreach ($tasks as $index => $task) {
        echo "<tr><td>" . ($index + 1) . "</td><td>$task</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p>No tasks found.</p>";
}
?>