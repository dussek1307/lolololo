<?php
session_start();
if(isset($_POST['cmtSubmit'])) {
    require "./dbh.php";
    date_default_timezone_set('Asia/Seoul'); 
    $uri = explode('?', $_SERVER['HTTP_REFERER']);  
    $uid = $_SESSION['uid'];
    $post_id = $_POST['post_id'];
    $date = date('Y-m-d H:i:s');
    $message = $_POST['message'];
    $online_name = $_SESSION['online_name'];
    $message = nl2br(str_replace("'", "\'", $message));
    $split = explode(" ", $_POST['score']);
    $sql = "INSERT INTO comment (uid, post_id, date, message, author)
    VALUES ('$uid', $post_id, '$date', '$message', '$online_name');";
    mysqli_query($conn, $sql);
    header("Location: ".$uri[0]);
    
} else {
    echo "Unexpected entry";
}


