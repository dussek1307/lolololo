<?php 
if(isset($_POST['change-submit'])) {
    session_start();
    require "./dbh.php";
    $uri = explode('?', $_SERVER['HTTP_REFERER']);
    $curPwd = $_POST['curPwd'];
    $newPwd = $_POST['newPwd'];
    $repeatPwd = $_POST['repeatPwd'];
    $uid = $_SESSION['uid'];
    if($newPwd !== $repeatPwd) {
        header('Location: ' . $uri[0]."?error=pwdRepeat");
        exit();
    }
    $result = mysqli_query($conn, "SELECT * FROM users WHERE uid = '$uid'");
    while($row = mysqli_fetch_assoc($result)) {
        if(password_verify($curPwd, $row['upwd'])) {
            $sql = "UPDATE users SET upwd = ? WHERE uid = '$uid'";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header('Location: ' . $uri[0]."?error=sqlerror");
                exit();
            } else {
                $hashedPwd = password_hash($newPwd, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "s", $hashedPwd);
                mysqli_stmt_execute($stmt);
                header('Location: ' . $uri[0]."?pwdChan=success");
                exit();
            }
        } else if($curPwd == $row['upwd']) {
            $sql = "UPDATE users SET upwd = ? WHERE uid = '$uid'";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header('Location: ' . $uri[0]."?error=sqlerror");
                exit();
            } else {
                // $hashedPwd = password_hash($newPwd, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "s", $newPwd);
                mysqli_stmt_execute($stmt);
                header('Location: ' . $uri[0]."?pwdChan=success");
                exit();
            }
        } else {
            header('Location: ' . $uri[0]."?error=wrongpwd");
            exit();
        }
    }
    
}