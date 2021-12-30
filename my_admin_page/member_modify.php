<?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $phone = $num1."-".$num2."-".$num3;
    $email = $email1."@".$email2;
          
    $con = mysqli_connect("localhost", "user1", "12345", "term_project");
    $sql = "update members set pass='$pass', name='$name', phone='$phone', email='$email'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = '/2017136130_텀프로젝트_최만진/main_frame/index.php';
	      </script>
	  ";
?>

   
