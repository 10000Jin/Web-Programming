<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/mypage.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/sub_menu.css">
<script type="text/javascript" src="/2017136130_텀프로젝트_최만진/js/member_modify.js"></script>
</head>
<body> 
<header>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/header.php";?>	
</header>					<!-- header 표시 -->

<?php    
   	$con = mysqli_connect("localhost", "user1", "12345", "term_project");	  // MySQL 서버 연결
    $sql = "select * from members where id='$userid'";  // member테이블에 동일한 id 있는지 검사
    $result = mysqli_query($con, $sql);				// 명령 실행후 동일 id 결과 result에 저장
    $row = mysqli_fetch_array($result);			// 데이터 인덱스 또는 문자열 연관 배열로 저장

    $pass = $row["pass"];							// 비밀번호, 이름 저장
    $name = $row["name"];

    $phone = explode("-", $row["phone"]);
    $num1 = $phone[0];
    $num2 = $phone[1];
    $num3 = $phone[2];

    $email = explode("@", $row["email"]);			// email @기준으로 분리해 각각 저장
    $email1 = $email[0];
    $email2 = $email[1];

    mysqli_close($con);								// MySQL 서버 연결 종료
?>

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
        <div id="content_box">
        	<div id="content_title">
        		<span>회원 정보수정</span>
        	</div>
      		<div id="modify_form">
          		<form  name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">							<!-- post방식 action member_modify.php로 설정 -->
    		    	<div class="form">
				        <div class="col1">아이디</div>
				        <div class="col2"><?=$userid?></div>        <!-- id 출력 -->
			       	</div>
			       	<div class="space"></div>				<!-- 간격 조절 -->

			       	<div class="form">
				        <div class="col1">비밀번호</div>
				        <div class="col2">
							<input type="password" name="pass" value="<?=$pass?>">
				        </div>                 
			       	</div>
			       	<div class="space"></div>

			       	<div class="form">
				        <div class="col1">비밀번호 확인</div>
				        <div class="col2">
							<input type="password" name="pass_confirm" value="<?=$pass?>">
				        </div>                 
			       	</div>
			       	<div class="space"></div>

			       	<div class="form">
				        <div class="col1">이름</div>
				        <div class="col2">
							<input type="text" name="name" value="<?=$name?>">
				        </div>                 
			       	</div>
			       	<div class="space"></div>

					<div class="form">
				        <div class="col1">전화번호</div>
				        <div class="col2">
							<input type="text" name="num1" value="<?=$num1?>"> - <input type="text" name="num2" value="<?=$num2?>"> - <input type="text" name="num3" value="<?=$num3?>">
				        </div>                 
			       	</div>
			       	<div class="space"></div>

			       	<div class="form email">
				        <div class="col1">이메일</div>
				        <div class="col2">
							<input type="text" name="email1" value="<?=$email1?>"> @ 
							<select name="email2">
			                  <option value="<?=$email2?>" selected><?=$email2?></option>
			                  <option value="koreatech.ac.kr">koreatech.ac.kr</option>
			                  <option value="naver.com">naver.com</option>
			                  <option value="gmail.com">gmail.com</option>
			                  <option value="hanmail.net">hanmail.net</option>
			                </select>
				        </div>                 
			       	</div>
			       	<div class="space"></div>

			       	<div class="bottom_line"> </div>
			       	<div class="buttons">
	                	<img style="cursor:pointer" src="/2017136130_텀프로젝트_최만진/img/button_save.gif" onclick="check_input()">&nbsp;	 	<!-- 저장하기 버튼 클릭시 check_input() 호출 -->
                  		<img id="reset_button" style="cursor:pointer" src="/2017136130_텀프로젝트_최만진/img/button_reset.gif"				
                  			onclick="reset_form()">		<!-- 초기화 버튼 클릭시 reset_form() 호출 -->
	           		</div>
           		</form>
        	</div> <!-- modify_form -->
        </div> <!-- content_box -->
    </div>	<!-- main_content -->
	</section> 
	<footer>
    	<?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>						<!-- footer 표시 -->
    </footer>
</body>
</html>

