<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/join.css">
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
				<li>학사 입사
					<ul>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_join/apply/join_apply_form.php">입사신청</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_join/join_result_form.php">선발결과 조회</a></li>
						<li><span><a href="/2017136130_텀프로젝트_최만진/dorm_join/check_list_form.php">체크리스트</a></span></li>
					</ul>
				</li>
			</ul>
		</div>           	
	   	<div id="content_box">
		    <div id="content_title">
		    	<span>입/퇴사 체크리스트</span>
			</div>
			<div id="check_list">
				<ul>
					<li>※ 입사 또는 퇴사시에 아래 첨부파일의 입/퇴사 체트리스트를 작성하여<br> 학사 사무실에 제출하여 주십시오.</li>
					<li>
<?php
	$file_path = $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/data/check_list.hwp";
	$file_size = filesize($file_path);

	echo "▷ 첨부파일 : check_list.hwp ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
		<a href='check_list_download.php'><b>[저장]</b></a><br><br>";
?>						

					</li>
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
