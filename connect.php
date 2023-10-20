<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "finishline";
$conn = mysqli_connect($server , $user , $pass , $database);
mysqli_query($conn , 'set names "UTF8mb4"');
?>