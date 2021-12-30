<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/main.css">
</head>
<body> 
	<header>
    	<?php include "header.php";?>				<!-- 헤더표시 -->
    </header>
	<section>
<?php
	if (isset($_GET["meal"]))					// main.php에서 아침인지 점심인지 저녁인지 받아옴
        $meal = $_GET["meal"];					
    else
        $meal = 'breakfast';					// 없으면 기본값 아침

    $_GET["meal"] = $meal;					// 어느식단인지 main.php에 전달 (include로 값 넘기기)

	include "main.php";								// 메인 표시
?>
	    
	</section> 
	<footer>
    	<?php include "footer.php";?>				<!-- 푸터 표시 -->
    </footer>
</body>
</html>
