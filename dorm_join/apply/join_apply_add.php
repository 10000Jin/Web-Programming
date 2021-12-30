<?php
    session_start();
    $userid = $_SESSION["userid"];

    $con = mysqli_connect("localhost", "user1", "12345", "term_project"); // MySQL 서버 연결
    $sql = "select * from members where id='$userid'";          // MySQL 명령 로그인한 사람 정보
    $result = mysqli_query($con, $sql);                 // MySQL 명령 실행

    $row = mysqli_fetch_array($result);                 // 하나의 레코드 가져오기
    $id = $row["id"];                                   // 필드별로 각 변수에 저장
    $name = $row["name"];                   
    $phone = $row["phone"];
    $email = $row["email"];
    $pay = "";                                    // 납부 확인변수 $pay는 일단 공백 초기화
    
    date_default_timezone_set('Asia/Seoul');                    // 서울 시간으로 설정
    $regist_day = date("Y-m-d (H:i)");


    $dong  = $_POST["dong"];                            // join_apply_form.php에서 받아온 
    $ho  = $_POST["ho"];                                // 호실 정보

    $room = $dong.$ho;                            // 동 호수를 합침
              

  	$sql2 = "insert into apply(id, name, phone, room, pay, regist_day, email) ";
    $sql2 .= "values('$id', '$name', '$phone', '$room', '$pay', '$regist_day', '$email')";   
                                                  // MySQL 명령 설정 (삽입)

  	mysqli_query($con, $sql2);  // $sql 에 저장된 명령 실행
    mysqli_close($con);         // MySQL 서버 연결 종료

    echo "
      <script>
          location.href = '/2017136130_텀프로젝트_최만진/dorm_join/apply/join_apply_fin_form.php';      
      </script>
    ";                                                                  // 메인 페이지 이동
?>

   
