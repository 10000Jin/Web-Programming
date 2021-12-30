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
						<li><span><a href="/2017136130_텀프로젝트_최만진/dorm_join/join_result_form.php">선발결과 조회</a></span></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_join/check_list_form.php">체크리스트</a></li>
					</ul>
				</li>
			</ul>
		</div>           	
	   	<div id="content_box">
		    <div id="content_title">
		    	<span>입사 신청</span>
			</div>
			<div id="result">
		    	<ul>
<?php
    $con = mysqli_connect("localhost", "user1", "12345", "term_project"); // MySQL 서버 연결
    $sql = "select * from members where id='$userid'";          // MySQL 명령 로그인한 사람 정보
    $result = mysqli_query($con, $sql);                 // MySQL 명령 실행

    $row = mysqli_fetch_array($result);                 // 하나의 레코드 가져오기
    $id = $row["id"];                                   // 필드별로 각 변수에 저장
    $name = $row["name"];                   
    $room = $row["room"];

	if($room!="")
		echo "<li><span id='op1'>{$name}님은 {$room}에 배정되었습니다.</span></li>";
	else
		echo "<li><span id='op2'>아직 결과가 나오지 않았습니다.</span></li>";
?>
		    		<li>※ 선발된 학생은 공지사항과 입퇴사 절차 안내를 필히 확인하세요.</li>
		    		<li>※ 문의전화: 02-xxx-xxxx / 메일: example@koreaktech.ac.kr </li>
		    	</ul>
		    </div>		<!-- fin_info -->
		</div>		<!-- content_box -->
	</div>		<!-- main_content -->
</section> 
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>
