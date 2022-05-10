<?php 

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = "user_db";

    $conn = mysqli_connect($server,$username,$password,$database);

    if(!$conn){
        die ("<scripts>alert('Connection Failed.')</scripts>");
    }

?>