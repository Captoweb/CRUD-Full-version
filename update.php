<?php

require 'database/QueryBilder.php'; // подключение класса QueryBilder

$db = new QueryBilder; // экземпляр класса

$data = [
    "id" => $_GET['id'],
    "title" => $_POST['title'],
    "content" => $_POST['content']
];
    

$db->update("tasks", $data);

header("Location: /"); exit;  