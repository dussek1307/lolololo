<?php

if(isset($_POST['login-submit'])) {
    require "./dbh.php";

    $username_id = $_POST['username_id'];
    $password = $_POST['password'];
    $uri = explode('?', $_SERVER['HTTP_REFERER']);
    date_default_timezone_set('Asia/Seoul');
    $date = date('Y-m-d H:i:s');
    
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if(empty($username_id) || empty($password)) {
        header('Location: '.$uri[0]."?error=loginemptyfield");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE uid = '$username_id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) < 1) {
            header('Location: '.$uri[0]."?error=nouser");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)) {
                if(password_verify($password, $row['upwd'])) {
                    session_start();
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['uid'] = $row['uid'];
                    $_SESSION['online_name'] = $row['user_online_name'];
                    $_SESSION['profile_img'] = $row['profile_img'];

                    $ip_sql = "UPDATE users SET login_ip = '$ip', latest_login = '$date' WHERE uid = '$username_id';";
                    mysqli_query($conn, $ip_sql);
                    header('Location: '.$uri[0]);
                    exit();
                } else {
                    header('Location: '.$uri[0]."?error=wrongpwd");
                    exit();
                }
            } else {
                header('Location: '.$uri[0]."?error=loginsqlerror");
                exit();
            }
        }
    }
} 
else {
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
}