<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST['task'];

    // Append task to tasks.txt file
    file_put_contents('tasks.txt', $task . PHP_EOL, FILE_APPEND);

    // Redirect back to index.php
    header("Location: index.php");
    exit;
}
?>