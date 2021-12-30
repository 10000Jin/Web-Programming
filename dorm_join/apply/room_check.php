<!DOCTYPE html>
<head>
<meta charset="utf-8">
<style>
h3 {
   padding-left: 5px;
   border-left: solid 5px #edbf07;
}
#close {
   margin:20px 0 0 80px;
   cursor:pointer;
}
</style>
</head>
<body>
<h3>호실 중복체크</h3>
<p>
<?php
   $room = $_GET["room"];                                       // room 전달받기

   if(!$room) 
   {
      echo("<li>호실를 입력해 주세요!</li>");
   }
   else
   {
      $con = mysqli_connect("localhost", "user1", "12345", "term_project");    // MySQL 서버 연결


 
      $sql = "select * from members where room='$room'";      // members 테이블에 동일한 room있는지 검사
      $result = mysqli_query($con, $sql);                // 명령 실행후 중복 room 결과 result에 저장

      $num_record = mysqli_num_rows($result);               // 중복 room 개수 num_record에 저장

      if ($num_record){                                        // 중복이 있으면
         echo "<li>".$room."는 이미 사용중입니다..</li>";
         echo "<li>다른 호실을 선택해 주세요!</li>";
      }
      else{
         echo "<li>".$room."는 사용이 가능합니다..</li>";
      }
    
      mysqli_close($con);                                   // MySQL 서버 연결 종료
   }
?>
</p>
<div id="close">
   <img src="/2017136130_텀프로젝트_최만진/img/close.png" onclick="javascript:self.close()">    <!-- 창닫기 -->
</div>
</body>
</html>
