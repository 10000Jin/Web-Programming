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
	<div id="main_content" style="height: 1000px;">
		<div id="sub_menu">												<!-- 초록색 서브메뉴 -->
			<ul>
				<li>학사 안내
					<ul>
						<li><span><a href="/2017136130_텀프로젝트_최만진/dorm_info/reward_penalty_form.php">상벌점표</a></span></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_info/contact_num_form.php">비상 연락망</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_info/in_criteria_form.php">선발 기준</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_info/in_out_intro_form.php">입퇴사 안내</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_info/pay_form.php">관리비</a></li>
					</ul>
				</li>
			</ul>
		</div>           	
	   	<div id="content_box">
		    <div id="content_title">
		    	<span>상벌점표</span>
			</div>
			<div id="reward">
		    	<ul>※ 상점 사항</ul>
		    	<table>
		    		<tr><td class="col1">상점</td><td class="col2">해당사항</td></tr>
		    		<tr><td class="col1">7점</td><td class="col2">인명 및 재산관련 위험 긴급신고, 처리</td></tr>
		    		<tr><td class="col1">5점</td><td class="col2">통로장등 위원회 활동</td></tr>
		    		<tr><td class="col1">3점</td><td class="col2">선행 및 기타 모범을 보인 관생</td></tr>
		    		<tr><td class="col1">1~2점</td><td class="col2">관내에서 봉사활동, 행사 등에 참여하여 생활관 발전에 기여</td></tr>
		    	</table>
		    </div>
		    <div id="penalty">
		    	<ul>※ 벌점 사항</ul>
		    	<table>
		    		<tr><td class="col1">벌점</td><td class="col2">해당사항</td></tr>
		    		<tr><td class="col1">강제퇴사</td><td class="col2">1. 절도 및 폭행, 성폭력 행위<br>2. 방화 및 실화<br>3. 관내 이성동 출입<br>4. 학기동안 누적 벌점 12점 이상<br>5. 기타 공동샐활에 부적합하다고 판단되는 경우</td></tr>
		    		<tr><td class="col1">7점</td><td class="col2">1. 근무자의 정당한 지시 불이행<br>2. 인원점검 조작<br>3. 인화물질 관내 반입<br>4. 관내 동물, 곤충등 사육 행위<br>5. 임의 호실 변경</td></tr>
		    		<tr><td class="col1">4점</td><td class="col2">1. 미신고 전열기구 반입<br>2. 정숙시간 관내 소음 행위<br>3. 입퇴사 절차 미준수<br>3. 학사 시설물 무단 변경 및 개조</td></tr>
		    		<tr><td class="col1">2점</td><td class="col2">1. 관내 소란 행위<br>2. 인원점검 불참<br>3. 허가되지 않은 부착물 게시<br>4. 노출이 심한 상태로 생활관 활보<br>5. 공용 공간의 환경 저해 행위<br>6.관내 쓰레기 무단 투기</td></tr>
		    	</table>
		    </div>
		</div> <!-- content_box -->
	</div> <!-- main)content -->
</section> 
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>
