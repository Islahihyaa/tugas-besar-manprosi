<?php
session_start();

require '../config/connect.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
  }
      $id = $_SESSION['user_id'];
  
      $query = "SELECT * FROM user WHERE user_id = '$id'";
      $result = mysqli_query($connection, $query);
  
  if(mysqli_num_rows($result) ==  1 ) {
      $data = mysqli_fetch_assoc($result);   
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light border-bottom ">
        <div class="container-fluid">
            <img src="../img/Group1838.png" />
            <hr class="my-0 mx-2" style="height: 60px; border: 1px solid #696F79; width: 2px"/>      
            <img src="../img/image 3.png"/>     

            <div class="collapse navbar-collapse m-3" id="navbarSupportedContent">
                <a class="nav-link ms-auto" href="#">
                    <?= $data["nama"] ?>
                </a>
            </div>          
        </div>
    </nav>

</body>
</html>