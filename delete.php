<?php
    ob_start();
    $connection=mysqli_connect('localhost','root','','homework03');

    $id = $_GET['p_id'];

    $delete_query = "DELETE FROM publisher WHERE p_id='".$id."'";
    
    $result = mysqli_query($connection,$delete_query);

    if($result){
        echo "<div class='alert alert-success'> Record deleted successfully </div>";
        header("location: index.php");
    }
    else{
        echo "<div class='alert alert-danger'> Oops! Something went wrong. </div>";
    }
    ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Delete</title>
</head>
<body>
    
</body>
</html>