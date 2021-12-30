<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/diet.css">
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
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/notice/notice_list_form.php">공지사항</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/fix/fix_list_form.php">고장/수리 요청</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/board/board_list_form.php">자유게시판</a></li>
						<li><span><a href="/2017136130_텀프로젝트_최만진/dorm_commu/diet/diet_form.php">식단</a></span></li>
					</ul>
				</li>
			</ul>
		</div>  
<?php
	date_default_timezone_set('Asia/Seoul');					// 서울 시간으로 설정
	
	if (isset($_GET["day"]))
		$day = $_GET["day"];
	else
		$day = date("y-n-j");


	$prev_day = date("y-n-j", strtotime($day."-1 days"));
	$next_day = date("y-n-j", strtotime($day."+1 days"));

	$con = mysqli_connect("localhost", "user1", "12345", "term_project");	// MySQL 서버 연결
	$sql = "select * from diet where day='$day'";			 				// MySQL 명령 설정
	$result = mysqli_query($con, $sql);									// 명령 실행

	$row = mysqli_fetch_array($result);
	$day = $row["day"];
	$breakfast = $row["breakfast"];
	$lunch = $row["lunch"];
	$dinner = $row["dinner"];

	$show_breakfast = explode(', ', $breakfast);
	$show_lunch = explode(', ', $lunch);
	$show_dinner = explode(', ', $dinner);

?>		
	   	<div id="diet_box">
		    <div id="diet_title">
		    	<span>식단</span>
			</div>
			<div id="move_day">
		    	<ul>
					<li>
						<span><a href='diet_form.php?day=<?=$prev_day?>'><img src='/2017136130_텀프로젝트_최만진/img/prev_but.png'></a></span>
						<span><?=$day?></span>
						<span><a href='diet_form.php?day=<?=$next_day?>'><img src='/2017136130_텀프로젝트_최만진/img/next_but.png'></a></span>
					</li>
				</ul>
			</div>
			<div id="diet_table">
				<table>
					<tr><td>날짜</td><td>아침</td><td>점심</td><td>저녁</td></tr>
					<tr>
						<td>
<?php
						echo $day;
?>
						</td>
						<td><ul>
<?php
		for($i=0; $i<count($show_breakfast); $i++)
			echo "<li>$show_breakfast[$i]</li>";
?>
						</ul></td>
						<td><ul>
<?php
		for($i=0; $i<count($show_lunch); $i++)
			echo "<li>$show_lunch[$i]</li>";
?>
						</ul></td>
						<td><ul>
<?php
		for($i=0; $i<count($show_dinner); $i++)
			echo "<li>$show_dinner[$i]</il>";
?>
						</ul></td>
					</tr>
				</table>

<?php
   mysqli_close($con);									// MySQL 서버 종료
?>				
				
			</div>	<!-- diet_table -->
		</div> <!-- diet_box -->
</section> 
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
</body>
</html>
