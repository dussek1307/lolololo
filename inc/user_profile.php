<?php
session_start();
if(isset($_SESSION['uid'])) {
    if(isset($_POST['btn'])) {
        $uri = explode('?', $_SERVER['HTTP_REFERER']);
        if(!empty($_FILES['file'])) {
            require "./dbh.php";
            $uid = $_SESSION['uid'];
            $file = $_FILES['file'];
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $user_id = $_SESSION['user_id'];
    
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    
            if(in_array($fileActualExt, $allowed)) {
                if($fileError === 0) {
                    if($fileSize < 5000000) {
                        $newFileName = "profile-".$uid.".".$fileActualExt;
                        $fileDestination = '../resources/img/profile-img/'.$newFileName;
                        mysqli_query($conn, "UPDATE users SET profile_img = '$newFileName' WHERE user_id = '$user_id';");
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $_SESSION['profile_img'] = $newFileName;
                        header('Location: '.$uri[0]."?success=uploaded");
                    } else {
                        echo "Your file is too big.";
                    }
                } else {
                    echo "Error!!";
                }
            } else {
                echo "이 파일을 업로드를 할 수 없습니다.";
            }
        } else {
            header('Location: '.$uri[0]."?error=novalue");
            exit();
        }
        
    } else {
        echo "not set";
    }
} else {
    header('Location: '.$uri[0]."?error=login");
}


