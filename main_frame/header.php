 <?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["admin"])) $admin = $_SESSION["admin"];
    else $admin = "";
                        // 세션 변수에 값이 설정되어 있으면 그 값을 각 변수에 저장 없으면 null 저장
?>		
        <div id="head">
            <h3>
                <a href="/2017136130_텀프로젝트_최만진/main_frame/index.php"><img src="/2017136130_텀프로젝트_최만진/img/logo.jpg"></a>
            </h3>
            <ul id="head_login_menu">  

<?php
    if(!$userid) {                                                // 로그인 상태가 아니면
?>                
                <li><a href="/2017136130_텀프로젝트_최만진/login/new_regist_form.php">회원가입</a> </li>
                <li> | </li>
                <li><a href="/2017136130_텀프로젝트_최만진/login/login_form.php">로그인</a></li>
<?php
    } else {                                                      // 로그인 상태면
                $logged = $username."님 환영합니다.";
?>
                <li><?=$logged?> </li>
                <li> | </li>
                <li><a href="/2017136130_텀프로젝트_최만진/login/logout.php">로그아웃</a> </li>
                <li> | </li>
<?php
    if ($admin!=1){
?>
                <li><a href="/2017136130_텀프로젝트_최만진/my_admin_page/mypage_form.php">마이페이지</a></li>
<?php
    }}
?>
<?php
    if($admin==1) {                                               // 관리자라면
?>
                <li><a href="/2017136130_텀프로젝트_최만진/my_admin_page/admin_page_form.php">관리자모드</a></li>
<?php
    }
?>
            </ul>
        </div>      
        <div id="menu_bar">                                       <!-- 메뉴바 -->
            <div id="menu_list">
                <ul>  
                    <li><a href="/2017136130_텀프로젝트_최만진/dorm_intro/greeting_form.php">학사 소개</a>
                        <ul class="intro">
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_intro/greeting_form.php">생활관장 인사말</a></li>
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_intro/facility_intro_form.php">시설 소개</a></li>
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_intro/way_come_form.php">오시는 길</a></li>
                        </ul>
                    </li>
                    <li><a href="/2017136130_텀프로젝트_최만진/dorm_info/reward_penalty_form.php">학사 안내</a>
                        <ul class="info">
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_info/reward_penalty_form.php">상벌점표</a></li>
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_info/contact_num_form.php">비상 연락망</a></li>
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_info/in_criteria_form.php">선발 기준</a></li>
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_info/in_out_intro_form.php">입퇴사 안내</a></li>
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_info/pay_form.php">관리비</a></li>
                        </ul>   
                    </li>                             
                    
<?php
    if(!$userid){                                               // 로그인 상태가 아니라면 경고창
?>
                    <li><a href="javascript:alert('로그인 후 이용해 주세요!')">학사 입사</a>
                        <ul class="getin">

                            <li><a href="javascript:alert('로그인 후 이용해 주세요!')">입사신청</a></li>
                            <li><a href="javascript:alert('로그인 후 이용해 주세요!')">선발결과 조회</a></li>
                            <li><a href="javascript:alert('로그인 후 이용해 주세요!')">체크리스트</a></li>
<?php
    }
    else{                                                    // 로그인 상태라면 이동가능
?>
                    <li><a href="/2017136130_텀프로젝트_최만진/dorm_join/apply/join_apply_form.php">학사 입사</a>
                        <ul class="getin">
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_join/apply/join_apply_form.php">입사신청</a></li>
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_join/join_result_form.php">선발결과 조회</a></li>
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_join/check_list_form.php">체크리스트</a></li>
<?php
    }
?>                           
                            
                        </ul>
                    </li>
                    <li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/notice/notice_list_form.php">커뮤니티</a>
                        <ul class="cum">
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/notice/notice_list_form.php">공지사항</a></li>
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/fix/fix_list_form.php">고장/수리 요청</a></li>
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/board/board_list_form.php">자유게시판</a></li>
                            <li><a href="/2017136130_텀프로젝트_최만진/dorm_commu/diet/diet_form.php">식단</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div id="space"></div>