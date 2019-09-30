<?php


require 'database/QueryBilder.php'; // подключение класса QueryBilder

$db = new QueryBilder; // экземпляр класса

//$tasks = $db->getAllTasks(); // массив выводит

$tasks = $db->all("tasks");


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Tasks</h1>
                <h3>Full version + QueryBilder(OOP) </h3>
                <a href="create.php" class="btn btn-success">Add Task</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($tasks as $task): ?>
                        <tr>
                            <td><?=$task['id'];?></td> 
                            <td><?= $task['title'];?></td>
                            <td>
                                <a href="show.php?id=<?= $task['id'];?>" class="btn btn-info">
                                Show
                                </a>
                                
                                <a href="edit.php?id=<?= $task['id'];?>" class="btn btn-warning">
                                Edit
                                </a>
                                
                                <a onclick="return confirm('v nature?')" href="delete.php?id=<?= $task['id'];?>" class="btn btn-danger">
                                Del
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>




