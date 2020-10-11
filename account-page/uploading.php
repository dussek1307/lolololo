<?php
include_once "../inc/dbh.php";
session_start();

if(isset($_POST['submit'])) {
    $summonerName = $_POST['summonerName'];

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

    $season7 = $_POST["season7"];
    $season8 = $_POST["season8"];
    $season9 = $_POST["season9"];
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
    $price = $_POST["price"];
    $intro = nl2br($_POST["intro"]);
    $user_id = $_SESSION['user_id'];

    $sql_post = "INSERT INTO posts (summonerName, isPrivate, soloRank, flexRank, fWins, fLoses, sWins, sLoses, level, owner, numOfChams, numOfSkins,
    blueEssence, season7, season8, season9, serverLocation, mostPlayed1, mostPlayed2, mostPlayed3, numOfPlayed1, numOfPlayed2, numOfPlayed3,
    meansOfTrade1, meansOfTrade2, meansOfTrade3, title, tel, price, intro, user_id)
        VALUES ('$summonerName', '$isPrivate','$soloRank', '$flexRank', '$fWins', '$fLoses', '$sWins', '$sLoses', '$level', 
        '$owner', '$numOfChams', '$numOfSkins', '$blueEssence', '$season7', '$season8', '$season9', '$serverLocation',
        '$mostPlayed1', '$mostPlayed2', '$mostPlayed3', '$numOfPlayed1', '$numOfPlayed2', '$numOfPlayed3',
        '$meansOfTrade1', '$meansOfTrade2', '$meansOfTrade3', '$title','$tel', '$price', '$intro', '$user_id'
        );";

    mysqli_query($conn, $sql_post);

    // Get the post_id
    $post_id = "";
    $result = mysqli_query($conn, "SELECT * FROM posts;");
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $post_id =  $row["post_id"];
        }
    } else {
        echo "You have no row.";
    }


    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'pdf');


    $myfile = fopen("post_page_code.php", "r") or die("Unable to open file!");
    $post_page_code = "<?php include './post_page_code.php';  ?>";
    fclose($myfile);

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 5000000) {
                $newFileName = "post_".$post_id.".".$fileActualExt;
                $fileDestination = '../resources/img/post-img/'.$newFileName;
                move_uploaded_file($fileTmpName, $fileDestination);
                $post_page = fopen($post_id.".php", "w");
                fwrite($post_page, $post_page_code);
                fclose($post_page);
                header("Location: ../upload.php?success");
            } else {
                echo "Your file is too big to upload.";
            }
        } else {
            echo "There was an error uploading your file.";
        }
    } else {
        echo "You can not upload ".end($fileExt).".";
    }

}
