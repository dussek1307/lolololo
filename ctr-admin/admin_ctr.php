<?php
require "../inc/dbh.php";
if(isset($_POST['delete'])) {
    $user_id = $_POST['delete'];
    mysqli_query($conn, "DELETE FROM users WHERE user_id = '$user_id'");
    header("Location: ./admin.php");
    exit();
}


?>