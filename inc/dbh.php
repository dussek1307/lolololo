<?php
    $host = "localhost";
    $userid = "root";
    $pwd = "";
    $database = "upccount";

    $conn = mysqli_connect($host, $userid, $pwd, $database);
    mysqli_query($conn, "SET NAMES utf8");



    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
?>