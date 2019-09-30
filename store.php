<?php

require 'database/QueryBilder.php'; // подключение класса QueryBilder

$db = new QueryBilder; // экземпляр класса

$data = [
    "title" => $_POST['title'],
    "content" => $_POST['content'],
];

//$data = [
//    "name" => "hello",
//    "text" => "huilo",
//    "image" => "picture here",
//];

$db->store("tasks", $data);
//$db->store("posts", $data);

 header("Location: /"); exit;  

