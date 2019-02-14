<?php
include "db.php";



if($_POST){
    $task= mysqli_real_escape_string($conn, $_POST['task']);
    $status= mysqli_real_escape_string($conn, $_POST['status']);



    $result= mysqli_query($conn, "INSERT INTO info(task, status) VALUES('$task', '$status')");



}


?>