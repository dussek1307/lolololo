<?php
if(isset($_POST['edit-click'])) {
    require "./dbh.php";
    $uri = explode('?', $_SERVER['HTTP_REFERER']);
    $rid = $_POST['rid'];
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $message = nl2br(str_replace("'", "\'", $message));

    $sql = "UPDATE review SET message = '$message', date = '$date' WHERE rid = '$rid'";
    $result = mysqli_query($conn, $sql);
    header("Location: ".$uri[0]);
} else {
    echo "Unexpected entry";
}
