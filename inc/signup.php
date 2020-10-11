<?php

if(isset($_POST['signup-submit'])) {
    require "./dbh.php";
    
    $name_reg = $_POST['name_reg'];
    $online_name_reg = $_POST['online_name_reg'];
    $email_reg = $_POST['email_reg'];
    $uid_reg = $_POST['uid_reg'];
    $pwd_reg = $_POST['pwd_reg'];
    $pwd_reg_rep = $_POST['pwd_reg_rep'];
    $tel_reg = $_POST['tel_reg'];
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

    if(empty($name_reg) || empty($online_name_reg) || empty($email_reg) || empty($uid_reg) || empty($pwd_reg) || empty($pwd_reg_rep) || empty($tel_reg)) {
        header('Location: ' . $uri[0]."?error=emptyfield&name=".$name_reg."&onlinename=".$online_name_reg
         ."&email=".$email_reg."&uid=".$uid_reg."&tel=".$tel_reg);
        exit();
    } elseif(!filter_var($email_reg, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uid_reg)) {
        header('Location: ' . $uri[0]."?error=invalidmailuid&name=".$name_reg."&onlinename=".$online_name_reg."&tel=".$tel_reg);
        exit();
    } elseif(!filter_var($email_reg, FILTER_VALIDATE_EMAIL)) {
        header('Location: ' . $uri[0]."?error=invalidmail&name=".$name_reg."&onlinename=".$online_name_reg
            ."&uid=".$uid_reg."&tel=".$tel_reg);
        exit();
    } elseif(!preg_match("/^[a-zA-Z0-9]*$/", $uid_reg)) {
        header('Location: ' . $uri[0]."?error=invaliduid&name=".$name_reg."&onlinename=".$online_name_reg
            ."&email=".$email_reg."&tel=".$tel_reg);
        exit();
    } elseif($pwd_reg !== $pwd_reg_rep) {
        header('Location: ' . $uri[0]."?error=pwdcheck&name=".$name_reg."&onlinename=".$online_name_reg
        ."&email=".$email_reg."&uid=".$uid_reg."&tel=".$tel_reg);
         exit();
    } elseif(!is_numeric($tel_reg)) {
        header('Location: ' . $uri[0]."?error=invalidtel&name=".$name_reg."&onlinename=".$online_name_reg
        ."&email=".$email_reg."&uid=".$uid_reg);
         exit();
    } else if(strlen($uid_reg) < 4) {
        header('Location: ' . $uri[0]."?error=shortid");
         exit();
    } else if(strlen($pwd_reg) < 4) {
        header('Location: ' . $uri[0]."?error=shortpwd");
        exit();
    } else {
        $sql = "SELECT uid FROM users WHERE uid = ?";
        $sqlEmail = "SELECT email FROM users WHERE email = ?";
        $sqlTel = "SELECT tel FROM users WHERE tel = ?";
        $sqlOnline_name = "SELECT user_online_name FROM users WHERE user_online_name = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ' . $uri[0]."?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $uid_reg);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0) {
                header('Location: ' . $uri[0]."?error=usertaken&name=".$name_reg."&onlinename=".$online_name_reg
                ."&email=".$email_reg."&tel=".$tel_reg);
                exit();
            } else {




                if(!mysqli_stmt_prepare($stmt, $sqlEmail)) {
                    header('Location: ' . $uri[0]."?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $email_reg);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $resultCheck = mysqli_stmt_num_rows($stmt);
                    if($resultCheck > 0) {
                        header('Location: ' . $uri[0]."?error=emailtaken&name=".$name_reg."&onlinename=".$online_name_reg
                        ."&uid=".$uid_reg."&tel=".$tel_reg);
                        exit();
                    } else {
                        if(!mysqli_stmt_prepare($stmt, $sqlTel)) {
                            header('Location: ' . $uri[0]."?error=sqlerror");
                            exit();
                        } else {
                            mysqli_stmt_bind_param($stmt, "s", $tel_reg);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);
                            $resultCheck = mysqli_stmt_num_rows($stmt);
                            if($resultCheck > 0) {
                                header('Location: ' . $uri[0]."?error=teltaken&name=".$name_reg."&onlinename=".$online_name_reg
                                ."&email=".$email_reg."&uid=".$uid_reg);
                                exit();
                            } else {
                                if(!mysqli_stmt_prepare($stmt, $sqlOnline_name)) {
                                    header('Location: ' . $uri[0]."?error=sqlerror");
                                    exit();
                                } else {
                                    mysqli_stmt_bind_param($stmt, "s", $online_name_reg);
                                    mysqli_stmt_execute($stmt);
                                    mysqli_stmt_store_result($stmt);
                                    $resultCheck = mysqli_stmt_num_rows($stmt);
                                    if($resultCheck > 0) {
                                        header('Location: ' . $uri[0]."?error=onlinenametaken&name=".$name_reg."&email=".$email_reg."&tel=".
                                        $tel_reg."&uid=".$uid_reg);
                                        exit();
                                    } else {
                                        $sql = "INSERT INTO users (user_name, user_online_name, email, uid, upwd, tel, profile_img, register_date, register_ip) 
                                            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
                                        $stmt = mysqli_stmt_init($conn);
                                        if(!mysqli_stmt_prepare($stmt, $sql)) {
                                            header('Location: ' . $uri[0]."?error=sqlerror");
                                            exit();
                                        } else {
                                            $profile = "default-user".rand(1,7).".png";
                                            // $hashedPwd = password_hash($pwd_reg, PASSWORD_DEFAULT);
                                            mysqli_stmt_bind_param($stmt, "sssssssss", $name_reg, $online_name_reg, $email_reg, $uid_reg, $pwd_reg, $tel_reg, $profile, $date, $ip);
                                            mysqli_stmt_execute($stmt);
                                            header('Location: ' . $uri[0]."?signup=success");
                                            exit();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header('Location: ' . $uri[0]);
    exit();
}
