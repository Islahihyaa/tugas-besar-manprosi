<?php

require 'connect.php';

function login($input) {

    global $connection;

        $email = $input['email'];
        $password = $input['password'];
    
    $cekemail = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($connection, $cekemail);

    if (mysqli_num_rows($result) == 1 ) {
        $data = mysqli_fetch_assoc($result);

        if (password_verify($password, $data['password'])) {
            $_SESSION["login"] = true;
            $_SESSION["user_id"] = $data['user_id'];
            $_SESSION["jenisuser"] = $data['jenisuser'];

            if(isset($input["remember"])) {
                setcookie("user_id", $data['user_id'], time() + 3600, "/");
            }

        } else {
            $_SESSION['message'] = "Password salah";
            $_SESSION['color'] = "danger";

        }

    } else {
        $_SESSION['message'] = "Username tidak ditemukan";
        $_SESSION['color'] = "danger";
    }
        
}

function rememberMe($cookie) {

    global $connection;

    $id = $cookie['user_id'];    

    $query = "SELECT * FROM user WHERE user_id = '$id'";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) == 1) {

        $rememberMe = mysqli_fetch_assoc($result);

        $_SESSION["login"] = true;

        $_SESSION["user_id"] = $rememberMe['user_id'];
    }

}


?>