<?php
    $real_name = $_GET["real_name"];                        // 서버에 저장된 파일명
    $file_name = $_GET["file_name"];                        // 파일명
    $file_type = $_GET["file_type"];                        // 파일 형식
    $file_path = $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/data/board_data/".$real_name;               // 파일 경로

    $ie = preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || 
        (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0') !== false && 
            strpos($_SERVER['HTTP_USER_AGENT'], 'rv:11.0') !== false);
                        //인터넷 익스플로러인 경우 한글파일명이 깨지는 경우를 방지하기 위한 코드 
    
    if( $ie ){                                          // 익스플로러인 경우 파일명의 문자셋 변경
         $file_name = iconv('utf-8', 'euc-kr', $file_name);         // utf-8 -> euc-kr로 변경
    }                                                   // iconv()함수 : 문자열의 문자셋 변경 함수

    if( file_exists($file_path) )                       // 파일의 존재 확인
    { 
		$fp = fopen($file_path,"rb");                         // 파일을 읽고 쓸수 있는 모드로 열기
		Header("Content-type: application/x-msdownload"); 
        Header("Content-Length: ".filesize($file_path));     
        Header("Content-Disposition: attachment; filename=".$file_name);   
        Header("Content-Transfer-Encoding: binary"); 
		Header("Content-Description: File Transfer"); 
        Header("Expires: 0");                                  // 파일 정보 알려줌
    } 
	
    if(!fpassthru($fp))                                     // 사용자 컴퓨터로 파일 전송
		fclose($fp);                                        // 파일 닫기
?>

  
