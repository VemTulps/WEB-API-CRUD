<?php
    $host = 'localhost';
    $db_name = 'todo_db';
    $username = 'root';
    $password = '';
    $connection = mysqli_connect($host, $username, $password, $db_name);

    if(!$connection){
        die("connection failed: " . mysqli_connect_error());
    }
?>
