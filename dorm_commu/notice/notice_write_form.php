<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/notice.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/sub_menu.css">
<script>
  function check_input() {								// 자바 스크립트 함수 완료 버튼 클릭시 호출
      if (!document.notice_form.title.value)			// 제목이 없다면
      {
          alert("제목을 입력하세요!");					// 경고창 출력
          document.notice_form.title.focus();			// 제목 입력창 커서 이동
          return;
      }
      if (!document.notice_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.notice_form.content.focus();
          return;
      }
      document.notice_form.submit();						// notice_insert.php로 전달
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
				<li>커뮤니티
					<ul>
						<li><span><a href="/2017136130_텀프로젝트_최만진/dorm_commu/notice/notice_list_form.php">공지사항</a></span></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/fix/fix_list_form.php">고장/수리 요청</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/board/board_list_form.php">자유게시판</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/diet/diet_form.php">식단</a></li>
					</ul>
				</li>
			</ul>
		</div>           	
	   	<div id="notice_box">
		    <div id="notice_title">
		    	<span>공지사항 > 글 쓰기</span>
			</div>
			<div id="notice_form">
		    	<form  name="notice_form" method="post" action="notice_insert.php" enctype="multipart/form-data">		 	<!-- post방식 파일 업로드 위해 enctype을 multipart/form-data로 설정-->
		    	 <ul>
					<li>
						<span class="col1">이름 : </span>
						<span class="col2"><?=$username?></span>
					</li>		
		    		<li>
		    			<span class="col1">제목 : </span>
		    			<span class="col2"><input name="title" type="text"></span>
		    		</li>	    	
		    		<li id="text_area">	
		    			<span class="col1">내용 : </span>
		    			<span class="col2">
		    				<textarea name="content"></textarea>
		    			</span>
		    		</li>
		    		<li>
				        <span class="col1"> 첨부 파일</span>
				        <span class="col2"><input type="file" name="upfile"></span>
				    </li>			<!-- input 태그에 type을 file로 설정하면 찾아보기 버튼 생성 -->
		    	</ul>
		    	<ul class="buttons">
					<li><button type="button" onclick="check_input()">완료</button></li>
					<li><button type="button" onclick="location.href='notice_list_form.php'">목록</button></li>
				</ul>
		    	</form>
			</div>
		</div> <!-- notice_box -->
	</div>
</section> 
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>
