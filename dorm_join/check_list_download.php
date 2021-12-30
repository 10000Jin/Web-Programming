<?php

	$file_path = $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/data/check_list.hwp";
	
    if( file_exists($file_path) )                       // 파일의 존재 확인
    { 
		$fp = fopen($file_path,"rb");                         // 파일을 읽고 쓸수 있는 모드로 열기
		Header("Content-type: application/x-msdownload"); 
        Header("Content-Length: ".filesize($file_path));     
        Header("Content-Disposition: attachment; filename="."check_list.hwp");   
        Header("Content-Transfer-Encoding: binary"); 
		Header("Content-Description: File Transfer"); 
        Header("Expires: 0");                                  // 파일 정보 알려줌
    } 
	
    if(!fpassthru($fp))                                     // 사용자 컴퓨터로 파일 전송
		fclose($fp);                                        // 파일 닫기



?>