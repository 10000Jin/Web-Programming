<?php
	$id = $_GET["id"];

	$con = mysqli_connect("localhost", "user1", "12345", "term_project"); // MySQL 서버 연결

	$sql = "select * from apply where id = '$id'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);

	$pay = $row["pay"];
	$room = $row["room"];

	if ($pay!=1){
		echo("
					<script>
                    alert('관리비를 납부하지 않았습니다!');
                    history.go(-1)
                    </script>
			");
	}
	else{
		$sql = "update members set room='$room' where id = '$id'";
		mysqli_query($con, $sql);

		$sql = "delete from apply where id = '$id'";
		mysqli_query($con, $sql);

		echo "
	     <script>
	         location.href = '/2017136130_텀프로젝트_최만진/my_admin_page/admin_page_form.php';
	     </script>
	   ";
	}