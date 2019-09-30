<?php

require 'database/QueryBilder.php'; // подключение класса QueryBilder

$db = new QueryBilder; // экземпляр класса

$id = $_GET['id'];

//$task = $db->getTask($id);

$task = $db->getOne("tasks", $id);  

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
                <h1><?= $task['title'];?></h1>
              <p><?= $task['content'];?></p>
              <a href="/"><button type="button" class="btn btn-secondary">&lArr; Vzad</button></a>
            </div>
        </div>
    </div>
</body>
</html>



