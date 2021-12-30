<?php

    $num   = $_GET["num"];                      // fix_view_form에서 
    $page   = $_GET["page"];                    // 레코드 일련번호, 페이지 번호 받아옴

    $con = mysqli_connect("localhost", "user1", "12345", "term_project");     // MySQL 서버 연결
    $sql = "select * from fix where num = $num";                      // MySQL 명령 설정
    $result = mysqli_query($con, $sql);                                 // MySQL 명령 실행
    $row = mysqli_fetch_array($result);                     // 하나의 레코드 가져옴

    $copied_name = $row["file_copied"];                     // 서버에 저장된 파일명 저장

	if ($copied_name)                                          // 파일이 존재한다면
	{
		$file_path = "/2017136130_텀프로젝트_최만진/data/fix_data/".$copied_name;
		unlink($file_path);                                   // unlink로 첨부 파일 삭제
    }

    $sql = "delete from fix where num = $num";               // MySQL 삭제 명령 
    mysqli_query($con, $sql);                                  // MySQL 명령 실행
    mysqli_close($con);                                        // MySQL 서버 연결 종료

    echo "
	     <script>
	         location.href = 'fix_list_form.php?page=$page'; 
	     </script>
	   ";                                                      // 목록 보기로 이동
?>

