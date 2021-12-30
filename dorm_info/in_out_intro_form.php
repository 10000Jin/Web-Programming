<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/dorm_info.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/sub_menu.css">
</head>
<body> 
<header>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/header.php";?>
</header>  
<section>
	<div id="upper_line"></div>                                    <!-- 초록색 긴 가로줄 -->
	<div id="main_content">
		<div id="sub_menu">												<!-- 초록색 서브메뉴 -->
			<ul>
				<li>학사 안내
					<ul>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_info/reward_penalty_form.php">상벌점표</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_info/contact_num_form.php">비상 연락망</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_info/in_criteria_form.php">선발 기준</a></li>
						<li><span><a href="/2017136130_텀프로젝트_최만진/dorm_info/in_out_intro_form.php">입퇴사 안내</a></span></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_info/pay_form.php">관리비</a></li>
					</ul>
				</li>
			</ul>
		</div>           	
	   	<div id="content_box">
		    <div id="content_title">
		    	<span>입퇴사 안내</span>
			</div>
			<div id="in">
				<ul id="in_process">
					<li class="sub_title">※ 입사 절차</li>
					<p>1. 학사 홈페이지에서 본인 호실 확인<br>
					2. 학사 사무실 방문<br>
					3. 호실 및 룸메이트 확인<br>
					4. 호실 입실 및 명패지 부착<br>
					5. 시설물 확인 및 입사 체크리스트 제출<p>
				</ul>
			</div>
			<div id="out">
				<ul id="out_process">
					<li class="sub_title">※ 퇴사 절차</li>
					<li>-학기 중(중도 퇴사)</li>
					<p>1. 퇴사 신청 전 학사 사무실에 사전 알림<br>
					2. 본인 짐 정리 및 호실 청소<br>
					3. 퇴사 체크리스트 제출<br>
					4. 학사 사무실 방문<br>
					5. 퇴실</p>

					<li>-학기 말(정규 퇴사)</li>
					<p>1. 본인 짐 정리 및 호실 청소<br>
					2. 퇴사 체크리스트 제출<br>
					3. 학사 사무실 방문<br>
					5. 퇴실</p>
				</ul>
			</div>
		</div> <!-- content_box -->
	</div>	<!-- main_content -->
</section> 
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>
