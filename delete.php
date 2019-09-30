<?php

require 'database/QueryBilder.php'; // подключение класса QueryBilder

$db = new QueryBilder; // экземпляр класса


$id = $_GET['id']; 

$db->delete("tasks", $id);

 header("Location: /");