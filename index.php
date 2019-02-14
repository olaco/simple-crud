<?php
include "db.php";


$result= mysqli_query($conn, "SELECT * FROM info");





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
</head>
<body>

<form action="process.php" method="POST">
<label for="">Task</label><br>
<input type="text" name="task" placeholder="Enter Task"><br>
<label for="">Status</label><br>
<input type="text" name="status" placeholder="Status"><br>

<br><input type="submit" value="Add">

</form>
    
    <hr>

    <table>
    <tr>
    <th>Task</th>
    <th>Status</th>
    </tr>

    <?php
    while($row= mysqli_fetch_array($result)){

        echo "<tr>";
        echo "<td>" . $row['task'] ."</td>";
        echo "<td>" . $row['status'] ."</td>";

        echo "<td><a href='edit.php?id=$row[id]'>Edit</a>" ."</td>";
        echo "<td><a href='delete.php?id=$row[id]'>Delete</a>" ."</td>";

    }

    
    
    ?>
    
    
    </table>
</body>
</html>