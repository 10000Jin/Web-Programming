<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/fix.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/sub_menu.css">
</head>
<body> 
<header>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/header.php";?>						<!-- 헤더 표시 -->
</header>  
<section>
	<div id="upper_line"></div>                                    <!-- 초록색 긴 가로줄 -->
	<div id="main_content">
		<div id="sub_menu">												<!-- 초록색 서브메뉴 -->
			<ul>
				<li>커뮤니티
					<ul>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/notice/notice_list_form.php">공지사항</a></li>
						<li><span><a href="/2017136130_텀프로젝트_최만진/dorm_commu/fix/fix_list_form.php">고장/수리 요청</a></span></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/board/board_list_form.php">자유게시판</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/diet/diet_form.php">식단</a></li>
					</ul>
				</li>
			</ul>
		</div>
	   	<div id="fix_box">
		    <div id="fix_title">
		    	<span>고장/수리 요청 > 글보기</span>
			</div>
<?php
	$num  = $_GET["num"];						// fix_list_form에서 넘겨준  
	$page  = $_GET["page"];						// 일련번호, 페이지 저장

	$con = mysqli_connect("localhost", "user1", "12345", "term_project");		// MySQL 서버 연결
	$sql = "select * from fix where num=$num";						// MySQL 명령
	$result = mysqli_query($con, $sql);									// MySQL 명령 실행

	$row = mysqli_fetch_array($result);							// 하나의 레코드 가져오기
	$id = $row["id"];											// 필드별로 각 변수에 저장
	$name = $row["name"];
	$regist_day = $row["regist_day"];
	$title = $row["title"];
	$content = $row["content"];
	$file_name = $row["file_name"];
	$file_type = $row["file_type"];
	$file_copied = $row["file_copied"];
	$count = $row["count"];

	$content = str_replace(" ", "&nbsp;", $content);		// 공백을 표현하기 위해 &nbsp로 바꿈
	$content = str_replace("\n", "<br>", $content);			// 줄바꿈 -> <br> 태그

	$new_count = $count + 1;								// 조회수 1증가
	$sql = "update fix set count=$new_count where num=$num";   // DB서버의 count값 1증가
	mysqli_query($con, $sql);
?>		
		    <div>
			    <ul id="view_content">
					<li>
						<span class="col1"><b>제목 :</b> <?=$title?></span>	
						<span class="col2"><?=$name?> | <?=$regist_day?></span>
					</li>									<!-- 제목(굵게), 이름, 날짜 출력 -->
					<li>
						<?php
							if($file_name) {						// 첨부파일이 있으면
								$real_name = $file_copied;
								$file_path = $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/data/fix_data/".$real_name;
								$file_size = filesize($file_path);	// 파일 크기

								echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
					       		<a href='fix_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'><b>[저장]</b></a><br><br>";
					           	}
						?>
						<?=$content?>							<!-- 글 내용 출력 -->
					</li>		
			    </ul>
			    <ul class="buttons">								<!-- 버튼들 -->
						<li><button onclick="location.href='fix_list_form.php?page=<?=$page?>'">목록</button></li>
<?php
	if($id == $userid){											// 삭제 수정은 본인 글만 가능
?>
						<li><button onclick="location.href='fix_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
						<li><button onclick="location.href='fix_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
<?php
	}
?>
						<li><button onclick="location.href='fix_write_form.php'">글쓰기</button></li>
				</ul>
			</div>
		</div> <!-- fix_box -->
	</div>
</section> 
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>
