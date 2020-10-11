<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="ko" kp-country="kr">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta http-equiv='X-UA-Compatible' content='IE=Edge'>
    <title>업카운트 소개 | 롤 계정거래</title>   
    <meta name="description" content="리그오브레전드 계정거래 사이트. 롤 계정 구매 판매, 롤 닉네임 거래, 롤 아이디 거래 | 게임 계정거래 사이트 업카운트"/>
	<meta name="keywords" content="업카운트, 롤 계정, 롤 아이디, 롤 닉네임, 리그오브레전드 계정, 롤 대리, 리그오브레전드 판매, 롤 계정 판매 구매, 롤 다이아, 롤 마스터, 롤 챌린저">
	<meta name="theme-color" content="#000000">
	<meta name='title' content='업카운트 소개 | 롤 계정거래'>
	<meta name='subject' content='업카운트'>
	<meta name='publisher' content='업카운트'>
	<meta name='author' content='업카운트'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='canonical' href='https://upccount.com/about.php'>
	<link rel="shortcut icon" href="./resources/img/fav_icon.png" />
    <link href="./css/style3.css" rel="stylesheet">
    <link href="./css/about1.css" rel="stylesheet">
    <link href="./css/about2.css" rel="stylesheet">

    <meta property='og:title' content='업카운트 소개 | 롤 계정거래'>
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
    <div style="position: static; z-index: inherit;">
        <div class="about-desktop about">
            <div class="about-content-desktop">
                <div class="about-section-box about-italki"><img class="italki-head-desc-img" src="./resources/img/about/upccount-img.jpg" alt="whoweare">
                    <div class="introduction-wrap">
                        <h4 class="about-title"><span>업카운트</span></h4>
                        <p class="about-description-text"><span>업카운트는 리그오브레전드 계정거래 사이트로 판매자와 계정정보를 올리고 구매자가 직접적으로 판매자와 는데 역할을 합니다. 계정구매시 우려되는 사항을 최대한 없애려고 항상 노력하는 업카운트 입니다. 감사합니다.</span></p>
                    </div>
                </div>
                <div class="about-section-box about-news">
                    <h3 class="about-title text-center" style='margin-bottom: 40px'><span>차별화된 계정 거래</span></h3>
                    <div class="about-news-section">
                        <div class="news-block-wrap text-center">
                            <div class="news-img-box"><img alt="The Economist" class="news-logo-img" src="./resources/img/about/img1.png"></div>
                            <p class="about-description-text">판매자가 본인 계정을 업카운트에 등록해 계정을 손쉽게 판매할 수 있습니다.</p>
                        </div>
                        <div class="news-block-wrap text-center">
                            <div class="news-img-box"><img alt="BBC logo" class="news-logo-img" src="./resources/img/about/img2.png"></div>
                            <p class="about-description-text">많은 계정이 등록된 업카운트에서 사이트를 둘러보세요</p>
                        </div>
                        <div class="news-block-wrap text-center">
                            <div class="news-img-box"><img alt="Business Insider logo" class="news-logo-img" src="./resources/img/about/img3.png"></div>
                            <p class="about-description-text">필터를 통해 내 조건에 맞는 계정을 찾으세요!</p>
                        </div>
                        <div class="news-block-wrap text-center">
                            <div class="news-img-box"><img alt="GettingSmart logo" class="news-logo-img" src="./resources/img/about/img4.png"></div>
                            <p class="about-description-text">업카운트에서 내계정의 가격을 안내 받아보세요.</p>
                        </div>
                        <div class="news-block-wrap text-center">
                            <div class="news-img-box"><img alt="The Guardian logo" class="news-logo-img" src="./resources/img/about/img5.png"></div>
                            <p class="about-description-text">업카운트는 수수료를 일체 받지않고 구매자와 판매자를 연결 시켜드립니다.</p>
                        </div>
                        <div class="news-block-wrap text-center">
                            <div class="news-img-box"><img alt="The Huffington Post" class="news-logo-img" src="./resources/img/about/img6.png"></div>
                            <p class="about-description-text">리그오브레전드에 관련에 업체를 운영하시나요? 저희랑 파트너 업체를 맺어보세요.</p>
                        </div>
                    </div>
                    <div class="about-more">
                        <a href="./cs.php">
                            <button type="button" class="btn btn-big btn-ghost-default"><span>업카운트 고객센터</span></button>
                        </a>
                    </div>
                </div>
                <div class="about-section-box about-outreach">
                    <div class="outreach-section">
                        <div class="outreach-desc-wrap">
                            <h4 class="about-title about-outreach-title"><span>계정거래 팁</span></h4>
                            <h4 class="outreach-section-title">1. 카톡거래</h4>
                            <p class="about-description-text">알고계셨나요? <strong>카톡거래</strong>를 유도하는 판매자는 사기꾼일 가능성이 높습니다. 어쩔 수 없이 카톡거래를 한다해도 판매자의 휴대폰번호를 받아 두시는걸 권장드립니다.</p>
                        </div>
                    </div>
                    <div class="outreach-section">
                        <div class="outreach-desc-wrap">
                            <h4 class="outreach-section-title">2. 거래방식</h4>
                            <p class="about-description-text">문상거래 혹은 다른 현금이 아닌 상품권으로 거래를유도시 사기꾼일 가능성이 높습니다. 거래는항상 직거래를 하신다하셔도 계좌로 이체를 해야 기록이 정확하게 남습니다.</p>
                    </div>
                    <div class="outreach-section">
                        <div class="outreach-desc-wrap">
                            <h4 class="outreach-section-title">3. 계정</h4>
                            <p class="about-description-text">판매자가 본인 계정이 아닌 다른소유자의 계정을 내새워 구매자를 유혹할수도 있습니다. 이점에 유의해 거래해주시길 바랍니다. 판매자의 소유가 인증되었어도 판매자 이름으로 등록된 계정인지 확인부탁드립니다.</p>
                    </div>
                </div>
            </div>
            <div class="about-section-box about-slider" style='margin-bottom: 100px;'>
                <div class="slick-slider slick-initialized" dir="ltr">
                    <div class="slick-list">
                        <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 1100px;">
                            <div style="text-align: center">
                                <div class="slider-section-wrap" tabindex="-1" style="width: 100%; display: inline-block;">
                                    <div class="text-center">
                                        <h4 class="about-title"><span style='font-size: 18px;'>이제 <a target="_blank" href="./">메인페이지</a> 를 방문해 나만을 위한 계정을 찾아보세요.</span></h4>
                                    </div>
                                </div>
                                <video width="415" height="240" controls>
                                <source src="./resources/video/upccount_intro.mp4" type="video/mp4">
                                <source src="./resources/video/upccount_intro.mp4" type="video/ogg">
                                </video>
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
			</ul>
		</div>
		<div class="Footer-copyright-box">리그오브레전드 계정거래 © 2020 업카운트 KR Limited.</div>
	</div>
</footer>
</div>
</div>
<script src='./js/forStatic.js'></script>
    </body>
    
</html>