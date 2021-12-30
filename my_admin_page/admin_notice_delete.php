<?php
    if (isset($_POST["item"]))
        $num_item = count($_POST["item"]); 
    else                                                            // 체크한게 없으면 경고창
        echo("
                    <script>
                    alert('삭제할 게시글을 선택해주세요!');
                    history.go(-1)
                    </script>
        ");

    $con = mysqli_connect("localhost", "user1", "12345", "term_project"); // MySQL 서버 연결

    for($i=0; $i<count($_POST["item"]); $i++){
        $num = $_POST["item"][$i];                              // 체크한 게시글의 일련번호 하나씩

        $sql = "select * from notice where num = $num";         // 해당하는 레코드 가져옴
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        $copied_name = $row["file_copied"];                     // 첨부 파일명 가져옴

        if ($copied_name)                                       // 파일이 존재한다면
        {
            $file_path = "/2017136130_텀프로젝트_최만진/data/notice_data/".$copied_name;
            unlink($file_path);                                 // unlink로 첨부 파일 삭제
        }

        $sql = "delete from notice where num = $num";            // MySQL 삭제 명령 
        mysqli_query($con, $sql);
    }       

    mysqli_close($con);

    echo "
	     <script>
	         location.href = '/2017136130_텀프로젝트_최만진/my_admin_page/admin_page_form.php';
	     </script>
	   ";
?>

