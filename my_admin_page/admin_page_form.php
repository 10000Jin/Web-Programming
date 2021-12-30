<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/admin_page.css">
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
				<li>관리자 모드</li>
			</ul>
		</div>           	
	   	<div id="content_box">
		    <div class="content_title">
		    	<span>입사 신청서</span>
			</div>
			<div>
				<ul id="apply_list">
					<li class="title">
						<span class="col1">아이디</span>
						<span class="col2">이름</span>
						<span class="col3">전화번호</span>
						<span class="col4">호실</span>
						<span class="col5">납부여부</span>
						<span class="col6">등록일</span>
						<span class="col7">배정</span>
					</li>
<?php
	$con = mysqli_connect("localhost", "user1", "12345", "term_project");	// MySQL 서버 연결
	$sql = "select * from apply order by num asc";			 // MySQL 명령 설정(레코드 오름차순)
	$result = mysqli_query($con, $sql);									// 명령 실행

	while($row = mysqli_fetch_array($result)){
      			// 하나의 레코드 가져오기
	  $id = $row["id"];
	  $name = $row["name"];
	  $phone = $row["phone"];
	  $room = $row["room"];
	  $pay = $row["pay"];
      $regist_day = $row["regist_day"];
?>
		    	
					<li class="under_line">
						<span class="col1"><?=$id?></span>
						<span class="col2"><?=$name?></span>
						<span class="col3"><?=$phone?></span>
						<span class="col4"><?=$room?></span>
<?php
	if($pay==1)					
		echo "<span class='col5'>O</span>";
	else
		echo "<span class='col5'>X</span>";
?>
						<span class="col6"><?=$regist_day?></span>
						<span class="col7"><a href="room_allocation.php?id=<?=$id?>"><button>배정</button></a></button></span>				<!-- 배정버튼 클릭시 이동 -->
					</li>
<?php
	}
?>

				</ul>
			</div>
			<div class="content_title">		
				<span>공지사항 관리</span>	
			</div>
			<div>
				<ul id="notice_manage">
					<li class="title">
						<span class="col1">선택</span>
						<span class="col2">번호</span>
						<span class="col3">이름</span>
						<span class="col4">제목</span>
						<span class="col5">첨부파일명</span>
						<span class="col6">작성일</span>
					</li>
<?php
	if (isset($_GET["page"]))									// page값이 설정되어 있다면 사용
		$page = $_GET["page"];						
	else 														// 없다면 1로 초깃값
		$page = 1;

	$sql = "select * from notice order by num desc";	// MySQL 명령 설정(레코드 내림차순)
	$result = mysqli_query($con, $sql);									// 명령 실행
	$total_record = mysqli_num_rows($result); 							// 전체 글 수

	$scale = 6;												// 한 페이지에 표시되는 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     				// 전체 글 수가 6으로 나눠 떨어지면
		$total_page = floor($total_record/$scale);     // 전체 페이지는 전체 글 수/6(나머지 버림)
	else 												// 안 나눠 떨어지면
		$total_page = floor($total_record/$scale) + 1; 	// 그 다음 페이지까지 생각해 1더함

	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      				// $start는 시작 번호
	$number = $total_record - $start;								// $number은 글의 일련번호


	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++){ // DB에서 레코드 가져오기
      mysqli_data_seek($result, $i);					// 가져올 레코드로 위치(포인터) 이동
      $row = mysqli_fetch_array($result);				// 하나의 레코드 가져오기
	  $num = $row["num"];										// 각 필드 정보 각 변수에 저장
	  $name = $row["name"];
	  $title = $row["title"];
	  $file_name = $row["file_name"];
	  $regist_day = $row["regist_day"];
?>

					<form method="post" action="/2017136130_텀프로젝트_최만진/my_admin_page/admin_notice_delete.php">
						<li class="under_line">
							<span class="col1"><input type="checkbox" name="item[]" value="<?=$num?>"></span>
							<span class="col2"><?=$number?></span>
							<span class="col3"><?=$name?></span>
							<span class="col4"><?=$title?></span>
							<span class="col5"><?=$file_name?></span>
							<span class="col6"><?=$regist_day?></span>
						</li>

<?php
		$number --;
	}
	mysqli_close($con);
?>

						<button type="submit">선택된 글 삭제</button>
					</form>
				</ul>	<!-- noticee_manage -->
				<ul id="page_num">
<?php
	if ($total_page>=2 && $page >= 2){			// 총 페이지가 2이상이고 현재 페이지가 2이상이면
		$new_page = $page-1;					// 이전 버튼과 누르면 -1 페이지로 이동
		echo "<li><a href='admin_page_form.php?page=$new_page'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";					// 아니면 공백

   	for ($i=1; $i<=$total_page; $i++){			// 게시판 목록 하단에 페이지 링크 번호 출력
		if ($page == $i){     					// 현재 페이지 번호 링크 안함
			echo "<li><b> $i </b></li>";		// 현재 페이지 글씨 두껍게
		}
		else{									// 다른 페이지는 링크
			echo "<li><a href='admin_page_form.php?page=$i'> $i </a><li>";
		}
   	}

   	if ($total_page>=2 && $page != $total_page){	// 총페이지가 2이상이고 마지막 페이지가 아니면
		$new_page = $page+1;						// 다음 버튼과 누르면 +1 페이지로 이동
		echo "<li> <a href='admin_page_form.php?page=$new_page'>다음 ▶</a> </li>";
	}
	else 
		echo "<li>&nbsp;</li>";						// 아니면 공백
?>

				</ul>
			</div>	
		</div>	<!-- content_box -->
	</div>	<!-- main_content -->
</section>
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>
