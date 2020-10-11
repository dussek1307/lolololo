<?php
session_start();
if(isset($_SESSION['user_id'])) {
    if(isset($_POST['favorite'])) {
        require "./dbh.php";
        
        $post_id = $_POST['favorite'];
        $user_id = $_SESSION['user_id'];
        $like_status = "";
        $result = mysqli_query($conn, "SELECT * FROM post_likes WHERE user_id = $user_id && post_id = $post_id;");
        while($row = mysqli_fetch_assoc($result)) {
            $like_status = $row['is_like'];
        }
        if(mysqli_num_rows($result) > 0) {
            
            if($like_status == 1) {
                mysqli_query($conn, "UPDATE post_likes SET is_like = 0 WHERE user_id = $user_id && post_id = $post_id;");
            } else {
                mysqli_query($conn, "UPDATE post_likes SET is_like = 1 WHERE user_id = $user_id && post_id = $post_id;");
            }
        } else {
            mysqli_query($conn, "INSERT INTO post_likes (user_id, post_id, is_like) VALUES ('$user_id', '$post_id', '1');");
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']."?error=noClick");
}
