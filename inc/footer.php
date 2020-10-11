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
				<li><a class="Footer-link" href="./about.php"><span>견적내기</span></a>
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
	<div class='loader-wrapper'>
		<span class="loader"><span class="loader-inner"></span></span>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="./js/index.js"></script>
	<script type='text/javascript'>
		$(document).ready(function() {

			function isIE() {
				ua = navigator.userAgent;
				var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
				return is_ie; 
			}

			if (isIE()) alert('인터넷 익스플로러로 확인됩니다. 업카운트는 크롬브라우저만 지원합니다.');

			$(".ant-btn").click(function() {
				$(".filter-container").hide();
			})

			$('.tier').click(function() {
				if($(this).parent().parent().hasClass("ant-checkbox-wrapper")) {
					$(this).parent().parent().parent().children().removeClass("ant-checkbox-checked");
					$(this).parent().parent().parent().children().addClass("ant-checkbox-wrapper");
					$(this).parent().parent().removeClass("ant-checkbox-wrapper");
					$(this).parent().parent().addClass("ant-checkbox-checked");
					$("#tier_btn").addClass("filtered-section");
					$(".tier").prop("checked", false);
					$(this).prop("checked", true);
				} else {
					$(this).parent().parent().addClass("ant-checkbox-wrapper");
					$(this).parent().parent().removeClass("ant-checkbox-checked");
					$("#tier_btn").removeClass("filtered-section");
					$(this).prop("checked", false);
				}
				if($(this).prop("checked") == false) location.reload();
			})
			
			$('.numOfChamps').click(function() {
				if($(this).parent().parent().hasClass("ant-checkbox-wrapper")) {
					$(this).parent().parent().parent().children().removeClass("ant-checkbox-checked");
					$(this).parent().parent().parent().children().addClass("ant-checkbox-wrapper");
					$(this).parent().parent().removeClass("ant-checkbox-wrapper");
					$(this).parent().parent().addClass("ant-checkbox-checked");
					$("#numOfChamps_btn").addClass("filtered-section");
					$(".numOfChamps").prop("checked", false);
					$(this).prop("checked", true);
				} else {
					$(this).parent().parent().addClass("ant-checkbox-wrapper");
					$(this).parent().parent().removeClass("ant-checkbox-checked");
					$("#numOfChamps_btn").removeClass("filtered-section");
					$(this).prop("checked", false);
				}
				if($(this).prop("checked") == false) location.reload();
				
					
			})

			$('.numOfSkins').click(function() {
				if($(this).parent().parent().hasClass("ant-checkbox-wrapper")) {
					$(this).parent().parent().parent().children().removeClass("ant-checkbox-checked");
					$(this).parent().parent().parent().children().addClass("ant-checkbox-wrapper");
					$(this).parent().parent().removeClass("ant-checkbox-wrapper");
					$(this).parent().parent().addClass("ant-checkbox-checked");
					$("#numOfSkins_btn").addClass("filtered-section");
					$(".numOfSkins").prop("checked", false);
					$(this).prop("checked", true);
				} else {
					$(this).parent().parent().addClass("ant-checkbox-wrapper");
					$(this).parent().parent().removeClass("ant-checkbox-checked");
					$("#numOfSkins_btn").removeClass("filtered-section");
					$(this).prop("checked", false);
				}
				if($(this).prop("checked") == false) location.reload();
			})

			$('.blueEssence').click(function() {
				if($(this).parent().parent().hasClass("ant-checkbox-wrapper")) {
					$(this).parent().parent().parent().children().removeClass("ant-checkbox-checked");
					$(this).parent().parent().parent().children().addClass("ant-checkbox-wrapper");
					$(this).parent().parent().removeClass("ant-checkbox-wrapper");
					$(this).parent().parent().addClass("ant-checkbox-checked");
					$("#BlueEssence_btn").addClass("filtered-section");
					$(".blueEssence").prop("checked", false);
					$(this).prop("checked", true);
				} else {
					$(this).parent().parent().addClass("ant-checkbox-wrapper");
					$(this).parent().parent().removeClass("ant-checkbox-checked");
					$("#BlueEssence_btn").removeClass("filtered-section");
					$(this).prop("checked", false);
				}
				if($(this).prop("checked") == false) location.reload();
			})
			

			// SEARCH SECTION
			var txt = "";
			$('#search_teachers_skills').keyup(function() {
				$("#load_data_message").html("");
				txt += "&q=";
				$(".filtered-section").removeClass("filtered-section");
				$(".ant-checkbox-checked").addClass("ant-checkbox-wrapper");
				$(".ant-checkbox-checked").removeClass("ant-checkbox-checked");
				$(".filter-container").hide();
				$('#result').html('');
				txt += $(this).val();
				$("#result").html("");
				$.ajax({
					type: "GET",
					url: "./inc/get_cards/fetch_search.php",
					data: txt,
					success:function(data) {
						$("#result").html(data);
					}
				})
			})



			var limit_f = 7;
			var start_f = 0;
			var filter_scroll_on = false;
			var action_f = "";
			var ranks = "";
			var numOfChamps = "";
			var numOfSkins = "";
			var blueEssence = "";
			var orderBy = ""
			$(".ant-checkbox-input").click(function() {
				$("#load_data_message").html("");
				limit_f = 7;
				start_f = 0;

				orderBy = orderArr[Math.floor(Math.random() * orderArr.length)];
				action = "active";
				action_f = "data";
				ranks = get_filter("tier");
				numOfChamps = get_filter("numOfChamps");
				numOfSkins = get_filter("numOfSkins");
				blueEssence = get_filter("blueEssence");
				$("#result").html("");
				load_fdata(action_f, ranks, numOfChamps, numOfSkins, blueEssence, limit_f, start_f, orderBy);
			})
			
			function load_fdata(action_f, ranks, numOfChamps, numOfSkins, blueEssence, limit_f, start_f, order) {
				
				$.ajax({
					url:"./inc/get_cards/fetch_filter.php",
					method:"POST",
					data:{action_f:action_f, ranks:ranks, numOfChamps:numOfChamps, 
						numOfSkins:numOfSkins, blueEssence:blueEssence, limit_f:limit_f
						,start_f:start_f, order:order},
					success:function(response) {
						$("#result").append(response);
						if(response == "") {
							filter_scroll_on = false;
							$("#load_data_message").html("");
						} else {
							if( document.querySelector("#result").childElementCount < 7 ) {
								$("#load_data_message").html("");
							} else {
								$("#load_data_message").html("<img src='./resources/img/loading.gif' alt=''>");
							}
							
							filter_scroll_on = true;
						}
					}
				})
			}

			function get_filter(text_id) {
				var filterData = [];
				$("." + text_id + ":checked").each(function() {
					filterData.push($(this).val());
				})
				return filterData;
			}




			// MAINPAGE POST LOADER
			var limit = 7;
			var start = 0;
			var action = "inactive";
			var main_load_order = mainArr[Math.floor(Math.random() * orderArr.length)];
			function load_post_data(limit, start, main_order) {
				$.ajax({
					url: "./inc/get_cards/fetch_start.php",
					method: "POST",
					data: {limit:limit, start:start, main_order:main_order},
					cache:false,
					success:function(data) {
						$("#result").append(data);
						if(data == "") {
							$("#load_data_message").html("");
							action = "active";
						} else {
							$("#load_data_message").html("<img src='./resources/img/loading.gif' alt=''>");
							action = "inactive";
						}
					}
				})
				
			}
			if(action == "inactive") {
				action = "active";
				load_post_data(limit, start, main_load_order);
			}
			$(window).scroll(function() {
				if($(window).scrollTop() + $(window).height() > $("#result").height() && action == "inactive") {
					action = "active";
					start += limit;
					setTimeout(function() {
						load_post_data(limit, start, main_load_order);
					}, 1000);
				}
				if($(window).scrollTop() + $(window).height() > $("#result").height() && filter_scroll_on == true) {
					filter_scroll_on = false;
					start_f += limit_f;
					setTimeout(function() {
						load_fdata(action_f, ranks, numOfChamps, numOfSkins, blueEssence, limit_f, start_f, orderBy);
					}, 1000);
				}
			});
			
			


		})
		$(window).on("load", function(){
			$(".loader-wrapper").fadeOut("slow");
		})
	</script>
</body>

</html>