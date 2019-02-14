<?php
include "db.php";



if($_POST){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $task = mysqli_real_escape_string($conn, $_POST['task']);
    $status= mysqli_real_escape_string($conn, $_POST['status']);



    if(empty($task) || empty($status)){
        if(empty($task)){
            echo "Fill task field";
        }
        if(empty($status)){
            echo "Fill status field";
        }
    }else{
        $result= mysqli_query($conn, "UPDATE info set task='$task', status= '$status'  WHERE id=$id");
        header("Location: index.php");
    }

}

?>


<?php 

$id= $_GET['id'];


$result = mysqli_query($conn, "SELECT * FROM info WHERE id=$id");

while($row = mysqli_fetch_array($result)){
    $task= $row['task'];
    $status= $row['status'];
}
?>



<html>
<body>
    <a href="index.php">Home</a>

    <form action="edit.php" method="POST">
    
    <table>
    <tr>
    <td>Task</td>
    <td><input type="text" name="task" value="<?php echo $task ?>"></td>
    
    </tr>

    <tr>
    <td>Status</td>
    <td><input type="text" name="status" value="<?php echo $status ?>"></td>
    </tr>
    
    
    <tr>
    <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
    <td><input type="submit" name="update" value="Update"></td>
    
    </tr>
    
    </table>
    
    
    </form>


</body>



</html>