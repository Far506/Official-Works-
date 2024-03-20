<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Project</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin: 20px auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Basic PHP Project</h1>
    <form action="add_task.php" method="post">
        <label for="task">Add Task:</label>
        <input type="text" id="task" name="task" required>
        <button type="submit">Add</button>
    </form>
    <h2>Tasks:</h2>
    <?php include 'view_tasks.php'; ?>
</body>
</html>