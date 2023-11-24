<?php

require 'connect.php';

session_start();

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$jenisuser = "Mahasiswa";
$nama = $_POST['nama'];
$dob = $_POST['dob'];

$cekemail = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($connection,$cekemail);


if (mysqli_num_rows($result) == 0) {
    $insertdata = "INSERT INTO user (email, password, jenisuser, nama, dob) VALUES ('$email', '$password', '$jenisuser', '$nama',  '$dob' )";
    $insert = mysqli_query($connection, $insertdata);

    if($insert) {
        $_SESSION['message'] = 'Pendaftaran success';
        $_SESSION['color'] = 'success';
        header('Location: ../views/login.php');
        
    } else {
        $_SESSION['message'] = "Pendaftaran gagal";
    }
    
} else {
    $_SESSION['message'] = 'Email sudah terdaftar';
    header('Location: ../views/register.php');
}

?>