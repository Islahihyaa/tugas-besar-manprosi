<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "peminjamanlab";

$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name);


if(!$connection) {
    die("ERROR : " .mysqli_connect_error());
}
?>