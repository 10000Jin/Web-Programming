<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    
    $title = $_POST["title"];
    $content = $_POST["content"];

	$title = htmlspecialchars($title, ENT_QUOTES);				
	$content = htmlspecialchars($content, ENT_QUOTES);
	// 어떤 문자들을 HTML에서 특별한 정의를 가지기 떄문에 사용자 입력 텍스트를 보존하기 위해서는 HTML 엔터티로 표현해야함. -> htmlspecialchars 함수

	date_default_timezone_set('Asia/Seoul');					// 서울 시간으로 설정
	$regist_day = date("Y-m-d (H:i)");  						// 현재의 '년-월-일-시-분'을 저장

	$upload_dir = $_SERVER["DOCUMENT_ROOT"].'/2017136130_텀프로젝트_최만진/data/fix_data/';									// 업로드 파일 저장 폴더 

	$upfile_name	 = $_FILES["upfile"]["name"];				// 업로드 파일명
	$upfile_tmp_name = $_FILES["upfile"]["tmp_name"];			// 임시 파일명
	$upfile_type     = $_FILES["upfile"]["type"];				// 파일의 형식
	$upfile_size     = $_FILES["upfile"]["size"];				// 파일의 크기
	$upfile_error    = $_FILES["upfile"]["error"];				// 오류 발생 코드


	if ($upfile_name && !$upfile_error)						// 업로드시 오류가 발생하지 않으면
	{
		$file = explode(".", $upfile_name);					// explode -> 파일명, 확장자 분리
		$file_name = $file[0];
		$file_ext  = $file[1];

		$new_file_name = date("Y_m_d_H_i_s");				// 파일명 중복 방지 (시간을 파일명)
		$new_file_name = $new_file_name;
		$copied_file_name = $new_file_name.".".$file_ext;   // 파일명에 확장자 붙임
		$uploaded_file = $upload_dir.$copied_file_name;		// 경로까지 붙임

		if( $upfile_size  > 5000000 ) {						// 업로드 파일의 크기 제한
				echo("
				<script>
				alert('업로드 파일 크기가 지정된 용량(5MB)을 초과합니다! \\n파일 크기를 체크해주세요! ');
				history.go(-1)
				</script>
				");								// 크기 제한 넘을시 경고창, 이전 페이지 이동
				exit;
		}

		if (!move_uploaded_file($upfile_tmp_name, $uploaded_file) )// 업로드 파일 data폴더에 저장
		{										// 임시 저장 파일 -> 경로/파일명 형태로 저장
				echo("
					<script>
					alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
					history.go(-1)
					</script>
				");								// 오류발생시 경고창 출력, 이전 페이지 이동
				exit;
		}
	}
	else 
	{
		$upfile_name      = "";
		$upfile_type      = "";
		$copied_file_name = "";
	}
	

	$con = mysqli_connect("localhost", "user1", "12345", "term_project");	// MySQL 서버 연결

	$sql = "insert into fix (id, name, title, content, regist_day, count,  file_name, file_type, file_copied) ";											// MySQL 명령 설정
	$sql .= "values('$userid', '$username', '$title', '$content', '$regist_day', 0, ";
	$sql .= "'$upfile_name', '$upfile_type', '$copied_file_name')";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

	mysqli_close($con);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'fix_list_form.php';
	   </script>
	";
?>

  
