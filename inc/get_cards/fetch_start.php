<?php
if( isset($_POST["limit"]) && isset($_POST["start"]) ) {
    require "../dbh.php";
    $sql = "SELECT * FROM posts ORDER BY upload_date DESC LIMIT ".$_POST["start"].", ".$_POST["limit"].";";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $count = 0;
        $start = $_POST["start"];


        while($row = mysqli_fetch_assoc($result)) {
            #@@@@@@START@@@@@@
            $post_id = $row['post_id'];
            $user_id = $row['user_id'];

            $sql_seller = "SELECT user_online_name FROM users WHERE user_id = $user_id";
            $result_seller = mysqli_query($conn, $sql_seller);
            $seller = "판매자: ";
            while($rows = mysqli_fetch_assoc($result_seller)) {
                $seller .= $rows['user_online_name'];
            }


            $owner = "명의: 1대 본주";
            if($row['owner'] == "second") $owner = "명의: 2대 본주";
            if($row['owner'] == "third") $owner = "명의: 3대 본주";

            switch($row['soloRank']) {
                case "unranked":
                    $soloRank = "언랭";
                    break;
                case "i4":
                    $soloRank = "아이언 4";
                    break;
                case "i3":
                    $soloRank = "아이언 3";
                    break;
                case "i2":
                    $soloRank = "아이언 2";
                    break;
                case "i1":
                    $soloRank = "아이언 1";
                    break;
                case "s4":
                    $soloRank = "실버 4";
                    break;
                case "s3":
                    $soloRank = "실버 3";
                    break;
                case "s2":
                    $soloRank = "실버 2";
                    break;
                case "s1":
                    $soloRank = "실버 1";
                    break;
                case "g4":
                    $soloRank = "골드 4";
                    break;
                case "g3":
                    $soloRank = "골드 3";
                    break;
                case "g2":
                    $soloRank = "골드 2";
                    break;
                case "g1":
                    $soloRank = "골드 1";
                    break;
                case "p4":
                    $soloRank = "플래티넘 4";
                    break;
                case "p3":
                    $soloRank = "플래티넘 3";
                    break;
                case "p2":
                    $soloRank = "플래티넘 2";
                    break;
                case "p1":
                    $soloRank = "플래티넘 1";
                    break;
                case "d4":
                    $soloRank = "다이아몬드 4";
                    break;
                case "d3":
                    $soloRank = "다이아몬드 3";
                    break;
                case "d2":
                    $soloRank = "다이아몬드 2";
                    break;
                case "d1":
                    $soloRank = "다이아몬드 1";
                    break;
                case "m1":
                    $soloRank = "Master I";
                    break;
                case "gm1":
                    $soloRank = "GrandMaster I";
                    break;
                case "c1":
                    $soloRank = "Challenger I";
                    break;
                default:
                $soloRank = "언랭";
            }

            switch($row['flexRank']) {
                case "unranked":
                    $flexRank = "언랭";
                    break;
                case "i4":
                    $flexRank = "아이언 4";
                    break;
                case "i3":
                    $flexRank = "아이언 3";
                    break;
                case "i2":
                    $flexRank = "아이언 2";
                    break;
                case "i1":
                    $flexRank = "아이언 1";
                    break;
                case "s4":
                    $flexRank = "실버 4";
                    break;
                case "s3":
                    $flexRank = "실버 3";
                    break;
                case "s2":
                    $flexRank = "실버 2";
                    break;
                case "s1":
                    $flexRank = "실버 1";
                    break;
                case "g4":
                    $flexRank = "골드 4";
                    break;
                case "g3":
                    $flexRank = "골드 3";
                    break;
                case "g2":
                    $flexRank = "골드 2";
                    break;
                case "g1":
                    $flexRank = "골드 1";
                    break;
                case "p4":
                    $flexRank = "플래티넘 4";
                    break;
                case "p3":
                    $flexRank = "플래티넘 3";
                    break;
                case "p2":
                    $flexRank = "플래티넘 2";
                    break;
                case "p1":
                    $flexRank = "플래티넘 1";
                    break;
                case "d4":
                    $flexRank = "다이아몬드 4";
                    break;
                case "d3":
                    $flexRank = "다이아몬드 3";
                    break;
                case "d2":
                    $flexRank = "다이아몬드 2";
                    break;
                case "d1":
                    $flexRank = "다이아몬드 1";
                    break;
                case "m1":
                    $flexRank = "Master I";
                    break;
                case "gm1":
                    $flexRank = "GrandMaster I";
                    break;
                case "c1":
                    $flexRank = "Challenger I";
                    break;
                default:
                $flexRank = "언랭";
            }
            
            $directToPost = "./account-page/".$row['post_id'].".php";
            echo "<div class='teacher-card' id='found-teacher-1'>
            <div onclick=directTo('$directToPost') class='teacher-card-left' style='padding-left: 32px;'>
            <div class='teacher-card-detail-top'>
            <div>
            <div class='new-avatar'><span class='ant-avatar ant-avatar-circle ant-avatar-image ant-avatar-icon' style='width: 79px; height: 79px; line-height: 79px; font-size: 39.5px;'>
            <img src='./resources/img/tier-img/g4.png'></span></div>
                <div class='teacher-card-rating' style='position: absolute; margin-top: 28px; margin-left: -8px;'>
                    <div style='margin-bottom: 24px;'>
                        <div class='teacher-card-stars'>
                            <div class='stars-box'>
                                <span class='number'>".$soloRank."</span>
                            </div>
                        </div>
                        <p style='font-weight: 300; font-size: 12px; line-height: 18px;'><a href='#'><span class='user-name'>".$seller."</span></a>
                        </p>
                    </div>
                    <div>
                        <button type='button' class='my-btn btn btn-medium btn-main'><span>더 보기</span></button>
                    </div>
                </div>
            </div>
            <div class='teacher-card-information' style='margin-left: 45px;'>
                <h1 style='color: rgb(51, 51, 51);'><span>".$row['title']."</span></h1>
                <p class='newteacher-card-introduce'>
                    <span>한국서버</span><br><span>".$owner."</span>
                </p>
                <div class='teacher-card-divider'></div>
                    <p class='newteacher-card-introduce'><span>파랑정수: ".$row['blueEssence']."</span></p>
                    <p class='newteacher-card-introduce'><span>자유랭크: ".$flexRank."</span></p>
                </div>
            </div>	
            <div class='teacher-card-detail-bottom' style='margin-left: 95px;'>
                <div class='teacher-card-information'>
                    <div class='teacher-card-rate'>
                        <div class='teacher-card-hourly'>
                            <h2 class='teacher-price-rate'><span>챔피언: ".$row['numOfChams']."개 ● 스킨: ".$row['numOfSkins']."개</span></h2>
                        </div>
                    </div>
                </div>
            </div><i class='newteacher-card-favorite'></i>
        </div>
        <div class='teacher-card-right'>
            <div class='teacher-card-tab-head'>
                <div class='teacher-card-tabs'>
                    <div class='teacher-card-tab teacher-card-tab-img' onclick='toImg(".$count.")'>
                        <p><span>이미지</span>
                        </p>
                    </div>
                    <div class='teacher-card-tab teacher-card-tab-intro' onclick='toIntro(".$count.")'>
                        <p><span>소개</span>
                        </p>
                    </div>
                    <div class='teacher-card-tab-active' style='left: 0px; width: 44px;'></div>
                </div>
            </div>
            <div class='teacher-card-tab-body'>
                <div class='teacher-card-video'>
                    <div class='iframe-video'>
                        
                            <img class='post-image' src='./resources/img/post-main/post_".$row['post_id'].".png' alt='poster'>
    
                    </div>
                </div>
                
                <div class='teacher-card-intro' style='display: none'>
                    <p><span>".$row['intro']."<span>&nbsp;...&nbsp;</span>
                        <a href='./account-page/".$row['post_id'].".php' rel='noopener noreferrer' target='_blank' class='teacher-card-read-more'>
                            <span>더 보기</span>
                        </a>
                    </span></p>
                </div>
            </div>
        </div>
    </div>";
            $count++;                                        
            $start++;
        }
    }
}
?>