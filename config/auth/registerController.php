<?php

require 'connect.php';

session_start();

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$jenisuser = "Mahasiswa";
$nama = $_POST['nama'];
$dob = $_POST['dob'];
$nim = $_POST['nim'];

$cekemail = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($connection,$cekemail);


if (mysqli_num_rows($result) == 0) {
    $insertdata = "INSERT INTO user (email, password, jenisuser, nama, dob, nim) VALUES ('$email', '$password', '$jenisuser', '$nama',  '$dob' , '$nim')";
    $insert = mysqli_query($connection, $insertdata);

    if($insert) {
        $_SESSION['message'] = 'Pendaftaran success';
        $_SESSION['color'] = 'success';
        header('Location: /../TUBES_WAD/views/login.php');
        
    } else {
        $_SESSION['message'] = "Pendaftaran gagal";
        header('Location: /../TUBES_WAD/views/registrasi.php');
    }
    
} else {
    $_SESSION['message'] = 'Email sudah terdaftar';
    header('Location: /../TUBES_WAD/views/registrasi.php');
}

?>