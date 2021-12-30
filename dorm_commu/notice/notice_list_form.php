<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/notice.css">
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
		    	<span>공지사항 > 목록보기</span>
			</div>
			<div>
		    	<ul id="notice_list">
					<li id="title">
						<span class="col1">번호</span>
						<span class="col2">제목</span>
						<span class="col3">글쓴이</span>
						<span class="col4">첨부</span>
						<span class="col5">등록일</span>
						<span class="col6">조회</span>
					</li>
<?php
	if (isset($_GET["page"]))									// page값이 설정되어 있다면 사용
		$page = $_GET["page"];						
	else 														// 없다면 1로 초깃값
		$page = 1;

	$con = mysqli_connect("localhost", "user1", "12345", "term_project");	// MySQL 서버 연결
	$sql = "select * from notice order by num desc";			 // MySQL 명령 설정(레코드 내림차순)
	$result = mysqli_query($con, $sql);									// 명령 실행
	$total_record = mysqli_num_rows($result); 							// 전체 글 수

	$scale = 10;												// 한 페이지에 표시되는 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     				// 전체 글 수가 10으로 나눠 떨어지면
		$total_page = floor($total_record/$scale);     // 전체 페이지는 전체 글 수/10(나머지 버림)
	else 												// 안 나눠 떨어지면
		$total_page = floor($total_record/$scale) + 1; 	// 그 다음 페이지까지 생각해 1더함
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      				// $start는 시작 번호
	$number = $total_record - $start;					// $number은 글의 일련번호


   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++){ // DB에서 레코드 가져오기
      mysqli_data_seek($result, $i);					// 가져올 레코드로 위치(포인터) 이동

      $row = mysqli_fetch_array($result);				// 하나의 레코드 가져오기
	  $num = $row["num"];
	  $id = $row["id"];
	  $name = $row["name"];
	  $title = $row["title"];
      $regist_day = $row["regist_day"];
      $count = $row["count"];

      if ($row["file_name"])							// 첨부파일이 있으면
      	$file_image = "<img src='/2017136130_텀프로젝트_최만진/img/file.gif'>";	// 아이콘 표시
      else
      	$file_image = " ";
?>
					<li>
						<span class="col1"><?=$number?></span>
						<span class="col2"><a href="notice_view_form.php?num=<?=$num?>&page=<?=$page?>"><?=$title?></a></span>
						<span class="col3"><?=$name?></span>
						<span class="col4"><?=$file_image?></span>
						<span class="col5"><?=$regist_day?></span>
						<span class="col6"><?=$count?></span>
					</li>	
<?php
   	   $number--;										// 글 하나 가져왔으면 일련번호 1줄임
   }

   mysqli_close($con);									// MySQL 서버 종료

?>
		    	</ul>
				<ul id="page_num"> 	
<?php
	if ($total_page>=2 && $page >= 2){			// 총 페이지가 2이상이고 현재 페이지가 2이상이면
		$new_page = $page-1;					// 이전 버튼과 누르면 -1 페이지로 이동
		echo "<li><a href='notice_list_form.php?page=$new_page'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";					// 아니면 공백

   	for ($i=1; $i<=$total_page; $i++){			// 게시판 목록 하단에 페이지 링크 번호 출력
		if ($page == $i){     					// 현재 페이지 번호 링크 안함
			echo "<li><b> $i </b></li>";		// 현재 페이지 글씨 두껍게
		}
		else{									// 다른 페이지는 링크
			echo "<li><a href='notice_list_form.php?page=$i'> $i </a><li>";
		}
   	}

   	if ($total_page>=2 && $page != $total_page){	// 총페이지가 2이상이고 현재 페이지가 아니면
		$new_page = $page+1;						// 다음 버튼과 누르면 +1 페이지로 이동
		echo "<li> <a href='notice_list_form.php?page=$new_page'>다음 ▶</a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";						// 아니면 공백
?>


				</ul> <!-- page -->	    	
				<ul class="buttons">
					<li><button onclick="location.href='notice_list_form.php'">목록</button></li>
					<li>
<?php 
    if($admin == 1) {								// 관리자만 글쓰기 버튼 클릭시 이동가능
?>
						<button onclick="location.href='notice_write_form.php'">글쓰기</button>
	<?php
	} else {									// 로그인 안돼있으면 경고창 출력
?>
						<a href="javascript:alert('관리자만 작성할 수 있습니다!')"><button>글쓰기</button></a>
<?php
	}
?>
					</li>
				</ul>
			</div>
		</div> <!-- notice_box -->
</section> 
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>
