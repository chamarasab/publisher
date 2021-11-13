<?php
    $connection=mysqli_connect('localhost','root','','homework03');
    $query="SELECT * FROM publisher";
    $result=mysqli_query($connection,$query);

    if (isset($_POST['btnSearch'])) {
        $search = $_POST['txtSearch'];
        $u_query = "SELECT * FROM publisher WHERE emp_name LIKE '".$search."%'";
        $result=mysqli_query($connection,$u_query);
        if ($result) {
            echo "<div class='alert alert-success fixed-bottom alert-dismissible ms-5 me-5' data-dismiss='alert'>Publisher Found</div>";
        }else {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>No Publisher Found</div>";
        }
        $_POST=array();
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;1,100&family=Raleway:wght@400&display=swap');
                *{font-family: 'Raleway', sans-serif;} 
            </style>
        
        <title>Publishers</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://img.icons8.com/fluency/48/000000/microsoft-people.png" alt="" width="24" height="24" class="d-inline-block align-text-top me-2">
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
                    <form class="d-flex" method="POST">
                        <input class="form-control me-2" type="search" name="txtSearch" placeholder="Search" aria-label="Search">
                        <input class="btn btn-outline-success" type="submit" value="Search" name="btnSearch"/>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container mt-4">
        <h2>Publisher Details</h2>
        <div class="card mt-3 mb-2">
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">City</th>
                            <th scope="col">Country</th>
                            <th scope="col">Branch</th>
                            <th scope="col">Date</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($record=mysqli_fetch_assoc($result)) {?>
                        
                        <tr>
                            <td> <?php echo $record['p_id']?> </td>
                            <td> <?php echo $record['emp_name']?> </td>
                            <td> <?php echo $record['emp_gender']?> </td>
                            <td> <?php echo $record['p_city']?> </td>
                            <td> <?php echo $record['country']?> </td>
                            <td> <?php echo $record['branch']?> </td>
                            <td> <?php echo $record['sdate']?> </td>
                            <td style="text-align:right"> 
                                <a href="delete.php?p_id=<?php echo $record['p_id']?>" class="btn btn-danger">Delete</a>
                                <a href="update.php?p_id=<?php echo $record['p_id']?>" class="btn btn-warning">Update</a>
                                <!--<input type="button" name="Delete" class="btn btn-danger" value="Delete"/>
                                <button type="button" class="btn btn-warning">Update</button> -->
                            </td>
                        </tr>

                        <?php }?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </body>
</html>
