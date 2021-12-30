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
<h3>아이디 중복체크</h3>
<p>
<?php
   $id = $_GET["id"];                                       // ID 전달받기

   if(!$id) 
   {
      echo("<li>아이디를 입력해 주세요!</li>");
   }
   else
   {
      $con = mysqli_connect("localhost", "user1", "12345", "term_project");    // MySQL 서버 연결


 
      $sql = "select * from members where id='$id'";      // members 테이블에 동일한 id있는지 검사
      $result = mysqli_query($con, $sql);                // 명령 실행후 중복 id 결과 result에 저장

      $num_record = mysqli_num_rows($result);               // 중복 id 개수 num_record에 저장

      if ($num_record){                                        // 중복이 있으면
         echo "<li>".$id."는 이미 사용중입니다..</li>";
         echo "<li>다른 아이디를 사용해 주세요!</li>";
      }
      else{
         echo "<li>".$id."는 사용이 가능합니다..</li>";
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
