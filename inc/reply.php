<?php
session_start();
if(isset($_SESSION['user_id'])) {
    if(isset($_POST['reply_clicked'])) {
        date_default_timezone_set('Asia/Seoul'); 
        $uri = explode('?', $_SERVER['HTTP_REFERER']);
        require "./dbh.php";
        $rid = $_POST['rid'];
        $uid = $_SESSION['uid'];
        $post_id = $_POST['post_id'];
        $content = $_POST['reply_content'];
        $date = date('Y-m-d H:i:s');
    
        $sql = "INSERT INTO reply (rid, post_id, uid, message, date)
        VALUES ('$rid', '$post_id','$uid','$content', '$date');";
        mysqli_query($conn, $sql);
        header("location: ".$uri[0]);
    }
}
