<?php
require "./dbh.php";
if(isset($_POST['delete'])) {
    $uri = explode('?', $_SERVER['HTTP_REFERER']);
    $cid = $_POST['cid'];
    $sql = "DELETE FROM comment WHERE cid = '$cid'";
    $sql_reply = "DELETE FROM cmt_reply WHERE cid = '$cid'";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql_reply);
    header("Location: ".$uri[0]."?delete=success");
} else if(isset($_POST["report"])) {
    $uri = explode('?', $_SERVER['HTTP_REFERER']);
    $cid = $_POST['cid'];
    $report = 0;
    $sql = "SELECT num_of_report FROM comment WHERE cid = '$cid'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $report = $row['num_of_report'];
    }
    $report += 1;
    $sql = "UPDATE comment
    SET num_of_report = '$report' WHERE cid = '$cid';";
    mysqli_query($conn, $sql);
    header("Location: ".$uri[0]."?report=success");
}