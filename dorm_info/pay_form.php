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
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_info/in_out_intro_form.php">입퇴사 안내</a></li>
						<li><span><a href="/2017136130_텀프로젝트_최만진/dorm_info/pay_form.php">관리비</a></span></li>
					</ul>
				</li>
			</ul>
		</div>           	
	   	<div id="content_box">
		    <div id="content_title">
		    	<span>관리비</span>
			</div>
			<div id="pay">
				<ul>
					<li>A동</li>
					<table>
						<tr><td>호실</td><td>금액</td></tr>
						<tr><td>101호 ~ 110호</td><td>10만원</td></tr>
						<tr><td>201호 ~ 210호</td><td>13만원</td></tr>
						<tr><td>301호 ~ 310호</td><td>16만원</td></tr>
					</table>
					<li id="sec">B동(신축)</li>
					<table>
						<tr><td>호실</td><td>금액</td></tr>
						<tr><td>101호 ~ 110호</td><td>20만원</td></tr>
						<tr><td>201호 ~ 210호</td><td>22만원</td></tr>
						<tr><td>301호 ~ 310호</td><td>25만원</td></tr>
					</table>
				</ul>
			</div>	<!-- pay -->
		</div> <!-- content_box -->
	</div>
</section> 
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>
