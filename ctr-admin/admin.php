<?php
session_start();
if($_SESSION["user_id"] != 1) {
    header("location:javascript://history.go(-1)");
} else {
    require "../inc/dbh.php";
    require "./admin_ctr.php";
    echo "<!DOCTYPE html>
        <html lang='ko'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Document</title>
            <link rel='stylesheet' href='admin.css'>
        </head>
        <body>
            <div class='container'>
                <div class='Wallet-transaction-location'>
                    <div class='WalletTransaction-desktop'>
                        <div class='WalletTransaction-title'><span>유저</span><span onclick='goback()' class='WalletTransaction-filter-icon'>뒤로가기</span></div>
                        <div class='WalletTransaction-detail'>
                            <div class='WalletTransaction-filter WalletTransaction-filter-hiden'>
                                <div class='WalletTransaction-timepicker-location'><span class='time-picker-box'><input placeholder='Start Date - End Date' readonly='readonly' class='time-picker-default time-picker-desktop' value=''><img src='/static/media/calendar.5c6d7923.svg' width='24' alt='calendar icon'></span></div>
                                <div class='WalletTransaction-type-menu'>
                                    <div class='menu menu-style-default menu-hide' style='width: inherit;'>
                                        <div class='menu-title'><span class='menu-selected'><div class='default-type'><span>Choose Transaction Type</span></div>
                                        </span><span class='arrow-down'></span></div>
                                    <div class='menu-items menu-items-down' style='overflow-y: hidden;'>
                                        <div style='max-height: 300px; overflow-y: auto;'>
                                            <div class='menu-item menu-item-disabled'>
                                                <div><span>No Result</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='WalletTransaction-download'>
                                <button type='button' class='btn btn-big btn-ghost-main' disabled=''><span>Download</span></button>
                            </div>
                        </div>
                        <div class='WalletTransaction-lists-box'>
                            <table class='wallet-tab'>
                                <thead>
                                    <tr class='wallet-tr'>
                                        <th><span>유저넘버</span></th>
                                        <th><span>아이디</span></th>
                                        <th class='wallet-td-right-space'><span>닉네임</span></th>
                                        <th><span>이름</span></th>
                                        <th><span>번호</span></th>
                                        <th><span>아이피</span></th>
                                        <th><span>가입날짜</span></th>
                                        <th><span>최종로그인</span></th>
                                        <th class='wallet-action-th'><span></span></th>
                                        
                                    </tr>
                                </thead>";
    $sql = "SELECT * FROM users";
    $user_result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($user_result)) {
        echo "<tbody>
        <tr class='wallet-tr'>
            <td>
                <span>".$row["user_id"]."</span>
            </td>
            <td>
                <span>".$row["uid"]."</span>
            </td>
            <td class='wallet-td-right-space'>
                <span>".$row["user_online_name"]."</span>
            </td>
            <td>
                <span>".$row["user_name"]."</span>
            </td>
            <td>
                <span>".$row["tel"]."</span>
            </td>
            <td>
                <span>".$row["login_ip"]."</span>
            </td>
            <td><span>".$row["register_date"]."</span></td>
            <td><span>".$row["latest_login"]."</span></td>
            <td class='wallet-action-th'>
                <form action='./admin_ctr.php' method='POST'>
                    <button class='delete-btn' name='delete' value='".$row['user_id']."'>삭제</button>
                </form>
            </td>
        </tr>
    </tbody>";
    }
    echo "</table>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>";
}


?>
<script>
    function goback() {
        history.go(-1);
    }
</script>