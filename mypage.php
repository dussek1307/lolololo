<?php
    include "./inc/head.php";

?>
<link rel="shortcut icon" href="./resources/img/fav_icon.png" />
<link href="./css/mypage.css" rel="stylesheet">
</head>
<body>
	<div id="root">
		<div class="italki">
			<div class="Header header-container Header-desktop" id="header_container">
				<div class="Header-banner header-content-holder">
					<a href="./">
						<img src="./resources/img/logo.png" alt="upccount" width="200px">
					</a>
					<div class="Header-button-wrap">
					<?php
						if(isset($_SESSION['user_id'])) {
							echo "<a href='./inc/logout.php'><div class='Header-button'><span>로그아웃</span></div></a>";
						} else {
							echo "<div class='Header-button' id='login_click'><span>로그인</span></div>
							<div class='Header-button' id='reg_click'><span>회원가입</span></div>";
						}
						
					?>
						<a href='./about.php'><div class="Header-button"><span>업카운트 소개</span></div></a>
						<a href="./cs.php"><div class="Header-button"><span>고객센터</span></div></a>
						<?php
						if(isset($_SESSION['user_id'])) 
						echo "<a href='./mypage.php'><div class='Header-avatar'>
                        <span class='ant-avatar ant-avatar-circle' style='width: 40px; height: 40px; line-height: 40px; font-size: 18px;'>
                        <img src='./resources/img/profile-img/".$_SESSION['profile_img']."'>
                        </span>
                        </div></a>";
                        
                        if(isset($_SESSION['user_id'])) {
                            $user_id = $_SESSION['user_id'];
                            $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "</div>
                                    </div>
                                </div>
                                <div class='flex-container'>
                                <div style='position: static; z-index: inherit;'>
                                    <div class='profile profile-desktop'>
                                        <div class='profilePanel-left'>
                                            <div class='profileCard profileCard-left'>
                                                <div class='profile-avatar-basicInfo'>
                                                    <div class='profile-avatar'>
                                                        <div class='avatar avatar-big avatar-shadow avatar-placeholder' url=''><img src='./resources/img/profile-img/".$_SESSION['profile_img']."'></div>
                                                    </div>
                                                    <div class='profile-basicInfo'>
                                                        <div class='profile-nickname'>".$row['user_online_name']."</div>
                                                        <div class='redbar'></div>
                                                        <div class='profile-otherInfo'><span></span><span></span><span>이메일: </span> <span>".$row['email']."</span></div>
                                                        <div class='profile-otherInfo'><span>휴대폰번호: </span> <span>".$row['tel']."</span>&nbsp;<span style='display: inline-block;'></span></div>
                                                        <div id='pwdChanBtn' class='profile-otherInfo'><button>비밀번호 변경</button></div>
                                                        <form action='./inc/pwd-change.php' method='post' id='openPwdChan' style='display: none;'>
                                                            <input class='chanPwd' type='password' name='curPwd' placeholder='현재 비밀번호'>
                                                            <input class='chanPwd' type='password' name='newPwd' placeholder='변경할 비밀번호'>
                                                            <input class='chanPwd' type='password' name='repeatPwd' placeholder='변경할 비밀번호 확인'>
                                                            <button name='change-submit' type='submit' id='changeBtn'>변경</button>
                                                        </form>";
                                                if($_SESSION['user_id'] == 1) {
                                                    echo "<div class='profile-otherInfo'><a href='./ctr-admin/admin.php'><button>유저목록</button></a></div>
                                                    <div class='profile-otherInfo'><a href='./ctr-admin/search-id.php'><button>판매글 수정</button></a></div>";
                                                }
                                                $numOfPosts = 0;

                                                $sql_post_count = "SELECT COUNT(*) AS count FROM posts WHERE user_id = '$user_id'";
                                                $result_post = mysqli_query($conn, $sql_post_count);
                                                while($rows = mysqli_fetch_assoc($result_post)) {
                                                    $numOfPosts = $rows['count'];
                                                }
                                                    echo  "</div>
                                                </div>
                                            </div>
                                            <div class='userCard-container-desktop'></div>
                                        </div>
                                        <div class='profilePanel-right'>
                                            <div class='profileCard profileCard-right'>
                                                <div class='profileCard-header'>
                                                    <h2><span>프로필</span></h2>
                                                </div>
                                                <div class='profile-introduction'></div>
                                                <div class='redbar'></div>
                                                <div class='profile-lan-wrap'>
                                                    <div class='profile-languages'>
                                                        <div class='teacherCard-teaches'><span class='teacherCard-teaches-title'><span>판매 글: ".$numOfPosts."개</span></span>
                                                            <div class='teacherCard-teaches-languages'>
                                                                <div>
                                                                    <div></div>
                                                                </div>
                                                                <div>
                                                                    <div></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                <div class='teacherCard-teaches'><span class='teacherCard-teaches-title'>
                                                <form action='./inc/user_profile.php' method='POST' enctype='multipart/form-data'>
                                                <span>프로필 이미지 변경: &nbsp;&nbsp;&nbsp;
                                                <input type='file' onchange='preview(event)' name='file'>
                                                <img id='img' src='./resources/img/profile-img/".$_SESSION['profile_img']."'>
                                                </span></span>
                                                    <div class='teacherCard-teaches-languages'><div><div><button name='btn' id='btn'>저장</button></div></div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class='profileCard profileCard-review'>
                                    <div class='profileCard-header'>
                                        <h2><span>판매 글</span></h2>
                                    </div>
                                    <div>
                                        <div class='profile-sessions-table-box'>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th><span>댓글수</span></th>
                                                    <th><span>조회수</span></th>
                                                    <th style='width: 50px'><span>찜</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>";

                                            if($numOfPosts > 0) {
                                                $sql_post = "SELECT * FROM posts WHERE user_id = '$user_id'";
                                                $result_post = mysqli_query($conn, $sql_post);
                                                while($rows = mysqli_fetch_assoc($result_post)) {
                                                    echo "<tr>
                                                        <td><a href='./account-page/".$rows['post_id'].".php'><span>".$rows['title']."</span></a></td>
                                                        <td style='text-align: cneter;'><span>2</span></td>
                                                        <td>50</td>
                                                        <td>1</td>
                                                    </tr>";
                                                }
                                            } else {
                                                echo "<tr>
                                                    <td style='border: none;'>

                                                        <div class='no-data-container'><span>기록 없음</span></div>

                                                    </td>
                                                </tr>";
                                            }
                                        
                                            echo "</tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                <div class='profileCard profileCard-review'>
                                    <div class='profileCard-header'>
                                        <h2><span>찜 목록</span></h2>
                                    </div>
                                    <div>
                                        <div class='profile-sessions-table-box'>
                                        <table>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th><span>개인랭크</span></th>
                                                <th><span>챔피언</span></th>
                                                <th><span>스킨</span></th>
                                            </tr>
                                        </thead>";
                                        $sql_liked = "SELECT post_id FROM post_liked WHERE user_id = '$user_id'";
                                        $result_liked = mysqli_query($conn, $sql_liked);
                                        if(mysqli_num_rows($result_liked) > 0) {
                                            while($row_liked = mysqli_fetch_assoc($result_liked)) {
                                                $post_id = $row_liked['post_id'];
    
                                                $sql_post_liked = "SELECT * FROM posts WHERE post_id = '$post_id'";
                                                $result_post_liked = mysqli_query($conn, $sql_post_liked);
                                                while($row_post_liked = mysqli_fetch_assoc($result_post_liked)) {
                                                    
                                                    switch($row_post_liked['soloRank']) {
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
                                                    echo "<tbody>
                                                    <tr>
                                                    <td><a href='https://localhost/public_html/account-page/".$post_id.".php'><span>롤 골드 스킨 86개 있는 계정 판매합니다. 계좌거래 가능</span></a></td>
                                                    <td>".$soloRank."</td>
                                                    <td>".$row_post_liked['numOfChams']."</td>
                                                    <td>".$row_post_liked['numOfSkins']."</td>
                                                </tr>";
                                                }
                                            }
                                        } else {
                                            echo "<tr>
                                                    <td style='border: none;'>

                                                        <div class='no-data-container'><span>기록 없음</span></div>

                                                    </td>
                                                </tr>";
                                        }

                                                
                                    echo "</tbody>
                                    </table>
                                    </div>
                                        
                                    </div>
                                </div>

                                <div class='profileCard profileCard-review'>
                                    <div class='profileCard-header'>
                                        <h2><span>내 댓글</span></h2>
                                    </div>
                                    <div>
                                        <div class='profile-sessions-table-box'>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th><span>내 댓글</span></th>
                                                    <th style='width: 50px'><span>답변</span></th>
                                                </tr>
                                            </thead>";

                                                echo "<tbody>
                                                    <tr>
                                                        <td><a href='./account-page/4.php'><span>롤 골드 스킨 86개 있는 계정 판매합니다. 계좌거래 가능</span></a></td>
                                                        <td style='text-align: cneter;'><span>4에 가능한가요?</span></td>
                                                        <td>1</td>
                                                    </tr>";
  
                                            // echo "<div class='reviews'>
                                            //         <div class='no-data-container'><span>기록 없음</span></div>
                                            //     </div>";
                                                
                                    echo "</tbody>
                                    </table>
                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>";
                            
                            }
                            
                        }
					?>
					</div>
                            </div>
                        </div>
    <footer class="Footer Footer-desktop Footer-prelogin">
	<div class="color-bar Footer-section-bar" style="height: 4px;">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
		
	<div class="Footer-part2">
		<div class="flex-row Footer-link-box">
			<ul>
				<li><a class="Footer-link" href="./"><span>메인</span></a>
				</li>
				<li><a class="Footer-link" href="./about.php"><span>보증금센터</span></a>
				</li>
				<li><a class="Footer-link" href="./cs.php"><span>고객센터</span></a>
				</li>
			</ul>
		</div>
		<div class="Footer-copyright-box">리그오브레전드 계정거래 © 2020 업카운트 KR Limited.</div>
	</div>
</footer>
</div>
</div>
<?php
if(isset($_GET['success'])) {
    if($_GET['success'] == "uploaded") {
        echo "<div id='alert-box' display='block'>
                <span class='ion-checkmark-round'></span>
                <h1>프로필 이미지를 업로드 했습니다! 적용까지 시간이 소요될 수 도있습니다.</h1>
                <a onclick='pop_alert()' class='close-alert'>닫기</a>
            </div>";
            header("Refresh:0");
    }
}
if(isset($_GET['pwdChan'])) {
    if($_GET['pwdChan'] == "success") {
        echo "<div id='alert-box' display='block'>
                <span class='ion-checkmark-round'></span>
                <h1>비밀번호가 변경되었습니다.</h1>
                <a onclick='pop_alert()' class='close-alert'>닫기</a>
                </div>";
    }
}

if(isset($_GET['error'])) {
    if($_GET['error'] == "novalue") {
        echo "<div id='alert-box' display='block'>
                <span class='ion-checkmark-round'></span>
                <h1>파일을 넣어주세요</h1>
                <a onclick='pop_alert()' class='close-alert'>닫기</a>
            </div>";
    }
        
        
    if($_GET['error'] == "wrongpwd") {
        echo "<div id='alert-box' display='block'>
                <span class='ion-checkmark-round'></span>
                <h1>현재 비밀번호를 확인해주세요!</h1>
                <a onclick='pop_alert()' class='close-alert'>닫기</a>
                </div>";
    }
    if($_GET['error'] == "pwdRepeat") {
        echo "<div id='alert-box' display='block'>
                <span class='ion-checkmark-round'></span>
                <h1>비밀번호 확인이 맞지 않습니다.</h1>
                <a onclick='pop_alert()' class='close-alert'>닫기</a>
                </div>";
    }
    if($_GET['error'] == "sqlerror") {
        echo "<div id='alert-box' display='block'>
                <span class='ion-checkmark-round'></span>
                <h1>서버에 오류가 있습니다.</h1>
                <a onclick='pop_alert()' class='close-alert'>닫기</a>
                </div>";
    }
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function preview(e) {
    var input = e.target.files[0];
    var reader = new FileReader();
    reader.onload = function() {
        var result = reader.result;
        var img = document.getElementById("img");
        img.src = result;
    }
    reader.readAsDataURL(input);
}
</script>
<script src='./js/forStatic.js'></script>
    </body>
    
</html>