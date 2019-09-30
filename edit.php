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
                <h1>Edit Tasks</h1>
                <form action="update.php?id=<?= $task['id'];?>" method="post">
                   
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" value="<?= $task['title'];?>">
                    </div>
                    
                    <div class="form-group">
                        <textarea name="content" class="form-control"><?= $task['content'];?></textarea> 
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-warning" type="submit">Submit</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>



