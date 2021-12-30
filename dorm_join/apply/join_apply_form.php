<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/join.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/sub_menu.css">
<script>
	function check_input(){								// 자바 스크립트 함수
		if (!document.join_apply.ho.value){				// 호 번호가 입력되지 않으면
			alter("호실을 입력하세요!");					// 경고창 출력
			document.join_apply.ho.focus();
			return;
		}
		document.join_apply.submit();					// 있으면 join_apply_add.php 제출
	}

	function check_room(){								// 호실 중복확인 함수
		window.open("room_check.php?room=" + document.join_apply.dong.value.concat(document.join_apply.ho.value), "ROOMcheck", "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
	}
</script>
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
						<li><span><a href="/2017136130_텀프로젝트_최만진/dorm_join/apply/join_apply_form.php">입사신청</a></span></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_join/join_result_form.php">선발결과 조회</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_join/check_list_form.php">체크리스트</a></li>
					</ul>
				</li>
			</ul>
		</div>           	
<?php

	$con = mysqli_connect("localhost", "user1", "12345", "term_project");	// MySQL 서버 연결
	$sql = "select * from members where id='$userid'";			// MySQL 명령 로그인한 사람 정보
	$result = mysqli_query($con, $sql);									// MySQL 명령 실행

	$row = mysqli_fetch_array($result);							// 하나의 레코드 가져오기
	$name = $row["name"];										// 필드별로 각 변수에 저장
	$phone = $row["phone"];
	$email = $row["email"];
?>			   	

	   	<div id="content_box">
		    <div id="content_title">
		    	<span>입사 신청서 작성</span>
			</div>
			<div id="apply_form">
				<form name="join_apply" method="post" action="join_apply_add.php">
					<div class="form">
						<div class="col1">이름</div>
						<div class="col2"><?=$name?></div>
					</div>
					<div class="space"></div>

					<div class="form">
						<div class="col1">번호</div>
						<div class="col2"><?=$phone?></div>
					</div>
					<div class="space"></div>

					<div class="form">
						<div class="col1">메일</div>
						<div class="col2"><?=$email?></div>
					</div>
					<div class="space"></div>

					<div class="form">
						<div class="col1">호실 선택</div>
						<div class="col2">
							<ul><li>
									<select name="dong">			<!-- 선택 박스 -->
										<option value="A" selected="">A동</option>
										<option value="B">B동</option>
									</select>
									<input type="text" name="ho">	<!-- 텍스트 박스 -->
									(호)
									<a href="#"><img src="/2017136130_텀프로젝트_최만진/img/check_id.gif" 
    	        		onclick="check_room()"></a>              <!-- 중복확인 버튼 클릭시 호출 -->
							</li></ul>
						</div>
							
					</div>
					<div class="space"></div>

					<div class="bottom_line"></div>
					<div class="buttons">
						<img style="cursor:pointer" src="/2017136130_텀프로젝트_최만진/img/button_save.gif" onclick="check_input()">                               
								<!-- 커서 손가락 모양, 클릭시 check_input 함수 실행 -->
					</div>
		    	</form>
		    </div>		<!-- apply_form -->
		</div>		<!-- content_box -->
	</div>		<!-- main_content -->
</section>
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>
