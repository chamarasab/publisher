<?php
    ob_start();
    $connection=mysqli_connect('localhost','root','','homework03');

    $id=$_GET['p_id'];

    $select_query="SELECT * FROM publisher WHERE p_id='".$id."'";
    $select_result=mysqli_query($connection,$select_query);

    if (isset($_POST['Submit'])) {

        $id = $_POST['txtId'];
        $name = $_POST['txtName'];
        $gender = $_POST['txtGender'];
        $city = $_POST['txtCity'];
        $country = $_POST['txtCountry'];
        $branch = $_POST['txtBranch'];
        $sdate = $_POST['txtSdate'];
   
        $update_query="UPDATE publisher SET emp_name='".$name."',emp_gender='".$gender."',p_city='".$city."',country='".$country."',branch='".$branch."',sdate='".$sdate."' WHERE p_id='".$id."'";
       // $insert_query = "INSERT INTO students (name,address,contact,course,password) VALUES ('".$name."','".$address."','".$contact."','".$course."','".$password."')";
        
        $updateresult = mysqli_query($connection,$update_query);

        if($updateresult){
            echo "<div class='alert alert-success'> New student created successfully </div>";
            //header("location: retrieve.php");
            header("Location: /publisher/index.php", true, 301);
        }
        else{
            echo "<div class='alert alert-danger'> Oops! Something went wrong. </div>";
        }
    }
    ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;1,100&family=Raleway:wght@400&display=swap');
                *{font-family: 'Raleway', sans-serif;}
            </style>
        <title>Update Publisher</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://img.icons8.com/external-inipagistudio-mixed-inipagistudio/64/000000/external-shopping-cart-grocery-shop-inipagistudio-mixed-inipagistudio.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    Homework 03 - DBMS
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-primary" aria-current="page" href="insert.php">Insert</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-primary" aria-current="page" href="index.php">Retrieve</a>
                        </li> 
                    </ul>
                    
                </div>
            </div>
        </nav>
        <div class="container ">
            <div class="row mt-3 text-center">
                <h1>Senan Book Shop</h1>
                <h3>Senan Estate, Mulberry Street.</h3>
            </div>
            <div class="row m-5 ">
                <h4 class="text-center">Update publisher</h4>
                
                <div class="card mt-2" style="width: 35rem; margin: 0 auto;">
                    <div class="card-body">
                        <form method="POST">
                        <?php while ($record=mysqli_fetch_assoc($select_result)) {?>
                            <div class="mb-3">
                                <label for="exampleInputId" class="form-label">Employee ID</label>
                                <input type="number" class="form-control" value="<?php echo $record['p_id']?>" name="txtId" id="txtId" aria-describedby="idHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Employee Name</label>
                                <input type="text" class="form-control" value="<?php echo $record['emp_name']?>" name="txtName" id="txtName" aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAddress" class="form-label">Employee Gender</label>
                                <input type="text" class="form-control" value="<?php echo $record['emp_gender']?>" name="txtGender" id="txtGender" aria-describedby="addressHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAddress" class="form-label">Publisher City</label>
                                <input type="text" class="form-control" value="<?php echo $record['p_city']?>" name="txtCity" id="txtCity" aria-describedby="addressHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAddress" class="form-label">Country</label>
                                <input type="text" class="form-control" value="<?php echo $record['country']?>" name="txtCountry" id="txtCountry" aria-describedby="addressHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAddress" class="form-label">Branch</label>
                                <input type="text" class="form-control" value="<?php echo $record['branch']?>" name="txtBranch" id="txtBranch" aria-describedby="addressHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAddress" class="form-label">Sdate</label>
                                <input type="text" class="form-control" value="<?php echo $record['sdate']?>" name="txtSdate" id="txtSdate" aria-describedby="addressHelp">
                            </div>

                            <?php }?>
                            <!--<div class="mb-3">
                                <label for="exampleInputTel" class="form-label">Telephone</label>
                                <input type="tel" class="form-control" name="txtTel" id="txtTel" aria-describedby="telHelp">
                                <div id="telHelp" class="form-text">We'll never share your details with anyone else.</div>
                            </div>-->
                            <div class="col text-center">
                                <input type="submit" name="Submit" class="form-control btn btn-primary btn-block" value="Update"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>