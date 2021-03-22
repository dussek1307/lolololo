<?php
include_once "../inc/dbh.php";
require_once("tiny/vendor/autoload.php");
session_start();
date_default_timezone_set('Asia/Seoul');

if(isset($_POST['submit'])) {
    $summonerName = $_POST['summonerName'];
    $upload_date = date('Y-m-d H:i:s');

    if(isset($_POST['isPrivate'])) {
        $isPrivate = 1;
    } else {
        $isPrivate = 0;
    }
    
    $soloRank = $_POST["soloRank"];
    $flexRank = $_POST["flexRank"];
    $fWins = $_POST["fWins"];
    $fLoses = $_POST["fLoses"];
    $sWins = $_POST["sWins"];
    $sLoses = $_POST["sLoses"];

    $level = $_POST["level"];
    $owner = $_POST["owner"];
    $numOfChams = $_POST["numOfChams"];
    $numOfSkins = $_POST["numOfSkins"];
    $blueEssence = $_POST["blueEssence"];

    $season9 = $_POST["season9"];
    $season10 = $_POST["season10"];
    $serverLocation = $_POST["serverLocation"];

    $mostPlayed1 = $_POST["mostPlayed1"];
    $mostPlayed2 = $_POST["mostPlayed2"];
    $mostPlayed3 = $_POST["mostPlayed3"];
    $numOfPlayed1 = $_POST["numOfPlayed1"];
    $numOfPlayed2 = $_POST["numOfPlayed2"];
    $numOfPlayed3 = $_POST["numOfPlayed3"];

    $meansOfTrade1 = $_POST["meansOfTrade1"];

    $meansOfTrade2 = "";
    $meansOfTrade3 = "";
    if(isset($_POST["meansOfTrade2"])) $meansOfTrade2 = $_POST["meansOfTrade2"];
    if(isset($_POST["meansOfTrade3"])) $meansOfTrade3 = $_POST["meansOfTrade3"];

    $title = $_POST["title"];
    $tel = $_POST["tel"];
    $price = str_replace(",", "", $_POST["price"]);
    $intro = nl2br($_POST["intro"]);
    $user_id = $_SESSION['user_id'];

    $sql_post = "INSERT INTO posts (summonerName, isPrivate, soloRank, flexRank, fWins, fLoses, sWins, sLoses, level, owner, numOfChams, numOfSkins,
    blueEssence, season9, season10, serverLocation, mostPlayed1, mostPlayed2, mostPlayed3, numOfPlayed1, numOfPlayed2, numOfPlayed3,
    meansOfTrade1, meansOfTrade2, meansOfTrade3, title, tel, price, intro, user_id, upload_date)
        VALUES ('$summonerName', '$isPrivate','$soloRank', '$flexRank', '$fWins', '$fLoses', '$sWins', '$sLoses', '$level', 
        '$owner', '$numOfChams', '$numOfSkins', '$blueEssence', '$season9', '$season10', '$serverLocation',
        '$mostPlayed1', '$mostPlayed2', '$mostPlayed3', '$numOfPlayed1', '$numOfPlayed2', '$numOfPlayed3',
        '$meansOfTrade1', '$meansOfTrade2', '$meansOfTrade3', '$title','$tel', '$price', '$intro', '$user_id', '$upload_date'
        );";
    mysqli_query($conn, $sql_post);

    // Get the post_id
    $post_id = "";
    $result = mysqli_query($conn, "SELECT * FROM posts ORDER BY post_id DESC LIMIT 1;");
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $post_id =  $row["post_id"];
        }
    } else {
        echo "You have no row.";
    }

    $myfile = fopen("post_page_code.php", "r") or die("Unable to open file!");
    $post_page_code = "<?php include './post_page_code.php';  ?>";
    fclose($myfile);
    
    $post_page = fopen($post_id.".php", "w");
    fwrite($post_page, $post_page_code);
    fclose($post_page);

    \Tinify\setKey("KH151TcYhrCphqTpm3Dy8WY0wXcCyKV5");
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 5000000) {
                $newFileName = "post_".$post_id.".".$fileActualExt;
                $sql_img = "UPDATE posts
                SET img = '$newFileName'
                WHERE post_id = $post_id;";
                mysqli_query($conn, $sql_img);
                $fileDestination = '../resources/img/post-main/'.$newFileName;
                $source = \Tinify\fromFile($fileTmpName);
                $source->toFile($fileDestination);
                header("Location: ../upload.php?success");
            } else {
                echo "사진크기가 너무 큽니다.";
            }
        } else {
            echo "사진을 올리는데 문제가 있습니다";
        }
    } else {
        header("Location: ../upload.php?success");
    }

}
