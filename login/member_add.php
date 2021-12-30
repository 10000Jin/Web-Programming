<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    $email = $email1."@".$email2;
    $num = $num1."-".$num2."-".$num3;

    date_default_timezone_set('Asia/Seoul');                    // 서울 시간으로 설정
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

              
    $con = mysqli_connect("localhost", "user1", "12345", "term_project");      // MySQL 서버 연결

	$sql = "insert into members(id, pass, name, phone, email, regist_day) ";   // MySQL 명령 설정
	$sql .= "values('$id', '$pass', '$name', '$num', '$email', '$regist_day')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);         // MySQL 서버 연결 종료

    echo "
      <script>
          location.href = '/2017136130_텀프로젝트_최만진/main_frame/index.php';      
      </script>
    ";                                                                  // 메인 페이지 이동
?>

   
