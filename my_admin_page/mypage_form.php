<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/mypage.css">
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
				<li>마이페이지
					<ul>
						<li><span>내 정보</span></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_join/apply/join_apply_form.php">입사신청</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_join/.php">선발결과 조회</a></li>
					</ul>
				</li>
			</ul>
		</div>   
<?php

	$con = mysqli_connect("localhost", "user1", "12345", "term_project");	// MySQL 서버 연결
	$sql = "select * from members where id='$userid'";			// MySQL 명령 로그인한 사람 정보
	$result = mysqli_query($con, $sql);									// MySQL 명령 실행

	$row = mysqli_fetch_array($result);							// 하나의 레코드 가져오기
	$id = $row["id"];
	$name = $row["name"];										// 필드별로 각 변수에 저장
	$phone = $row["phone"];
	$email = $row["email"];
	$regist_day = $row["regist_day"];
	$room = $row["room"];
?>			   	

	   	<div id="content_box">
		    <div id="content_title">
		    	<span>내 정보</span>
			</div>
			<div id="mypage_form">
				<div class="form">
					<div class="col1">아이디</div>
					<div class="col2"><?=$id?></div>
				</div>
				<div class="space"></div>

				<div class="form">
					<div class="col1">이름</div>
					<div class="col2"><?=$name?></div>
				</div>
				<div class="space"></div>

				<div class="form">
					<div class="col1">전화번호</div>
					<div class="col2"><?=$phone?></div>
				</div>
				<div class="space"></div>

				<div class="form">
					<div class="col1">이메일</div>
					<div class="col2"><?=$email?></div>
				</div>
				<div class="space"></div>

				<div class="form">
					<div class="col1">등록일</div>
					<div class="col2"><?=$regist_day?></div>
				</div>
				<div class="space"></div>

				<div class="form">
					<div class="col1">호실</div>
					<div class="col2"><?=$room?></div>
				</div>
				<div class="space"></div>
		    	
		    	<div class="bottom_line"></div>
		    	<div class="buttons">
					<button onclick="location.href='member_modify_form.php'">수정하기</button>	
				</div>
			</div>	<!-- mypage_form -->
		</div> <!-- content_box -->
	</div>	<!-- main_content -->
</section> 
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>