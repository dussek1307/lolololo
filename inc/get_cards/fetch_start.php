<?php
if( isset($_POST["limit"]) && isset($_POST["start"]) ) {
    require "dbh.php";
    $avg_withraw = 0;
    $orderBy = $_POST['main_order'];
    $definedSearch = "SELECT * FROM casino_company ORDER BY sort_score DESC, $orderBy LIMIT ".$_POST["start"].", ".$_POST["limit"].";";
    $result = mysqli_query($conn, $definedSearch);
    if(mysqli_num_rows($result) > 0) {
        $count = 0;
        $start = $_POST["start"];
        while($row = mysqli_fetch_assoc($result)) {
            #@@@@@@START@@@@@@
            $casino_id = $row['casino_id'];

            // COUNTING GAMES
            $numOfGames = 0;
            $numOfSlots = 0;
            $sql_game = "SELECT * FROM game_provider WHERE casino_id = $casino_id;";
            $result_game = mysqli_query($conn, $sql_game);
            while($rows = mysqli_fetch_assoc($result_game)) foreach(array_keys($rows) as $key) if($rows[$key] == 1) $numOfGames++;
    
            $sql_slot = "SELECT * FROM slot_provider WHERE casino_id = $casino_id;";
            $result_slot = mysqli_query($conn, $sql_slot);
            while($rows = mysqli_fetch_assoc($result_slot)) foreach(array_keys($rows) as $key) if($rows[$key] == 1) $numOfSlots++;

            // REVIEW COUNT
            $sql_review = "SELECT count(*), avg(score) FROM review WHERE casino_id = $casino_id;";
            $result_review = mysqli_query($conn, $sql_review);
            $numOfReview = 0;
            $casino_score = 0;
            while($row_result = mysqli_fetch_assoc($result_review)) {
                $numOfReview = $row_result['count(*)'];
                $casino_score = round($row_result['avg(score)']);
            }
            if($casino_score == 0) {
                $casino_score_tag = "리뷰점수: 없음";
            } elseif($casino_score > 0) {
                $casino_score_tag = "리뷰점수: ".$casino_score;
            } else {
                $casino_score_tag = "리뷰점수: 없음";
            }
            
            $guarantee_tag = "";
            $guarantee_amt = number_format($row['guarantee']);
            if($guarantee_amt > 0) $guarantee_tag = "보증금/₩ $guarantee_amt 남음";
            $avg_withraw = 0;
            $avg_withraw = round(($row['withdraw_speed_weekday'] + $row['withdraw_speed_weekend'] + $row['withdraw_speed_holiday']) / 3);
            $profile_img = "./resources/img/profile-img/default-slot-profile.png";
            $flag = "new-flag-kr";
            $direct_to_casino = "./casino-page/".$row['casino_id'].".php";
            $num_of_provider_tag = "라이브: ".$numOfGames."개/슬롯: ".$numOfSlots."개";
            $count++;
            echo "<div class='teacher-card' id='found-teacher-".$count."'>";
            $first_coupon = $row['first_coupon'];
			if($first_coupon == -77 || $first_coupon == -79) {
				echo "<div onclick=directTo('$direct_to_casino'); class='teacher-card-left safe-comp'; style='padding-left: 32px;'>";
			} else {
				echo "<div onclick=directTo('$direct_to_casino'); class='teacher-card-left'; style='padding-left: 32px;'>";
			}
                echo "<div class='teacher-card-detail-top'>
                    <div>";

            if($first_coupon > 0) {
                echo "<div class='free-money-icon'><p class='free-money-font'>가입쿠폰: ".$first_coupon."만원</p></div>";
			}
			if($first_coupon == -77) {
				echo "<div class='free-money-icon'><p class='free-money-font'>안전업체</p></div>";
            }
            if($first_coupon == -78) {
				echo "<div class='free-money-icon'><p class='free-money-font'>보상가능</p></div>";
			}
            #Profile change
            if($row['is_slotsite'] == 0) {
                $profile_img = "./resources/img/profile-img/default-table-profile.png";	
            }
            if($row['country'] == "영국") $flag = "new-flag-bg";
            if($row['country'] == "러시아") $flag = "new-flag-ru";
            if($row['country'] == "미국") $flag = "new-flag-us";
            if($row['country'] == "필리핀") $flag = "new-flag-ph";
            echo "<div class='new-avatar'><span class='ant-avatar ant-avatar-circle ant-avatar-image ant-avatar-icon' style='width: 79px; height: 79px; line-height: 79px; font-size: 39.5px;'><img src='$profile_img'></span><i class='new-flag new-flag-24 ".$flag."'></i>";
            echo  "</div>
                        <div class='teacher-card-rating' style='position: absolute; margin-top: 28px; margin-left: -8px;'>
                            <div style='margin-bottom: 24px;'>
                                <div class='teacher-card-stars'>
                                    <div class='stars-box'>
                                        
                                        <span class='number'>".$casino_score_tag."</span>
                                    </div>
                                </div>
                                <p style='font-weight: 300; font-size: 12px; line-height: 18px;'><span>".$numOfReview." 리뷰</span>
                                </p>
                            </div>
                            <div>
                                <button type='button' class='my-btn btn btn-medium btn-main'><span>더 보기</span></button>
                            </div>
                            <div>
                                <button type='button' onclick=directTo('".$row['site_url']."') class='my-btn btn btn-medium btn-main'><span>카지노 입장</span></button>
                            </div>
                        </div>
                    </div>
                    <div class='teacher-card-information' style='margin-left: 45px;'>
                        <h1 style='color: rgb(51, 51, 51);'><span>".$row['casino_name']."</span></h1>
                        <p class='newteacher-card-introduce'>
                            <span>".$row['foundation']."</span><br><span>$guarantee_tag</span>
                        </p>
                        <div class='teacher-card-divider'></div>
                        <h2 class='teacher-card-tec-language'>
                            <div><span class='language'><span>신뢰도</span></span>
                                <span class='tooltip-container-box' gap='5'>
                                    <span class='tooltip-container' placement='bottom'>
                                        <span class='tooltip-reference'>
                                            ";
                                            #This is reliability
                                            if($row['reliability'] == 1) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span><span class='level level-color-1'></span><span class='level level-color-1'></span><span class='level level-color-1'></span>";
                                            if($row['reliability'] == 2) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span><span class='level level-color-1'></span><span class='level level-color-1'></span>";
                                            if($row['reliability'] == 3) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span><span class='level level-color-1'></span>";
                                            if($row['reliability'] == 4) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span>";
                                            if($row['reliability'] == 5) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span>";
                                            echo "</span>
                                            </span>
                                        </span>&nbsp;
                                        <span class='language'><span>고객센터</span></span>
                                        <span class='tooltip-container-box' gap='5'>
                                        <span class='tooltip-container' placement='bottom'>
                                        <span class='tooltip-reference'>
                                            <div>";
                                            if($row['cs_rate'] == 1) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span><span class='level level-color-1'></span><span class='level level-color-1'></span><span class='level level-color-1'></span>";
                                            if($row['cs_rate'] == 2) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span><span class='level level-color-1'></span><span class='level level-color-1'></span>";
                                            if($row['cs_rate'] == 3) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span><span class='level level-color-1'></span>";
                                            if($row['cs_rate'] == 4) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span>";
                                            if($row['cs_rate'] == 5) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span>";
                                    echo "</div>
                                    </span>
                                </span>
                            </span>&nbsp;
                            <span class='language'><span>자본금</span></span>
                            <span class='tooltip-container-box' gap='5'>
                                <span class='tooltip-container' placement='bottom'>
                                    <span class='tooltip-reference'>
                                        <div>";
                                        if($row['capital_rate'] == 1) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span><span class='level level-color-1'></span><span class='level level-color-1'></span><span class='level level-color-1'></span>";
                                        if($row['capital_rate'] == 2) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span><span class='level level-color-1'></span><span class='level level-color-1'></span>";
                                        if($row['capital_rate'] == 3) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span><span class='level level-color-1'></span>";
                                        if($row['capital_rate'] == 4) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-1'></span>";
                                        if($row['capital_rate'] == 5) echo "<span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span><span class='level level-color-2 level-color-3'></span>";
                                    echo "</div>
                                    </span>
                                </span>
                            </span>

                                    </div>
                                </h2>
                            <p class='newteacher-card-introduce'><span>롤링: ".$row['rolling']."%</span></p>
                            
                        </div>
                    </div>	
                    <div class='teacher-card-detail-bottom' style='margin-left: 95px;'>
                        <div class='teacher-card-information'>
                            <div class='teacher-card-rate'>
                                <div class='teacher-card-hourly'>
                                    <p class='newteacher-card-introduce'><span>출금속도: ".$avg_withraw."분</span></p>
                                    <h2 class='teacher-price-rate'><span>".$num_of_provider_tag."</span></h2>
                                    
                                </div>
                            </div>
                        </div>
                    </div><i class='newteacher-card-favorite'></i>
                </div>
                <div class='teacher-card-right'>
                    <div class='teacher-card-tab-head'>
                        <div class='teacher-card-tabs'>
                            <div class='teacher-card-tab teacher-card-tab-img' onclick='toImg($start)'>
                                <p><span>이미지</span>
                                </p>
                            </div>
                            <div class='teacher-card-tab teacher-card-tab-intro' onclick='toIntro($start)'>
                                <p><span>소개</span>
                                </p>
                            </div>
                            <div class='teacher-card-tab-active' style='left: 0px; width: 44px;'></div>
                        </div>
                    </div>
                    <div class='teacher-card-tab-body'>
                        <div class='teacher-card-video'>
                            <div class='iframe-video'>
                                
                                    <img class='casino-image' src='./resources/img/main-img/main-".$row['casino_id'].".jpg' alt='poster'>
                                
                            </div>
                        </div>
                        
                        <div class='teacher-card-intro' style='display: none'>
                            <p><span>".substr($row['intro'], 0, 325)."<span>&nbsp;...&nbsp;</span>
                                <a href='".$direct_to_casino."' rel='noopener noreferrer' target='_blank' class='teacher-card-read-more'>
                                    <span>Read more</span>
                                </a>
                            </span></p>
                        </div>

                    </div>
                </div>
            </div>";
                                                    
            $start++;
        }
    }
}
?>