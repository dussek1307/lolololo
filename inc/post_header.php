<!DOCTYPE html>
	<html lang='ko' kp-country='kr' class='windows desktop landscape'>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/style1.css">
	<link rel="stylesheet" href="../css/style2.css">
	<link rel="stylesheet" href="../css/account_page1.css">
	<link rel="stylesheet" href="../css/account_page2.css">

<?php
	include_once '../inc/dbh.php';
	session_start();
	date_default_timezone_set('Asia/Seoul');
	$uri = $_SERVER['REQUEST_URI'];
	$post_id = basename($_SERVER['SCRIPT_FILENAME'], ".php");
	$sql_post = "SELECT title, intro, user_id FROM posts WHERE post_id = $post_id;";
	$result_post = mysqli_query($conn, $sql_post);
	while($row = mysqli_fetch_assoc($result_post)) {
		$getUser = "SELECT user_online_name FROM users WHERE user_id = ".$row['user_id']."";
		$result_user = mysqli_query($conn, $getUser);
		$userOnlineName = "";

		# GETTING USER NAME
		while($row_name = mysqli_fetch_assoc($result_user)) {
			$userOnlineName = $row_name['user_online_name'];
		}

    echo "
		<title>".$row['title']."</title>
		<meta http-equiv='X-UA-Compatible' content='IE=Edge'>
		<meta name='title' content='".$row['title']."'>
		<meta name='subject' content='".$row['title']."'>
		<meta name='publisher' content='업카운트 - 롤 계정거래'>
		<meta name='author' content='".$userOnlineName."'>
		<meta name='description' content='".$row['intro']."'/>
		<meta name='keywords' content='업카운트, 롤 계정, 롤 아이디, 롤 닉네임, 아이디판매 사이트, 계정 판매, 계정 거래, 리그오브레전드 계정, 롤 대리, 리그오브레전드 판매, 롤 계정 판매 구매, 롤 다이아, 롤 마스터, 롤 챌린저'>
		<meta name='theme-color' content='#000000'>
		<link rel='shortcut icon' href='../resources/img/fav_icon.png' />
		
		<meta property='og:title' content='".$row['title']."'>
		<meta property='og:site_name' content='업카운트 - 롤 계정거래'>
		<meta property='og:author' content='".$userOnlineName."'>
		<meta property='og:type' content='article'>
		<meta property='og:image' content='../resources/img/post-main/main-".$post_id.".jpg'>
		<meta property='og:description' content='".$row['title']."'>
		<meta property='og:url' content='https://upccount.com".$uri."'>
		<link rel='image_src' href='../resources/img/post-main/main-".$post_id.".jpg'>
		<link rel='canonical' href='https://upccount.com".$uri."'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	</head>
		<body>
		<!-- mobile-menu -->
		<nav class='nav-list'>
			<ul class='nav-links' style='padding-left: 0px;'>";
			if(isset($_SESSION['user_id'])) {
				echo "<li><a href='../inc/logout.php'>로그아웃</a></li>";
				echo "<li><a href='../mypage.php'>마이페이지</a></li>";
			} else {
				echo "<li><a class='mobile_login_click'>로그인/회원가입</a></li>";
			}
			echo "<li><a href='../about.php'>보증금센터</a></li>
				<li><a href='../cs.php'>고객센터</a></li>
			</ul>
		</nav>
			<div id='root'>
				<div class='italki'>
					<div class='Header header-container Header-desktop' id='header_container'>
						<div class='Header-banner'>
							<a href='../'>
								<img src='../resources/img/logo.png' alt='upccount' width='200px' alt='업카운트 로고'>
							</a>
							<!-- nav -->
							<div class='mobile-wrap'>
								<div class='hamburger'>
									<div class='line'></div>
									<div class='line'></div>
									<div class='line'></div>
								</div>
							</div>
							<!-- nav -->
							<div class='Header-button-wrap'>";
							if(isset($_SESSION['user_id'])) {
								echo "<a href='../inc/logout.php'><div class='Header-button'><span>로그아웃</span></div></a>";
							} else {
								echo "<div class='Header-button' id='login_click'><span>로그인</span></div>
									<div class='Header-button' id='reg_click'><span>회원가입</span></div>";
							}
							
							echo "<a href='../about.php'><div class='Header-button'><span>업카운트 소개</span></div></a>
							<a href='../cs.php'><div class='Header-button'><span>고객센터</span></div></a>";
								if(isset($_SESSION['user_id'])) 
								echo "<a href='../mypage.php' style='padding: 10px'><div class='Header-avatar'>
								<span class='ant-avatar ant-avatar-circle' style='width: 40px; height: 40px; line-height: 40px; font-size: 18px;'>
								<img src='../resources/img/profile-img/".$_SESSION['profile_img']."'>
								</span>
								</div></a>";
						echo "</div>
						</div>
					</div>";
	}
	if(isset($_GET['signup'])) {
		if($_GET['signup'] == "success") {
			echo "<div id='alert-box' display='block'>
					<span class='ion-checkmark-round'></span>
					<h1>회원가입 성공!</h1>
					<a onclick='pop_alert()' class='close-alert'>닫기</a>
				  </div>";
		}
	}
	if(isset($_GET['delete'])) {
		if($_GET['delete'] == "success") {
			echo "<div id='alert-box' display='block'>
					<span class='ion-checkmark-round'></span>
					<h1>댓글이 삭제 되었습니다!</h1>
					<a onclick='pop_alert()' class='close-alert'>닫기</a>
				  </div>";
		}
	}
	if(isset($_GET['report'])) {
		if($_GET['report'] == "success") {
			echo "<div id='alert-box' display='block'>
					<span class='ion-checkmark-round'></span>
					<h1>댓글 신고가 완료됬습니다.</h1>
					<a onclick='pop_alert()' class='close-alert'>닫기</a>
				  </div>";
		}
	}
	if(isset($_GET['error'])) {
		if($_GET['error'] == "login") {
			echo "<div id='alert-box' display='block'>
					<span class='ion-checkmark-round'></span>
					<h1>로그인 해주세요</h1>
					<a onclick='pop_alert()' class='close-alert'>닫기</a>
				  </div>";
		}
	}
	
?>
