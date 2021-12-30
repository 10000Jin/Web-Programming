<div id="main_img">
    <img src="/2017136130_텀프로젝트_최만진/img/main_img(4).jpg" id="mainImage">

    <script>                    // 자바스크립트
        var myImage = document.getElementById("mainImage");
        var imageArray = ["/2017136130_텀프로젝트_최만진/img/main_img(1).jpg", "/2017136130_텀프로젝트_최만진/img/main_img(2).jpg", "/2017136130_텀프로젝트_최만진/img/main_img(3).jpg", "/2017136130_텀프로젝트_최만진/img/main_img(4).jpg"];
        var imageIndex = 0;

        function chageImage(){              // 이미지를 바꿔 표시하는 함수
            myImage.setAttribute("src", imageArray[imageIndex]); // id값이 myImage인 요소의
            imageIndex++;                           // src속성을 이미지 배열중 하나로 정함.
            if(imageIndex >= imageArray.length){    // 인덱스를 1증가하다 이미지 배열의 
                imageIndex = 0;                     // 크기와 같아지면 다시 첫 사진으로
            }
        }
        setInterval(chageImage, 2500);              // 2500ms마다 chageImage함수 실행
    </script>
</div>
<div id="main_content">
    <div id="notice_fix">
        <div id="notice">
            <h4><a href="/2017136130_텀프로젝트_최만진/dorm_commu/notice/notice_list_form.php">공지사항</a></h4>
            <ul>
<!-- 최근 게시 글 DB에서 불러오기 -->
<?php
    $con = mysqli_connect("localhost", "user1", "12345", "term_project");     // MySQL 서버 연결
    $sql = "select * from notice order by num desc limit 5";         // 내림차순 5개 가져오는 명령
    $result = mysqli_query($con, $sql);                             // 명령 실행

    if (!$result)                                                   // 게시글이 없다면
        echo "공지사항 DB 테이블(notice)이 생성 전이거나 아직 게시글이 없습니다!";
    else
    {
        while( $row = mysqli_fetch_array($result) )     // 반복문으로 각각의 레코드 $row 저장
        {
            $regist_day = substr($row["regist_day"], 0, 10);    // 날짜 앞에서 10글자 추출
            $num = $row["num"];
?>
                <li>
                    <span><a href="/2017136130_텀프로젝트_최만진/dorm_commu/notice/notice_view_form.php?num=<?=$num?>&page=1"><?=$row["title"]?></a></span>        
                    <span><?=$row["name"]?></span>           <!-- 제목, 작성자, 날짜 출력 -->
                    <span><?=$regist_day?></span>
                </li>
<?php
        }
    }
?>
            </ul>
        </div>      <!-- notice -->
        <div id="fix">
            <h4><a href="/2017136130_텀프로젝트_최만진/dorm_commu/fix/fix_list_form.php">고장/수리 요청</a></h4>
            <ul>
<?php
    $sql = "select * from fix order by num desc limit 5";   // 내림차순으로 5개 가져옴
    $result = mysqli_query($con, $sql);

    if (!$result)                                           // 게시글이 없다면
        echo "고장/수리 요청 DB 테이블(fix)이 생성 전이거나 아직 게시글이 없습니다!";
    else
    {
        while( $row = mysqli_fetch_array($result) )     // 반복문으로 각각의 레코드 $row 저장
        {
            $regist_day = substr($row["regist_day"], 0, 10);        // 날짜 앞에서 10글자 추출
            $num = $row["num"];
?>
            <li>
                <span><a href="/2017136130_텀프로젝트_최만진/dorm_commu/fix/fix_view_form.php?num=<?=$num?>&page=1"><?=$row["title"]?></a></span>         
                <span><?=$row["name"]?></span>          <!-- 제목, 작성자, 날짜 출력 -->
                <span><?=$regist_day?></span>
            </li>
        </dic>      <!-- fix -->
<?php
        }
    }
?>

        </ul>
    </div>      <!-- notice_fix -->

    <div id="diet">
        <h4><a href="/2017136130_텀프로젝트_최만진/dorm_commu/diet/diet_form.php">오늘의 식단</a></h4>
        <ul>
<?php
    date_default_timezone_set('Asia/Seoul');                    // 서울 시간으로 설정
    $day = date("y-n-j");                                       // day변수에 오늘 날짜 저장

    $sql = "select * from diet where day='$day'";               // 오늘에 해당하는 레코드 가져옴
    $result = mysqli_query($con, $sql);

    if (!$result)                                               // 없으면 경고창
        echo "식단 DB 테이블(diet)이 생성 전이거나 아직 게시글이 없습니다!";
    else{
        $row = mysqli_fetch_array($result);                     // 한 레코드를 가져와서
        $day = $row["day"];                                     // 각 필드의 내용들 변수에 저장
        $breakfast = $row["breakfast"];
        $lunch = $row["lunch"];
        $dinner = $row["dinner"];

        $show_breakfast = explode(', ', $breakfast);            // 식단 내용 ", "를 기준으로 
        $show_lunch = explode(', ', $lunch);                    // 나누어 저장 (explode 함수)
        $show_dinner = explode(', ', $dinner);
    }

    if (isset($_GET["meal"]))                                   // index.php에서 받아온게 있으면
        $meal = $_GET["meal"];                                  // $meal에 저장
    else
        $meal = 'breakfast';                                    // 없으면 기본값 아침 저장
?>

        <div id="diet_table">
            <table>
                <tr><td></td><td><?=$day?></td></tr>            <!-- 오늘날짜 출력 -->
                <tr>
                    <td id="buttons"><ul>   
                            <li><a href="index.php?meal=<?='breakfast'?>"><img src='../img/breakfast.png'></a></li>
                            <li><a href="index.php?meal=<?='lunch'?>"><img src='../img/lunch.png'></a></li>
                            <li><a href="index.php?meal=<?='dinner'?>"><img src='../img/dinner.png'></a></li>
                        </ul></td>  <!-- 각사진 누르면 index.php에 어떤밥인지 전달 (get방식) -->
                    <td><ul>
<?php
        if($meal == "breakfast"){                               // 아침밥이면 
            for($i=0; $i<count($show_breakfast); $i++)
                echo "<li>$show_breakfast[$i]</li>";            // 식단 가짓수만큼 반복 출력
        }
        else if($meal == "lunch"){
            for($i=0; $i<count($show_lunch); $i++)
            echo "<li>$show_lunch[$i]</li>";
        }
        else if($meal == "dinner"){
            for($i=0; $i<count($show_dinner); $i++)
            echo "<li>$show_dinner[$i]</il>";
        }
?>  
                    </ul></td></tr>
            </table>       
        </dic>      <!-- diet_table -->
    </div>      <!-- diet -->

<?php
    mysqli_close($con);                                         // MySQL 서버 연결 종료
?>
               
</div>      <!-- main_content -->