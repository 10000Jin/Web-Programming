<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];

   $con = mysqli_connect("localhost", "user1", "12345", "term_project");       // MySQL 서버 연결
   $sql = "select * from members where id='$id'";                    // 동일한 id 있는지 검사 명령
   $result = mysqli_query($con, $sql);                            // 명령어 실행 -> result에 저장

   $num_match = mysqli_num_rows($result);                             // 동일한 id 개수 저장

   if(!$num_match)                                              // 동일한 id가 없다면(존재x)
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')          
             history.go(-1)                                     
           </script>
         ");                                                      // 경고 창, 이전 페이지 이동
    }
    else                                                        // 동일한 id가 있다면(존재)
    {
        $row = mysqli_fetch_array($result);                   // 해당 레코드 가져와 row에 저장
        $db_pass = $row["pass"];                              // row의 pass 필드 db_pass에 저장 

        mysqli_close($con);                                   // MySQL 서버 연결 종료

        if($pass != $db_pass)                                 // 비밀번호가 다르면
        {

           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')             
                history.go(-1)                              
              </script>
           ");                                                // 경고 창
           exit;
        }
        else
        {
            session_start();
            $_SESSION["userid"] = $row["id"];                   // 세션 생성
            $_SESSION["username"] = $row["name"];
            $_SESSION["admin"] = $row["admin"];

            echo("
              <script>
                location.href = '/2017136130_텀프로젝트_최만진/main_frame/index.php';                    
              </script>
            ");                                                // 로그인 완료후 메인 페이지 이동
        }
     }        
?>
