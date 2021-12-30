<?php
    $num = $_GET["num"];                            // 레코드 번호
    $page = $_GET["page"];                          // 페이지 번호

    $title = $_POST["title"];                       // 제목
    $content = $_POST["content"];                   // 내용 전달 받기
          
    $con = mysqli_connect("localhost", "user1", "12345", "term_project");     // MySQL 서버 연결
    $sql = "update fix set title='$title', content='$content' ";          // 업데이트 명령
    $sql .= " where num=$num";                      // 해당 레코드 번호의 레코드 내용을
    mysqli_query($con, $sql);                       // 명령 실행

    mysqli_close($con);                             // MySQL 서버 연결 종료

    echo "
	      <script>
	          location.href = 'fix_list_form.php?page=$page';
	      </script>
	  ";
?>

   
