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
						<li><span><a href="/2017136130_텀프로젝트_최만진/dorm_info/in_criteria_form.php">선발 기준</a></span></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_info/in_out_intro_form.php">입퇴사 안내</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_info/pay_form.php">관리비</a></li>
					</ul>
				</li>
			</ul>
		</div>           	
	   	<div id="content_box">
		    <div id="content_title">
		    	<span>선발 기준</span>
			</div>
			<div id="criteria">
				<ul>※ 평가 점수</ul>
				<table>
					<tr>
						<td class="col1">구분</td>
						<td class="col2">적용기준</td>
						<td class="col3" colspan="2">점수, 점수배분 내용</td>
						<td class="col4">점유율</td>
					</tr>
					<tr>
						<td class="col1">총계</td>
						<td class="col2">-</td>
						<td colspan="2" class="col3">450점</td>
						<td class="col4">100%</td>
					</tr>
					<tr><td class="col1">성적<br>점수</td>
						<td class="col2">최종학기 성적</td>
						<td colspan="2" class="col3">360점 (450점*80%)</td><td class="col4">80%</td>
					</tr>
					<tr>
						<td class="col1" rowspan="4">거리<br>점수</td>
						<td class="col2" rowspan="4">입사선발 신청 마감일<br>이전 주민등록상 부,모 주소</td>
						<td class="col5">60점</td><td>천안(성환, 직산, 성거, 입장, 풍세, 광덕 제외)</td>
						<td class="col4" rowspan="4">20%</td>
					</tr>
					<tr>
						<td class="col5">70점</td>
						<td>첨주, 성환, 직산, 성거, 입장, 풍세, 광덕 </td>
					</tr>
					<tr>
						<td class="col5">80점</td>
						<td>평택, 안성, 진천, 청원, 연기, 공주, 아산</td>
					</tr>
					<tr>
						<td class="col5">90점</td>
						<td>위 3개 지역 외 전지역</td>
					</tr>
					<tr>
						<td class="col1">상벌점</td>
						<td colspan="4">상벌점을 합산하여 1점당 총점(거리점수+성적점수)에 5점을 가감함</td>
					</tr>
				</table>
				<span id="notice">(한기대 평가점수를 기준으로 하였습니다.) </span>
			</div>
		</div> <!-- content_box -->
	</div> <!-- main_content -->
</section> 
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>
