<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/new_regist.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/sub_menu.css">
<script>
   function check_input()                           //자바 스크립트 함수 저장하기 버튼 누를시 호출
   {
      if (!document.new_regist.id.value) {           // 각 요소가 비어있는지 확인
          alert("아이디를 입력하세요!");               // 비어 있으면 경고창 출력
          document.new_regist.id.focus();            // 입력창에 커서 이동 
          return;
      }

      if (!document.new_regist.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.new_regist.pass.focus();
          return;
      }

      if (!document.new_regist.pass_confirm.value) {
          alert("비밀번호 재확인을 입력하세요!");    
          document.new_regist.pass_confirm.focus();
          return;
      }

      if (!document.new_regist.name.value) {
          alert("이름을 입력하세요!");    
          document.new_regist.name.focus();
          return;
      }

      if (!document.new_regist.email1.value) {
          alert("이메일 주소를 입력하세요!");    
          document.new_regist.email1.focus();
          return;
      }

      if (!document.new_regist.email2.value) {
          alert("이메일 주소를 입력하세요!");    
          document.new_regist.email2.focus();
          return;
      }

      if (document.new_regist.pass.value != document.new_regist.pass_confirm.value) { 
                                                                            // 비밀번호 재확인
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.new_regist.pass.focus();
          document.new_regist.pass.select();
          return;
      }

      document.new_regist.submit();                     // member_add.php로 전달
   }

   function reset_form() {                           // 자바 스크립트 함수 초기화 버튼 클릭시 호출
      document.new_regist.id.value = "";             // 모두 공백으로
      document.new_regist.pass.value = "";
      document.new_regist.pass_confirm.value = "";
      document.new_regist.name.value = "";
      document.new_regist.email1.value = "";
      document.new_regist.email2.value = "";
      document.new_regist.id.focus();
      return;
   }

   function check_id() {                             // 중복확인 버튼 클릭시 호출
     window.open("id_check.php?id=" + document.new_regist.id.value,        // 새창으로 염
         "IDcheck", "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>
</head>
<body> 
	<header>
  	<?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/header.php";?>                   <!-- header 표시 -->
  </header>
  <section>
    <div id="upper_line"></div>>                                    <!-- 초록색 긴 가로줄 -->
    <div id="main_content">
      <div id="sub_menu"><ul><li>회원가입</li></ul></div>           <!-- 초록색 서브메뉴 -->
  		<div id="join_box">
        <div id="join_title">
          <span>회원 가입</span>
        </div>
        <div id="join_form">
        	<form  name="new_regist" method="post" action="member_add.php">    <!-- post방식 -->
    	    	<div class="form id">
    	        <div class="col1">아이디</div>
    	        <div class="col2">
    				    <input type="text" name="id">
    	        </div>  
    	        <div class="col3">
    	        	<a href="#"><img src="/2017136130_텀프로젝트_최만진/img/check_id.gif" 
    	        		onclick="check_id()"></a>                    <!-- 중복확인 버튼 클릭시 호출 -->
    	        </div>                 
           	</div>
           	<div class="space"></div>                                   <!-- 간격 조절 -->

           	<div class="form">
    	        <div class="col1">비밀번호</div>
    	        <div class="col2">
    				    <input type="password" name="pass">
    	        </div>                 
           	</div>
           	<div class="space"></div>

           	<div class="form">
    	        <div class="col1">비밀번호 확인</div>
    	        <div class="col2">
    				    <input type="password" name="pass_confirm">
    	        </div>                 
           	</div>
           	<div class="space"></div>

           	<div class="form">
    	        <div class="col1">이름</div>
    	        <div class="col2">
    				    <input type="text" name="name">
    	        </div>                 
           	</div>
           	<div class="space"></div>

            <div class="form phone">
              <div class="col1">전화번호</div>
              <div class="col2">
                <input type="text" name="num1"> - <input type="text" name="num2"> - <input type="text" name="num3">
              </div>                 
            </div>
            <div class="space"></div>

           	<div class="form email">
    	        <div class="col1">이메일</div>
    	        <div class="col2">
    				    <input type="text" name="email1"> @ 
                <select name="email2">                      <!-- 선택 박스 -->
                  <option value="" selected>선택하세요</option>
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
            	<img style="cursor:pointer" src="/2017136130_텀프로젝트_최만진/img/button_save.gif" onclick="check_input()">&nbsp;                               <!-- 커서 손가락 모양, 클릭시 check_input 함수 실행 -->
          		<img id="reset_button" style="cursor:pointer" src="/2017136130_텀프로젝트_최만진/img/button_reset.gif"
          			onclick="reset_form()">       <!-- 커서 손가락 모양, 클릭시 reset_form 함수 실행 -->
           	</div>
         	</form>
        </div>
    	</div> <!-- join_box -->
    </div> <!-- main_content -->
  </section> 
  <footer style="margin: -15px;">
  	<?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>                       <!-- footer 표시 -->
  </footer>
</body>
</html>

