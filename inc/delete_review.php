<?php
if(isset($_POST['delete'])) {
    require "./dbh.php";
    $uri = explode('?', $_SERVER['HTTP_REFERER']);
    $rid = $_POST['rid'];

    $sql = "DELETE FROM review WHERE rid = '$rid'";
    $result = mysqli_query($conn, $sql);
    header("Location: ".$uri[0]."?delete=success");
} else if(isset($_POST["report"])) {
    require "./dbh.php";
    $uri = explode('?', $_SERVER['HTTP_REFERER']);
    $rid = $_POST['rid'];
    $report = 0;
    $sql = "SELECT num_of_report FROM review WHERE rid = '$rid'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $report = $row['num_of_report'];
    }
    $report += 1;
    $sql = "UPDATE review
    SET num_of_report = '$report' WHERE rid = '$rid';";
    mysqli_query($conn, $sql);
    header("Location: ".$uri[0]."?report=success");
}