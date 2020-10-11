<div class='teacher-schedule'>
            <div class='small-schedule'>
                <div class="banner-label"><span id='banner-text'>광고</span></div>
				<a href=''>
					<div class='flex-center ad-section'>
						<img src='' alt=''>
					</div>
				</a>
				<a href=''>
                <div class='flex-center ad-section'>
                    <img src='' alt=''>
                </div>
				</a>
				<a href=''>
                <div class='flex-center ad-section'>
                    <img src='' alt=''>
                </div>
				</a>
                <p class='small-schedule-timezone'><span>리그오브레전드 계정거래 | 업카운트</span>
                </p>
            </div>
        </div>
    </div>
    </div>
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
							<div class="TabBar-top-tabBox">
								<div class="TabBar-top-tag TabBar-top-tag-selected login-btn">로그인</div>
							</div>
							<div class="TabBar-top-tabBox">
								<div class="TabBar-top-tag register-btn">회원가입</div>
							</div>
							<div class="TabBar-top-tag-active" id="highlight-bar" style="width: 25.5px; left: 72.25px;"></div>
						</div>
					</div>
				</div>
				<div class="modal-close"><img src="../resources/img/cross-icon.svg" alt="close"></div>
			</div>
			<form id="modal-body-login" action="../inc/signin.php" method="post">
				<div  class="modal-body" style="max-height: 787px;">

				<?php
					if(isset($_GET['error'])) {
						if($_GET['error'] == "loginemptyfield") {
							echo "<div class='commonErrorMsg' id='errormessage'><span>모든 필드를 입력해주세요</span></div>";
						} elseif($_GET['error'] == "loginsqlerror") {
							echo "<div class='commonErrorMsg' id='errormessage'><span>서버에 문제가 발생했습니다! 다시 시도해 주세요!</span></div>";
						} elseif($_GET['error'] == "wrongpwd") {
							echo "<div class='commonErrorMsg' id='errormessage'><span>아이디 또는 비밀번호가 올바르지 않습니다</span></div>";
						} elseif($_GET['error'] == "nouser") {
							echo "<div class='commonErrorMsg' id='errormessage'><span>아이디 또는 비밀번호가 올바르지 않습니다</span></div>";
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

			<form id="modal-body-reg" action="../inc/signup.php" method="post" style="display: none">
				<div  class="modal-body" style="max-height: 787px;">
				<?php
					if(isset($_GET['error'])) {
						if($_GET['error'] == "emptyfield") {
							echo "<div class='commonErrorMsg' id='errormessage'><span>모든 항목을 채워주세요!</span></div>";
						} elseif($_GET['error'] == "sqlerror") {
							echo "<div class='commonErrorMsg' id='errormessage'><span>서버에 문제가 발생했습니다! 다시 시도해 주세요</span></div>";
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
						} elseif($_GET['error'] == "invalidtel") {
							echo "<div class='commonErrorMsg' id='errormessage'><span>비밀번호는 4자 이상으로 해주세요</span></div>";
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
				<li><a class="Footer-link" href="../"><span>메인</span></a>
				</li>
				<li><a class="Footer-link" href="../about.php"><span>견적내기</span></a>
				</li>
				<li><a class="Footer-link" href="../cs.php"><span>고객센터</span></a>
				</li>
			</ul>
		</div>
		<div class="Footer-copyright-box">리그오브레전드 계정거래 © 2020 업카운트 KR Limited.</div>
	</div>
</footer>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="../js/forPosts.js"></script>
</body>

</html>