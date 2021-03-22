<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="ko" kp-country="kr" class="windows desktop landscape">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VC2FVK808K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VC2FVK808K');
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>업카운트 고객센터 | 롤 계정거래</title>
    <meta name="description" content="리그오브레전드 계정거래 사이트. 롤 계정 구매 판매, 롤 닉네임 거래, 롤 아이디 거래 | 게임 계정거래 사이트 업카운트"/>
	<meta name="keywords" content="업카운트, 롤 계정, 롤 아이디, 롤 닉네임, 리그오브레전드 계정, 롤 대리, 리그오브레전드 판매, 롤 계정 판매 구매, 롤 다이아, 롤 마스터, 롤 챌린저">
	<meta name="theme-color" content="#000000">
    <meta name='title' content='업카운트 고객센터 | 롤 계정거래'>

	<meta name='subject' content='업카운트'>
	<meta name='publisher' content='업카운트'>
	<meta name='author' content='업카운트'>
    <link rel='canonical' href='https://upccount.com/cs.php'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./resources/img/fav_icon.png" />
	<link href="./css/style1.css" rel="stylesheet">
    <link href="./css/style2.css" rel="stylesheet">
    <link href="./css/style3.css" rel="stylesheet">
    <link href="./css/cs1.css" rel="stylesheet">

    <meta property='og:title' content='업카운트 고객센터 | 롤 계정거래'>
	<meta property='og:site_name' content='업카운트'>
	<meta property='og:image' content='../resources/img/logo.png'>
	<meta property='og:description' content='리그오브레전드 계정거래 사이트. 롤 계정 구매 판매, 롤 닉네임 거래, 롤 아이디 거래 | 게임 계정거래 사이트 업카운트'>
</head>
<body>
    <!-- mobile-menu -->
	<nav class="nav-list">
        <ul class="nav-links" style="padding-left: 0px;">
        <?php
            if(isset($_SESSION['user_id'])) {
                echo "<li><a href='./inc/logout.php'>로그아웃</a></li>";
                echo "<li><a href='./mypage.php'>마이페이지</a></li>";
			} else {
				echo "<li><a href='./'>로그인/회원가입</a></li>";
			}
        ?>
			<li><a href="./about.php">업카운트 소개</a></li>
			<li><a href="./cs.php">고객센터</a></li>
		</ul>
	</nav>
	<div id="root">
		<div class="italki">
			<div class="Header header-container Header-desktop" id="header_container">
				<div class="Header-banner header-content-holder">
					<a href="./">
						<img class="logo-size" src="./resources/img/logo.png" alt="upccount" width="200px">
                    </a>
                    <!-- nav -->
					<div class="mobile-wrap">
						<div class="hamburger">
							<div class="line"></div>
							<div class="line"></div>
							<div class="line"></div>
						</div>
					</div>
					<!-- nav -->
					<div class="Header-button-wrap">
						<a href='./about.php'><div class="Header-button"><span>업카운트 소개</span></div></a>
						<a href="./cs.php"><div class="Header-button"><span>고객센터</span></div></a>

                    </div>
                </div>
            </div>
            <div class="flex-container">
                        <div class="MainReferral desktop">
    <div class="MainReferral-header">
        <h2 class="MainReferral-title"><span>고객센터</span></h2>
        <h6 class="MainReferral-header-sub-title"><span>고객센터와 광고문의는 이메일을 통해 운영됩니다.<br>고객센터는 평일 09:00 ~ 24:00 운영됩니다.</span></h6>
    </div>
    <div class="MainReferral-actions">
        <div class='sns-section'>
            <button type="button" class="MainReferral-action-btn btn btn-standard btn-default"><img src="./resources/img/mail.svg" height="24" alt="gmail"><span style='text-transform: lowercase;'>ttrrsdd1688@gmail.com</span></button>
            <button type="button" class="MainReferral-action-btn btn btn-standard btn-default"><img src="./resources/img/kakao.svg" height="24" alt="messenger"><span style='color: black; text-transform: lowercase;'>준비중</span></button>
        </div>  
    </div>
    <div class="MainReferral-how-does-it-work">
        <h3 class="MainReferral-section-title"><span>계정판매 방식</span></h3>
        <div class="pictures-box" style='display: flex; justify-content: space-between'>
            <div><img src="./resources/img/cs-step1.svg" width="120" alt="step1"></div>
            <div><img src="./resources/img/cs-step2.svg" width="120" alt="step2"></div>
            <div><img src="./resources/img/cs-step3.svg" width="120" alt="step3"></div>
        </div>
        <div class="desc-content" style='display: flex; justify-content: space-between'>
            <h4><span>자신의 계정을 등록 판매 페이지를 만드세요.</span></h4>
            <h4><span>자신의 계정정보를 정확하게 입력해주세요.</span></h4>
            <h4><span>업카운트를 통해서 계정을 팔아 수익을 버세요!</span></h4>
        </div>
    </div>
    <div class="MainReferral-terms">
        <h3 class="MainReferral-section-title"><span>업카운트</span></h3>
        <div class="MainReferral-terms-lists">
            <div class="MainReferral-terms-list-box">
                <h5 class="MainReferral-terms-sub-title"><span>소개</span></h5>
                <p class="MainReferral-terms-content"><span>업카운트는 국내 최고 리그오브레전드 게임 계정거래 사이트 입니다.</span></p>
            </div>
            <div class="MainReferral-terms-list-box">
                <h5 class="MainReferral-terms-sub-title"><span>신뢰</span></h5>
                <p class="MainReferral-terms-content"><span>판매자의 계정정보는 라이엇게임즈 api와 연동이 되어 정확한 계정정보를 실시간으로 확인이 가능합니다.</span></p>
            </div>
            <div class="MainReferral-terms-list-box">
                <h5 class="MainReferral-terms-sub-title"><span>견적</span></h5>
                <p class="MainReferral-terms-content"><span>업카운트에서 본인의 소환사명을 통해 계정가격을 창출 하세요!</span></p>
            </div>
        </div>
    </div>
</div>

                       
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
				<li><a class="Footer-link" href="./about.php"><span>업카운트</span></a>
				</li>
				<li><a class="Footer-link" href="./cs.php"><span>고객센터</span></a>
				</li>
		</div>
		<div class="Footer-copyright-box">리그오브레전드 계정거래 © 2020 업카운트 KR Limited.</div>
	</div>
</footer>
</div>
</div>
</div>
<script src='./js/forStatic.js'></script>
</body>
    
</html>