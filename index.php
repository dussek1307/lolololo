<?php
	require "./inc/head.php";
?>
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
				echo "<li><a class='mobile_login_click'>로그인/회원가입</a></li>";
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
						<img class="logo-size" src="./resources/img/logo.png" alt="업카운트 로고" width="200px">
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
						echo "<a href='./mypage.php' style='padding: 10px'><div class='Header-avatar'>
						<span class='ant-avatar ant-avatar-circle' style='width: 40px; height: 40px; line-height: 40px; font-size: 18px;'>
						<img src='./resources/img/profile-img/".$_SESSION['profile_img']."'>
						</span>
						</div></a>";
						
					?>
					
					</div>
				</div>
			</div>
			<div class="flex-container">
				<div style="position: static; z-index: inherit;">
					<div class="teachers-list TeacherSearch">
						<div class="teachers-filter">
						<div class="filter-bar" style="top: 70px;">
								<div class="filter-section">
									<div class="tag-filter video_filter" id='tier_btn'>
										<span>랭크 등급</span>
									</div>
									<div class="filter-container" id='tier_click' style="width: 280px;">
										<div class="filter-body">
											<div>
												<div class="filter-from">
												<label class="filter-checkbox ant-checkbox-wrapper">
													<span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input tier" value="iron">
														<span class="ant-checkbox-inner"></span></span><span><span>아이언</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input tier" value="bronze">
														<span class="ant-checkbox-inner"></span></span><span><span>브론즈</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input tier" value="silver">
														<span class="ant-checkbox-inner"></span></span><span><span>실버</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input tier" value="gold">
														<span class="ant-checkbox-inner"></span></span><span><span>골드</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input tier" value="platinum">
														<span class="ant-checkbox-inner"></span></span><span><span>플래티넘</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input tier" value="diamond">
														<span class="ant-checkbox-inner"></span></span><span><span>다이아몬드</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input tier" value="master">
														<span class="ant-checkbox-inner"></span></span><span><span>마스터</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input tier" value="grandMaster">
														<span class="ant-checkbox-inner"></span></span><span><span>그랜드마스터</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input tier" value="challenger">
														<span class="ant-checkbox-inner"></span></span><span><span>챌린저</span></span>
													</label>
												</div>
												<div class="filter-footer">
													<button type="button" class="ant-btn filter-apply-btn ant-btn-secondary"><span>닫기</span></button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="filter-section">
									<div class="tag-filter" id='numOfChamps_btn'><span>챔피언</span></div>
									<div class="filter-container" id='numOfChamps_click' style="width: 280px;">
										<div class="filter-body">
											<div>
												<div class="filter-from">
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfChamps" value="10">
														<span class="ant-checkbox-inner"></span></span><span><span>10+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfChamps" value="30">
														<span class="ant-checkbox-inner"></span></span><span><span>30+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfChamps" value="50">
														<span class="ant-checkbox-inner"></span></span><span><span>50+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfChamps" value="70">
														<span class="ant-checkbox-inner"></span></span><span><span>70+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfChamps" value="90">
														<span class="ant-checkbox-inner"></span></span><span><span>90+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfChamps" value="130">
														<span class="ant-checkbox-inner"></span></span><span><span>130+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfChamps" value="100">
														<span class="ant-checkbox-inner"></span></span><span><span>All Champions</span></span>
													</label>
												</div>
												<div class="filter-footer">
													<button type="button" class="ant-btn filter-apply-btn ant-btn-secondary"><span>닫기</span></button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="filter-section">
									<div class="tag-filter" id='numOfSkins_btn'><span>챔피언 스킨</span></div>
									<div class="filter-container" id='numOfSkins' style="width: 280px;">
										<div class="filter-body">
											<div>
												<div class="filter-from">
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfSkins" value="10">
														<span class="ant-checkbox-inner"></span></span><span><span>10+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfSkins" value="20">
														<span class="ant-checkbox-inner"></span></span><span><span>20+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfSkins" value="40">
														<span class="ant-checkbox-inner"></span></span><span><span>40+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfSkins" value="60">
														<span class="ant-checkbox-inner"></span></span><span><span>60+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfSkins" value="80">
														<span class="ant-checkbox-inner"></span></span><span><span>80+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfSkins" value="100">
														<span class="ant-checkbox-inner"></span></span><span><span>100+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfSkins" value="150">
														<span class="ant-checkbox-inner"></span></span><span><span>150+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input numOfSkins" value="200">
														<span class="ant-checkbox-inner"></span></span><span><span>200+</span></span>
													</label>
												</div>
												<div class="filter-footer">
													<button type="button" class="ant-btn filter-apply-btn ant-btn-secondary"><span>닫기</span></button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="filter-section">
									<div class="tag-filter" id='BlueEssence_btn'><span>파랑정수</span></div>
									<div class="filter-container" id='blueEssence_click' style="width: 280px;">
										<div class="filter-body">
											<div>
												<div class="filter-from">
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input blueEssence" value="5000">
														<span class="ant-checkbox-inner"></span></span><span><span>5,000+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input blueEssence" value="10000">
														<span class="ant-checkbox-inner"></span></span><span><span>10,000+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input blueEssence" value="50000">
														<span class="ant-checkbox-inner"></span></span><span><span>50,000+</span></span>
													</label>
													<label class="filter-checkbox ant-checkbox-wrapper"><span class="ant-checkbox">
														<input type="checkbox" class="ant-checkbox-input blueEssence" value="100000">
														<span class="ant-checkbox-inner"></span></span><span><span>100,000+</span></span>
													</label>
												</div>
												<div class="filter-footer">
													<button type="button" class="ant-btn filter-apply-btn ant-btn-secondary"><span>닫기</span></button>
												</div>
											</div>
										</div>
									</div>
								</div>


								<div class="search-teacher-input">
									<div id="search_teachers_btn" class="search-teachers-input-icon">
									<button style="border:none; outline: none; background-color: transparent" name='submit'>
										<img class='search-icon'src="./resources/img/search-logo.svg" width="24" height="24" alt="search icon">
									</button>
									</div>
									<input id="search_teachers_skills" type="text" placeholder="EX) 그랜드마스터" name="content">
								</div>

							</div>
						</div>
						<div class="teachers" id='result'>
						<br>
							<?php

								if(isset($_GET['signup'])) {
									if($_GET['signup'] == "success") {
										echo "<div id='alert-box' display='block'>
												<span class='ion-checkmark-round'></span>
												<h1>회원가입 성공!</h1>
												<a onclick='pop_alert()' class='close-alert'>닫기</a>
											  </div>";
										echo "<script type='text/javascript'>
											let cururl = window.location.href;
											const alert_box = document.querySelector('#alert-box');
											const html = document.querySelector('html');
											html.style='overflow: hidden;';
											function pop_alert() {
												alert_box.style = 'display: none';
												let splitedUrl = cururl.split('?');
												location.replace(splitedUrl[0]);
												document.querySelector(body).style='overflow: auto';
												html.style='overflow: auto';
											}
										</script>";
									}
								}
							?>
						</div>
						<div class="teachers-bottom" id='load_data_message'></div>
					</div>
				</div>
			</div>
			
			
			<!-- LOGIN -->
			<div id="modal-container" style="display: none;">
				<div class="modal-overlay"></div>
				<div class="modal">
					<div class="Login Login-desktop modal-container modal-center">
						<div class="modal-head">
							<div class="modal-head-title">
								<div class="TabBar">
									<div class="TabBar-top">
										<div class="TabBar-top-tabBox login-btn">
											<div class="TabBar-top-tag TabBar-top-tag-selected">로그인</div>
										</div>
										<div class="TabBar-top-tabBox register-btn">
											<div class="TabBar-top-tag">회원가입</div>
										</div>
										<div class="TabBar-top-tag-active" id="highlight-bar" style="width: 25.5px; left: 72.25px;"></div>
									</div>
								</div>
							</div>
							<div class="modal-close"><img src="./resources/img/cross-icon.svg" alt="close"></div>
						</div>
						<form id="modal-body-login" action="./inc/signin.php" method="post">
							<div  class="modal-body" style="max-height: 787px;">
							<?php
									if(isset($_GET['error'])) {
										if($_GET['error'] == "loginemptyfield") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>모든 필드를 입력해주세요</span></div>";
										} elseif($_GET['error'] == "wrongpwd") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>아이디 또는 비밀번호가 올바르지 않습니다</span></div>";
										} elseif($_GET['error'] == "nouser") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>아이디 또는 비밀번호가 올바르지 않습니다</span></div>";
										} elseif($_GET['error'] == "loginsqlerror") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>서버에 문제가 발생했습니다! 다시 시도해 주세요!</span></div>";
										}
										
									}
									
									
							?> 
								<div class="text-box">
									<div class="Login-text-wrap">
										<input type="text" class="text-common undefined Login-text" placeholder="아이디" name="username_id" dec="0">
									</div>
								</div>
								<div class="text-box">
									<div class="Login-text-wrap">
										<input type="password" class="text-common undefined Login-text Login-text-password" placeholder="비밀번호" name="password" dec="0">
									</div>
								</div>
								<div class="forgot">
									<div>
										<label class="i-checkbox-wrapper darken"><span class="i-checkbox"><input type="checkbox" class="i-checkbox-input" value=""><span class="i-checkbox-inner"></span></span></label>
										<span>아이디 기억</span>
									</div>
									<span class="italki-text-blue forgot-password" id="forgot-password-link"><span>비밀번호 찾기</span></span>
								</div>

								<button name="login-submit" type="submit" class="Login-button btn btn-big btn-main btn-gradient"><span>로그인</span></button>
								<div class="or"><span>업카운트</span></div>
							</div>
						</form>

						<form id="modal-body-reg" action="./inc/signup.php" method="post" style="display: none">
							<div  class="modal-body" style="max-height: 787px;">
								<?php
									if(isset($_GET['error'])) {
										if($_GET['error'] == "emptyfield") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>모든 항목을 채워주세요!</span></div>";
										} elseif($_GET['error'] == "invalidmailuid") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>이메일과 아이디를 정확히 입력해주세요!</span></div>";
										} elseif($_GET['error'] == "invalidmail") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>이메일을 정확히 입력해주세요!</span></div>";
										} elseif($_GET['error'] == "invaliduid") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>아이디를 정확히 입력해주세요!</span></div>";
										} elseif($_GET['error'] == "pwdcheck") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>비밀번호가 동일하지 않습니다!</span></div>";
										} elseif($_GET['error'] == "usertaken") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>사용할 수 없는 아이디 입니다</span></div>";
										} elseif($_GET['error'] == "onlinenametaken") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>사용할 수 없는 닉네임입니다</span></div>";
										} elseif($_GET['error'] == "emailtaken") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>사용할 수 없는 이메일 입니다</span></div>";
										} elseif($_GET['error'] == "teltaken") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>사용할 수 없는 휴대폰번호 입니다</span></div>";
										} elseif($_GET['error'] == "invalidtel") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>사용할 수 없는 휴대폰번호 입니다</span></div>";
										} elseif($_GET['error'] == "shortid") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>아이디가 짧습니다</span></div>";
										} elseif($_GET['error'] == "shortpwd") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>비밀번호는 4자 이상으로 해주세요</span></div>";
										} elseif($_GET['error'] == "sqlerror") {
											echo "<div class='commonErrorMsg' id='errormessage'><span>서버에 오류가있습니다. 다시 시도해주세요.</span></div>";
										}
										
									}
									
									
								?>


								<div class="text-box">
									<div class="Login-text-wrap">
										<input type="text" class="text-common undefined Login-text Login-text-password" placeholder="이름" name="name_reg" dec="0">
									</div>
									<div class="Login-text-wrap">
										<input type="text" class="text-common undefined Login-text Login-text-password" placeholder="닉네임" name="online_name_reg" dec="0">
									</div>
								</div>
								<div class="text-box">
									<div class="Login-text-wrap">
										<input type="text" class="text-common undefined Login-text Login-text-password" placeholder="이메일" name="email_reg" dec="0">
									</div>
								</div>
								<div class="text-box">
									<div class="Login-text-wrap">
										<input type="text" class="text-common undefined Login-text" placeholder="아이디" name="uid_reg" dec="0">
									</div>
								</div>
								<div class="text-box">
									<div class="Login-text-wrap">
										<input type="password" class="text-common undefined Login-text Login-text-password" placeholder="비밀번호" name="pwd_reg" dec="0">
									</div>
								</div>
								<div class="text-box">
									<div class="Login-text-wrap">
										<input type="password" class="text-common undefined Login-text Login-text-password" placeholder="비밀번호 재입력" name="pwd_reg_rep" dec="0">
									</div>
								</div>
								<div class="text-box">
									<div class="Login-text-wrap">
										<input type="text" class="text-common undefined Login-text Login-text-password" placeholder="휴대폰번호 ex) 01012345678" name="tel_reg" dec="0">
									</div>
								</div>
								
								
								<button id="register" name="signup-submit" type="submit" class="Login-button btn btn-big btn-main btn-gradient"><span>회원가입</span></button>
								<div class="or"><span>업카운트</span></div>

							</div>
						</form>
						
						<div class="modal-footer" id="modal-footer-login">
							<div class="sign-type-hint"><span>계정이 없으신가요?</span></div>
							<div class="changeTypeText italki-text-blue register-btn-bottom"><span>회원가입</span></div>
						</div>
						<div class="modal-footer" id="modal-footer-reg" style="display: none">
							<div class="sign-type-hint"><span>계정이 있으신가요?</span></div>
							<div class="changeTypeText italki-text-blue login-btn-bottom"><span>로그인</span></div>
						</div>
					</div>
				</div>
			</div>

<?php
	require "./inc/footer.php";
?>