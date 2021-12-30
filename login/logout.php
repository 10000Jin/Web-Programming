<?php
  session_start();
  unset($_SESSION["userid"]);                             // 세션 삭제
  unset($_SESSION["username"]);
  unset($_SESSION["admin"]);
  
  echo("
       <script>
          location.href = '/2017136130_텀프로젝트_최만진/main_frame/index.php';                    
         </script>
       ");													// 메인 페이지로 이동
?>
