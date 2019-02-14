<?php
$conn= mysqli_connect("localhost", "root", "", "todo");


if($conn){
    echo "Connected";
}else{
    echo mysqli_error();
}


?>