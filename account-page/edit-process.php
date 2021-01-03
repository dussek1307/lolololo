<?php
include_once "../inc/dbh.php";
session_start();
date_default_timezone_set('Asia/Seoul');

if(isset($_POST['submit'])) {
    $summonerName = $_POST['summonerName'];
    $upload_date = date('Y-m-d H:i:s');
    $post_id = $_POST['post_id'];

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

    $sql = "UPDATE posts SET summonerName = '$summonerName', isPrivate = '$isPrivate', soloRank = '$soloRank', flexRank = '$flexRank', fWins = '$fWins',
    fLoses = '$fLoses', sWins = '$sWins', sLoses = '$sLoses', level = '$level', owner = '$owner', numOfChams = '$numOfChams', numOfSkins = '$numOfSkins',
    blueEssence = '$blueEssence', season9 = '$season9', season10 = '$season10', serverLocation = '$serverLocation', mostPlayed1 = '$mostPlayed1',
    mostPlayed2 = '$mostPlayed2', mostPlayed3 = '$mostPlayed3', numOfPlayed1 = '$numOfPlayed1', numOfPlayed2 = '$numOfPlayed2', numOfPlayed3 = '$numOfPlayed3',
    meansOfTrade1 = '$meansOfTrade1', meansOfTrade2 = '$meansOfTrade2', meansOfTrade3 = '$meansOfTrade3', title = '$title', tel = '$tel', price = '$price', 
    intro = '$intro', user_id = '$user_id', upload_date = '$upload_date' 
    WHERE post_id = '$post_id'";
    mysqli_query($conn, $sql);

    header("Location: ../mypage.php?success");

}
