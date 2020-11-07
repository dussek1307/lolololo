<?php
    include_once '../inc/post_header.php';
    // Make sure pay attention to the current file name!!

    $sql_post_detail = "SELECT * FROM posts WHERE post_id = $post_id;";

    $result_post_detail = mysqli_query($conn, $sql_post_detail);
    
    
    while($rows = mysqli_fetch_assoc($result_post_detail)) {
        $owner = "명의: 1대 본주";
        $summonerName = "비공개";
        $fWinRate = 0;
        if($rows['fWins'] > 0) 
            $fWinRate = round(($rows['fWins'] / ($rows['fWins'] + $rows['fLoses'])) * 100, 2);

        if($rows['owner'] == "second") $owner = "명의: 2대 본주";
        if($rows['owner'] == "third") $owner = "명의: 3대 본주";

        switch($rows['serverLocation']) {
            case "KR":
                $serverLocation = "한국";
                break;
            case "PBE":
                $serverLocation = "PBE";
                break;
            case "NA":
                $serverLocation = "북미";
                break;
            case "JP":
                $serverLocation = "일본";
                break;
            case "CN":
                $serverLocation = "중국";
                break;
            case "EUW":
                $serverLocation = "서유럽";
                break;
            case "EUNE":
                $serverLocation = "북동부유럽";
                break;
            case "OCE":
                $serverLocation = "오세아니아";
                break;
            case "SEA":
                $serverLocation = "동남아시아";
                break;
            case "TR":
                $serverLocation = "터키";
                break;
            case "RU":
                $serverLocation = "러시아";
                break;
            case "LAS":
                $serverLocation = "LAS";
                break;
            case "LAN":
                $serverLocation = "LAN";
                break;
            case "BR":
                $serverLocation = "브라질";
                break;
            default:
                $serverLocation = "알수없음";
        }
        
        switch($rows['soloRank']) {
            case "unranked":
                $soloRank = "Unranked";
                break;
            case "i4":
                $soloRank = "Iron IV";
                break;
            case "i3":
                $soloRank = "Iron III";
                break;
            case "i2":
                $soloRank = "Iron II";
                break;
            case "i1":
                $soloRank = "Iron I";
                break;
            case "s4":
                $soloRank = "Silver IV";
                break;
            case "s3":
                $soloRank = "Silver III";
                break;
            case "s2":
                $soloRank = "Silver II";
                break;
            case "s1":
                $soloRank = "Silver I";
                break;
            case "g4":
                $soloRank = "Gold IV";
                break;
            case "g3":
                $soloRank = "Gold III";
                break;
            case "g2":
                $soloRank = "Gold II";
                break;
            case "g1":
                $soloRank = "Gold I";
                break;
            case "p4":
                $soloRank = "Platinum IV";
                break;
            case "p3":
                $soloRank = "Platinum III";
                break;
            case "p2":
                $soloRank = "Platinum II";
                break;
            case "p1":
                $soloRank = "Platinum I";
                break;
            case "d4":
                $soloRank = "Diamond IV";
                break;
            case "d3":
                $soloRank = "Diamond III";
                break;
            case "d2":
                $soloRank = "Diamond II";
                break;
            case "d1":
                $soloRank = "Diamond I";
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
            $soloRank = "Unranked";
        }

        switch($rows['flexRank']) {
            case "unranked":
                $flexRank = "Unranked";
                break;
            case "i4":
                $flexRank = "Iron IV";
                break;
            case "i3":
                $flexRank = "Iron III";
                break;
            case "i2":
                $flexRank = "Iron II";
                break;
            case "i1":
                $flexRank = "Iron I";
                break;
            case "s4":
                $flexRank = "Silver IV";
                break;
            case "s3":
                $flexRank = "Silver III";
                break;
            case "s2":
                $flexRank = "Silver II";
                break;
            case "s1":
                $flexRank = "Silver I";
                break;
            case "g4":
                $flexRank = "Gold IV";
                break;
            case "g3":
                $flexRank = "Gold III";
                break;
            case "g2":
                $flexRank = "Gold II";
                break;
            case "g1":
                $flexRank = "Gold I";
                break;
            case "p4":
                $flexRank = "Platinum IV";
                break;
            case "p3":
                $flexRank = "Platinum III";
                break;
            case "p2":
                $flexRank = "Platinum II";
                break;
            case "p1":
                $flexRank = "Platinum I";
                break;
            case "d4":
                $flexRank = "Diamond IV";
                break;
            case "d3":
                $flexRank = "Diamond III";
                break;
            case "d2":
                $flexRank = "Diamond II";
                break;
            case "d1":
                $flexRank = "Diamond I";
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
            $flexRank = "Unranked";
        }

        if($rows['isPrivate'] == 0) $summonerName = $rows['summonerName'];

        switch($rows['season7']) {
            case "unranked":
                $season7 = "X";
                break;
            case "i4":
                $season7 = "S7 Iron IV";
                break;
            case "i3":
                $season7 = "S7 Iron III";
                break;
            case "i2":
                $season7 = "S7 Iron II";
                break;
            case "i1":
                $season7 = "S7 Iron I";
                break;
            case "s4":
                $season7 = "S7 Silver IV";
                break;
            case "s3":
                $season7 = "S7 Silver III";
                break;
            case "s2":
                $season7 = "S7 Silver II";
                break;
            case "s1":
                $season7 = "S7 Silver I";
                break;
            case "g4":
                $season7 = "S7 Gold IV";
                break;
            case "g3":
                $season7 = "S7 Gold III";
                break;
            case "g2":
                $season7 = "S7 Gold II";
                break;
            case "g1":
                $season7 = "S7 Gold I";
                break;
            case "p4":
                $season7 = "S7 Platinum IV";
                break;
            case "p3":
                $season7 = "S7 Platinum III";
                break;
            case "p2":
                $season7 = "S7 Platinum II";
                break;
            case "p1":
                $season7 = "S7 Platinum I";
                break;
            case "d4":
                $season7 = "S7 Diamond IV";
                break;
            case "d3":
                $season7 = "S7 Diamond III";
                break;
            case "d2":
                $season7 = "S7 Diamond II";
                break;
            case "d1":
                $season7 = "S7 Diamond I";
                break;
            case "m1":
                $season7 = "S7 Master I";
                break;
            case "gm1":
                $season7 = "S7 GrandMaster I";
                break;
            case "c1":
                $season7 = "S7 Challenger I";
                break;
            default:
                $season7 = "S7 X";
        }

        switch($rows['season8']) {
            case "unranked":
                $season8 = "X";
                break;
            case "i4":
                $season8 = "S8 Iron IV";
                break;
            case "i3":
                $season8 = "S8 Iron III";
                break;
            case "i2":
                $season8 = "S8 Iron II";
                break;
            case "i1":
                $season8 = "S8 Iron I";
                break;
            case "s4":
                $season8 = "S8 Silver IV";
                break;
            case "s3":
                $season8 = "S8 Silver III";
                break;
            case "s2":
                $season8 = "S8 Silver II";
                break;
            case "s1":
                $season8 = "S8 Silver I";
                break;
            case "g4":
                $season8 = "S8 Gold IV";
                break;
            case "g3":
                $season8 = "S8 Gold III";
                break;
            case "g2":
                $season8 = "S8 Gold II";
                break;
            case "g1":
                $season8 = "S8 Gold I";
                break;
            case "p4":
                $season8 = "S8 Platinum IV";
                break;
            case "p3":
                $season8 = "S8 Platinum III";
                break;
            case "p2":
                $season8 = "S8 Platinum II";
                break;
            case "p1":
                $season8 = "S8 Platinum I";
                break;
            case "d4":
                $season8 = "S8 Diamond IV";
                break;
            case "d3":
                $season8 = "S8 Diamond III";
                break;
            case "d2":
                $season8 = "S8 Diamond II";
                break;
            case "d1":
                $season8 = "S8 Diamond I";
                break;
            case "m1":
                $season8 = "S8 Master I";
                break;
            case "gm1":
                $season8 = "S8 GrandMaster I";
                break;
            case "c1":
                $season8 = "S8 Challenger I";
                break;
            default:
                $season8 = "X";
        }

        switch($rows['season9']) {
            case "unranked":
                $season9 = "X";
                break;
            case "i4":
                $season9 = "S9 Iron IV";
                break;
            case "i3":
                $season9 = "S9 Iron III";
                break;
            case "i2":
                $season9 = "S9 Iron II";
                break;
            case "i1":
                $season9 = "S9 Iron I";
                break;
            case "s4":
                $season9 = "S9 Silver IV";
                break;
            case "s3":
                $season9 = "S9 Silver III";
                break;
            case "s2":
                $season9 = "S9 Silver II";
                break;
            case "s1":
                $season9 = "S9 Silver I";
                break;
            case "g4":
                $season9 = "S9 Gold IV";
                break;
            case "g3":
                $season9 = "S9 Gold III";
                break;
            case "g2":
                $season9 = "S9 Gold II";
                break;
            case "g1":
                $season9 = "S9 Gold I";
                break;
            case "p4":
                $season9 = "S9 Platinum IV";
                break;
            case "p3":
                $season9 = "S9 Platinum III";
                break;
            case "p2":
                $season9 = "S9 Platinum II";
                break;
            case "p1":
                $season9 = "S9 Platinum I";
                break;
            case "d4":
                $season9 = "S9 Diamond IV";
                break;
            case "d3":
                $season9 = "S9 Diamond III";
                break;
            case "d2":
                $season9 = "S9 Diamond II";
                break;
            case "d1":
                $season9 = "S9 Diamond I";
                break;
            case "m1":
                $season9 = "S9 Master I";
                break;
            case "gm1":
                $season9 = "S9 GrandMaster I";
                break;
            case "c1":
                $season9 = "S9 Challenger I";
                break;
            default:
                $season9 = "X";
        }
        $like_path = "favorite";
        if(isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];

            $sql_likes = "SELECT * FROM post_liked WHERE post_id = $post_id && user_id = '$user_id';";
            $result_likes = mysqli_query($conn, $sql_likes);
            if(mysqli_num_rows($result_likes) > 0) {
                while($row_like = mysqli_fetch_assoc($result_likes)) if($row_like['is_true'] == 1) $like_path = "favorite-clicked";
            }
        }

        
        echo "<div class='flex-container'>
        <div style='position: static; z-index: inherit;'>
            <div>
                <div class='Teacher Teacher-desktop'>
                    <div class='Teacher-main'>
                        <div id='teacher_profile_nav_aboutme' class='TeacherInfoCard teacherCard-box1 TeacherInfoCard-desktop'>
                            <div class='Video'>
                                <img style='width: 755px; height: 453px;' src='../resources/img/post-main/post_".$rows['post_id'].".png' alt='로고'>
                            </div>
                            <div class='teacherCard'>
                                <div class='teacherCard-left'>
                                    <div class='avatar avatar-big avatar-shadow avatar-placeholder' ><img src='../resources/img/tier-img/g4.png' alt='Avatar'></div>

                                </div>
                                <div class='teacherCard-body'>
                                    <div class='teacherCard-part1'>
                                        <div class='teacherCard-middle'>
                                            <div class='teacherCard-name'>".$rows['title']."</div>
                                            <div class='teacherCard-personalInfo'>
                                                <div><span>".$owner."</span></div>
                                                <div><span></span>
                                                </div>
                                            </div>
                                            <div class='redbar'></div>
                                        </div><div class='teacherCard-right'>
                                            <form id='teacher_profile_icons_anchor' class='teacherCard-right-icon' action='../inc/post_like.php' method='POST'>
                                            <button class='Favourite' name='favorite' value='".$rows['post_id']."'><img src='../resources/img/".$like_path.".svg' alt='favourite' width='24' height='24'></button>
                                            </form>
                                            <div class='teacherCard-right-body'>
                                                <div class='teacherCard-stars'>
                                                    <div class='stars-box'>
                                                        <span class='number'>레벨: ".$rows['level']."</span>
                                                    </div>
                                                </div>
                                                <div><span>서버: ".$serverLocation."</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='teacherCard-part2'>
                                        <div>
                                            <div class='teacherCard-teaches'><span class='teacherCard-teaches-title'><span>컬렉션</span></span>
                                        <div class='teacherCard-teaches-languages'>
                                            <div><span class='language'><b>챔피언: ".$rows['numOfChams']."개</b></span>
                                        </div>
                                        <div><span class='language'><b>스킨: ".$rows['numOfSkins']."개</b></span>
                                    </div>
                                    <div><span class='language'><b>파랑정수: ".$rows['blueEssence']."</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='aboutMe' style='padding: 0px;'>
            <h2 class='cardTitle' style='margin: 0'><span>소개</span><span class='aboutMeTime'><span>업카운트 | 리그오브레전드 계정거래 사이트</span></span></h2>
                <div class='TextOverflow'>".$rows['intro']."</div>
        </div>
    </div>
<div id='teacher_profile_nav_statistics' class='StatisticsCard StatisticsCard-desktop'>
    <div class='teacherCard-box' id='StatisticsCard'>
        <div class='teacherCard-bar'>
            <h2 class='cardTitle'><span>소환사명: ".$summonerName."</span><span class='aboutMeTime' style='font-size: 12px;'><span>업카운트 | 소환사 정보</span></span></h2>
            <div class='statistics'>
            <div class='box box-padding-10 summoner-rankings'>
                <h3 class='box-title' style='color: black;'>솔로랭크</h3>
                <div class='best-league'>
                    <div class='relative'>
                        <div class='row'>
                            <div class='medium-24 small-24 columns'>
                            <div class='img-align-block'>
                                <div>
                                    <img src='../resources/img/tier-img/".$rows['soloRank'].".png' alt='".$soloRank."' height='137' width='160' class='' style='width:100%;max-width:160px;'>                            
                                </div>
                                <div class='txt mainRankingDescriptionText'>
                                    <div class='leagueTier'>
                                        ".$soloRank."                                                                    
                                    </div>
                                    <div class='queueLine'>
                                        <span class='queue'>솔로랭크</span>
                                        <span class='miniserie'>
                                        </span>
                                    </div>
                                    <div class='rank'>
                                    </div>
                                    <div class='winslosses'>
                                        <span class='wins'>승리: <span class='winsNumber'>".$rows['sWins']."</span></span>
                                        <span class='winLossesSeparator'></span>
                                        <span class='losses'>패배: <span class='lossesNumber'>".$rows['sLoses']."</span></span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='other-league even averageEnnemyLine'>
                    <div class='rowTitle'>
                    자유 5:5 랭크      
                    </div>
                    <div class='other-league-content'>
                        <div class='img-align-block'>
                            <div>
                                <img src='../resources/img/tier-img/".$rows['flexRank'].".png' alt='".$flexRank."' height='48' width='48' class='leagueicons-48-4-4 '>                    
                            </div>
                            <div class='txt'>
                            <div class='leagueTier no-margin-bottom'>
                                ".$flexRank."                  
                            </div>
                            <div>
                            <div class='league-points'>자유랭크</span></div>
                            </div>
                            <div class='queue'>
                                ".$rows['fWins']."승 ".$rows['fLoses']."패/".$fWinRate."%
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class='content active' data-tab-id='championsData-ranked' style='width: 313px'>
<table class='data_table sortable_table'>
    <tbody>
        <tr>
            <th class='sortable_column text-left-dark-only'>챔피언</th>
            <th class='sortable_column reverse_order current_sort_column text-left-dark-only reverse_order_by_default' width='100'>판수</th>
        </tr>
        <tr class=''>
            <td class='champColumn'>
                <div class='img-align-block'>
                    <div class='relative requireTooltip'>
                        <img src='../resources/img/champions/".$rows['mostPlayed1'].".png' alt='".$rows['mostPlayed1']."' height='48' width='48' class='champion-7-48' />
                    </div>
                    <div class='txt'>
                        <div class='name'>".$rows['mostPlayed1']."</div>
                    </div>
                </div>
            </td>

            <td data-sort-value='17'>
                <div class='progress-bar-container' style='width: 80px;'>
                    <div class='progressBarTxt'>".$rows['numOfPlayed1']."</div>
                </div>
            </td>
        </tr>
        <tr class=''>
            <td class='champColumn'>
                <div class='img-align-block'>
                    <div class='relative requireTooltip' tooltip='<itemname>Mastery Level 5</itemname><br/>Points: 132,397'>
                        <img src='../resources/img/champions/".$rows['mostPlayed2'].".png' alt='".$rows['mostPlayed2']."' height='48' width='48' class='champion-64-48' />
                    </div>
                    <div class='txt'>
                        <div class='name'>".$rows['mostPlayed2']."</div>
                    </div>
                </div>
            </td>
            <td data-sort-value='15'>
                <div class='progress-bar-container' style='width: 80px;'>
                    <div class='full-progress-bar wgblue' style='width: 53px;'></div>
                    <div class='progressBarTxt'>".$rows['numOfPlayed2']."</div>
                </div>
            </td>

        </tr>
        <tr class=''>
            <td class='champColumn'>
                <div class='img-align-block'>
                    <div class='relative requireTooltip'>
                        <img src='../resources/img/champions/".$rows['mostPlayed3'].".png' alt='".$rows['mostPlayed3']."' height='48' width='48' class='champion-76-48' />
                    </div>
                    <div class='txt'>
                        <div class='name'>".$rows['mostPlayed3']."</div>
                    </div>
                </div>
            </td>
            <td data-sort-value='13'>
                <div class='progress-bar-container' style='width: 80px;'>
                    <div class='full-progress-bar wgblue' style='width: 46px;'></div>
                    <div class='progressBarTxt'>".$rows['numOfPlayed3']."</div>
                </div>
            </td>

        </tr>
    </tbody>
</table>
<br>
<div class='box tags-box'>
    <div class='tag requireTooltip brown'>
        ".$season8."
    </div>
    <div class='tag requireTooltip brown'>
        ".$season9."
    </div>
</div>
</div>

            </div>
            
        </div>
    </div>
</div>
<div id='teacher_profile_nav_resume' class='ProfessionalExpCard teacherCard-box ProfessionalExpCard-desktop'>
    <div class='teacherCard-bar'>
        <h2 class='cardTitle'><span>업카운트</span></h2>
        <div class='experiences'>
            <div class='flex-col flex-1'>
                <div class='redbar-left'><span>소개</span></div>
                <div class='experiences-content'>
                    <div class='experiences-text'>
                        <div class='experiences-text-time'></div>
                        <div>업카운트는 국내 최고 리그오브레전드 게임 계정거래 사이트 입니다.</div>
                    </div>
                </div>
            </div>
            <div class='flex-col flex-1'>
                <div class='redbar-left'><span>믿음</span></div>
                <div class='experiences-content'>
                    <div class='experiences-text'>
                        <div>판매자의 계정정보는 라이엇게임즈 api와 연동이 되어 정확한 계정정보를 실시간으로 확인이 가능합니다.</div>
                    </div>
                </div>
            </div>
            <div class='flex-col flex-1'>
                <div class='redbar-left'><span>견적</span></div>
                <div class='experiences-content'>
                    <div class='experiences-text'>
                        <div>업카운트에서 본인의 소환사명을 통해 계정가격을 창출 하세요!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><div id='teacher_profile_nav_reviews' class='teacherCard-box reviews-box'>
        <div class='review-header'>
            <header class='reviews-header'><span>2 리뷰</span></header>
        </div>
        <div class='review-container'><a id='loginToCmt'><p class='login-warning'>로그인을 하고 리뷰를 남기세요!</p></a><div class='reviews-lists'>

        <div class='review-list-box' onmouseover='dropdownHover(0)'>
            <section class='review-flex'>
                <div class='avatar avatar-small review-avatar avatar-placeholder'><img src='../resources/img/profile-img/default-user3.png' alt='Avatar'></div>
                <section>
                    <div class='review-user-name'>위너파</div>
                </section>
            </section>
            <span class='score-section'>100 점</span>
            <div class='review-comment'>비싸네요</div> <form class='edit-container' action='../inc/review_edit.php' method='post'>
                <textarea class='edit-textarea' name='message' cols='90'></textarea>
                <div class='edit-btn-area'>
                    <input type='hidden' name='rid' value='95'>
                    <input type='hidden' name='uid' value='jin13'>
                    <input type='hidden' name='date' value='2020-06-23 12:41:33'>
                    <button class='edit-confirm' name='edit-click'>수정</button>
                    <button class='edit-cancel' onclick='cancel_edit(0)' type='button'>취소</button>
                </div>
            </form>


            <div class='review-user'>
                <section class='review-time'>2020-01-16 12:11:59</section>
            </div><a class='cmt-cmt-btn' onclick='cmt_cmt_drop(0)'>▼&nbsp;&nbsp;&nbsp;&nbsp;댓글 더 보기</a>
                </div></div><div class='cmt-cmt-container'>
        <div class='cmt-cmt-box'><section class='review-flex'>
                    <div class='avatar avatar-small review-avatar avatar-placeholder cmt-cmt-profile'><img src='../resources/img/profile-img/default-user7.png' alt='Avatar'></div>
                    <section style='display: inline'>
                        <span class='review-user-name cmt-cmt-username'>아담</span>
                    </section>
                </section>
                <div class='review_cmt_cmt'>얼마죠?</div>
                <div class='review-user cmt-cmt-time-container'>
                    <section class='review-time' style='bottom: 4px'>2020-04-29 03:01:08</section>
                </div></div>
        </div><div class='reviews-lists'>

        <div class='review-list-box' onmouseover='dropdownHover(1)'>
            <section class='review-flex'>
                <div class='avatar avatar-small review-avatar avatar-placeholder'><img src='../resources/img/profile-img/default-user6.png' alt='Avatar'></div>
                <section>
                    <div class='review-user-name'>마이파</div>
                </section>
            </section>
            <span class='score-section'>40 점</span>
            <div class='review-comment'>hi</div> <form class='edit-container' action='../inc/review_edit.php' method='post'>
                <textarea class='edit-textarea' name='message' cols='90'></textarea>
                <div class='edit-btn-area'>
                    <input type='hidden' name='rid' value='115'>
                    <input type='hidden' name='uid' value='tr5555'>
                    <input type='hidden' name='date' value='2020-06-23 12:41:33'>
                    <button class='edit-confirm' name='edit-click'>수정</button>
                    <button class='edit-cancel' onclick='cancel_edit(1)' type='button'>취소</button>
                </div>
            </form>


            <div class='review-user'>
                <section class='review-time'>2020-04-25 19:22:43</section>
            </div><a class='cmt-cmt-btn' style='display: none' onclick='cmt_cmt_drop(1)'>▼&nbsp;&nbsp;&nbsp;&nbsp;댓글 더 보기</a>
                </div></div><div class='cmt-cmt-container'>
        <div class='cmt-cmt-box'></div>
        </div></div>
</div>


</div>
<div class='teacher-right' style='left: auto; top: auto; bottom: auto;'>
    <div class='teacher-book'>
        <div class='bookCards'>
            <div class='bookCard-box'>
                <div class='bookCard'>
                    <div class='bookCard-left'>
                        <div class='bookCard-title'><span>가격</span></div><span class='tooltip-container-box' gap='5'><span class='tooltip-container' placement='bottom'><span class='tooltip-reference'></span></span>
                        </span>
                    </div>
                    <div class='bookCard-right'>
                        <div class='bookCard-priceNew'><span>".$rows['price']."</span></div>
                    </div>
                </div>
            </div>
            <div class='bookCard-hr'></div>
            <div class='bookCard-box'>
                <div class='bookCard'>
                    <div class='bookCard-left'>
                        <div class='bookCard-title'><span>거래방식</span></div><span class='tooltip-container-box' gap='5'><span class='tooltip-container' placement='bottom'></span>
                        </span>
                    </div>
                    <div class='bookCard-right'>
                        <div class='bookCard-priceNew'><span>계좌, 직거래</span></div>
                    </div>
                </div>
            </div>
            <div class='bookCard-hr'></div>
            <div class='bookCard-box'>
        <div class='bookCard'>
            <div class='bookCard-left'>
                <div class='bookCard-title'><span>연락처</span></div>
            </div>
            <div class='bookCard-right'>
                <div class='bookCard-priceNew'><span>010-5665-8165</span></div>
            </div>
            <div class='bookCard-price-from'><span>카톡거래 유도시 사기일 가능성이 높습니다</span></div>
            
        </div>
    </div>
            <div class='bookCard-hr'></div>
            <button onclick='directTo('#')' type='button' class='teacher-right-booknow btn btn-standard btn-main btn-gradient'><span>구매하기</span></button>
            <div class='teacher-contact'>
                <a href='../cs.php'><button type='button' class='btn btn-standard btn-ghost-default'>
                <div class='teacher-contact-btn-info'>
                    <svg width='24' height='24' viewBox='0 0 24 24' fill='none'>
                        <title></title>
                        <rect width='24' height='24' fill='white'></rect>
                        <path fill-rule='evenodd' clip-rule='evenodd' d='M18 3.11111H6C5.44772 3.11111 5 3.60857 5 4.22222V19.7778C5 20.3914 5.44772 20.8889 6 20.8889H18C18.5523 20.8889 19 20.3914 19 19.7778V4.22222C19 3.60857 18.5523 3.11111 18 3.11111ZM6 2C4.89543 2 4 2.99492 4 4.22222V19.7778C4 21.0051 4.89543 22 6 22H18C19.1046 22 20 21.0051 20 19.7778V4.22222C20 2.99492 19.1046 2 18 2H6Z' fill='#333333'></path>
                        <path fill-rule='evenodd' clip-rule='evenodd' d='M7 14.5C7 14.2239 7.22386 14 7.5 14H13.5C13.7761 14 14 14.2239 14 14.5C14 14.7761 13.7761 15 13.5 15H7.5C7.22386 15 7 14.7761 7 14.5ZM7 17.5C7 17.2239 7.22386 17 7.5 17H12.5C12.7761 17 13 17.2239 13 17.5C13 17.7761 12.7761 18 12.5 18H7.5C7.22386 18 7 17.7761 7 17.5Z' fill='#333333'></path>
                    </svg><span>리그오브레전드: 구매 팁</span></div>
            </button></a>
            </div>
        </div>
    </div>";
    include '../inc/post_footer.php';
    };
    

?>

