<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>밀리토피아 송파학사</title>
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/common.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/dorm_intro.css">
<link rel="stylesheet" type="text/css" href="/2017136130_텀프로젝트_최만진/css/sub_menu.css">
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script>								// 구글 지도 api 사용히여 페이지에 지도 표시
  let map;

  function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: 37.478602512736764, lng: 127.14616645576062 },			// 중앙에 오는 좌표값
      zoom: 14.5,																// 줌 레벨
      });

    const myLatLng = { lat: 37.478602512736764, lng: 127.14616645576062 };
    new google.maps.Marker({												// 빨간색 마커 표시
	    position: myLatLng,
	    map,
	    title: "밀리토피아 송파학사",								// 마우스 올려놨을때 제목
    });
  }
</script>
</head>
<body> 
<header>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/header.php";?>
</header>  
<section>
	<div id="upper_line"></div>                                    <!-- 초록색 긴 가로줄 -->
	<div id="main_content">
		<div id="sub_menu">												<!-- 초록색 서브메뉴 -->
			<ul>
				<li>학사 소개
					<ul>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_intro/greeting_form.php">생활관장 인사말</a></li>
						<li><a href="/2017136130_텀프로젝트_최만진/dorm_intro/facility_intro_form.php">시설 소개</a></li>
						<li><span><a href="/2017136130_텀프로젝트_최만진/dorm_intro/way_come_form.php">오시는 길</a></span></li>
					</ul>
				</li>
			</ul>
		</div>           	
	   	<div id="content_box">
		    <div id="content_title">
		    	<span>오시는 길</span>
			</div>
			<div id="map"></div>
			<ul id="way">
				<li id="one">※ 대중교통 : 8호선 장지역 → 장지역, 가든파이브 정류장 → 333, 440 버스 탑승</li>
				<li id="two">→ 위례별초등학교 하차</li>
				<li id="three">※ 자가용 : 송파ic → 남한산성, 위례방면 좌회전 → 창곡교차로 밀리토피아시티 </li>
				<li id="four">방면 좌회전 → 서울위례별초등학교 방면 좌회전</li>
			</ul>
		</div> <!-- content_box -->
	</div>	<!-- main_content -->
</section> 
<footer>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/2017136130_텀프로젝트_최만진/main_frame/footer.php";?>
</footer>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8OWa6omjUzjvH25bLkCnA4VNLN5Xnnho&callback=initMap&libraries=&v=weekly"
  async
></script>							<!-- 구글 지도 api 사용을 위해 api 키값 받아오기 -->
</body>
</html>
