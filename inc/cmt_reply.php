<?php
session_start();
if(isset($_SESSION['user_id'])) {
    if(isset($_POST['reply_clicked'])) {
        require "./dbh.php";
        date_default_timezone_set('Asia/Seoul'); 
        $uri = explode('?', $_SERVER['HTTP_REFERER']);
        $cid = $_POST['cid'];
        $uid = $_SESSION['uid'];
        $author = $_SESSION['online_name'];
        $post_id = $_POST['post_id'];
        $content = $_POST['reply_content'];
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO cmt_reply (cid, post_id, uid, message, date, author)
        VALUES ('$cid', '$post_id','$uid','$content', '$date', '$author');";
        mysqli_query($conn, $sql);
        header("location: ".$uri[0]);
    }
}
