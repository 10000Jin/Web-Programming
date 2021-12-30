<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/login.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/sub_menu.css">
<script type="text/javascript" src="../js/login.js"></script>        
                                  <!-- 자바 스크립트 파일 login.js 불러오기 -->                  
</head>
<body> 
	<header>
    	<?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/header.php";?>
  </header>
	<section>
    <div id="upper_line"></div>                                    <!-- 초록색 긴 가로줄 -->
    <div id="main_content">
      <div id="sub_menu"><ul><li>로그인</li></ul></div>           <!-- 초록색 서브메뉴 -->
  		<div id="login_box">
  		  <div id="login_title">
    		  <span>로그인</span>
  		  </div>
  		  <div id="login_form">
      		<form  name="login_form" method="post" action="login.php">		
              <ul>                                  <!-- post방식 action 속성 login.php 설정-->  
                <li><input type="text" name="id" placeholder="아이디" ></li>
                <li><input type="password" id="pass" name="pass" placeholder="비밀번호" ></li> 
              </ul>
              <div id="login_btn">
                  <a href="#"><img src="/2017136130_텀프로젝트_최만진/img/login.png" onclick="check_input()"></a>
              </div>                                <!-- 버튼 클릭시 check_input 함수 호출 -->
          </form>
        </div> <!-- login_form -->
      </div> <!-- login_box -->
    </div> <!-- main_content -->
  </section> 
  <footer>
      <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>                  <!-- footer 표시 -->
  </footer>
</body>
</html>

                                                
              