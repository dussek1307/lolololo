<?php
    include_once "../dbh.php";
    $eee = "this";
    if(!empty($_GET['q'])) {
        $q = str_replace(" ", "", $_GET['q']);
        
        $sql_user = "SELECT user_id FROM users WHERE user_online_name LIKE '%$q%'";
        $result_user = mysqli_query($conn, $sql_user);
        if(mysqli_num_rows($result_user) > 0) {
            while($row = mysqli_fetch_assoc($result_user)) {
                echo $row['user_id'];
            }
        }
        $sql_post = "SELECT * FROM posts WHERE title LIKE '%$q%' || foundation LIKE '%$q%'";
        
    }    
?>