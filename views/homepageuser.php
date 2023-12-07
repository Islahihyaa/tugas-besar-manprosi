<?php
session_start();

require '../config/auth/connect.php';

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
    <title>Homepage</title>

    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/homepageuser.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <img src="../img/Group1838.png" />
            <hr class="my-0 mx-2" style="height: 60px; border: 1px solid #696F79; width: 2px"/>      
            <img src="../img/image 3.png"/>     

            <div class="collapse navbar-collapse m-3" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <?= $data["nama"] ?>
                    </a>
                </li>
                <li class="nav-item">
                <button class="hamburger-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="../img/notification.png" alt="notif">
                    </a>
                </li>
            </ul>

            </div>    
        </div>
    </nav>
    <div class="content">
        <div class="banner-container"> 
            <h1>
                Hello <?= $data["nama"] ?>!
            </h1>
            <h3> easy laboratory booking 
                <br>
                    in just 1 <span class="click">click</span>
    
            </h3>
            
        </div>
        <div class="button">
            <a type="submit" class="border-container outer-border text-decoration-none" href="selectroom.php"> <span class="text">Booking</span> </a>
        </div>


        
    </div>

</body>
</html>