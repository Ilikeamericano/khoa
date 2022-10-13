<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
html{
	scroll-behavior: smooth;
}
body{
	background-color: #ccc;
}
.title-bg-01{
	background-image: url(http://www.koh-a.com/img/bg_company.jpg);
    padding-top: 15%;
    text-align: center;
	z-index: 0;
}
.lli{
	list-style: none;
    float: left;
    font-size: 20px;
    font-weight: 900;
    padding: 0px 55px;
	color:#000;
}
.ullli{
    background-color: #fff;
}
.title-menu-4{
    display: inline-block;
    border: 1px solid #9d9d9d;
	padding: 15px 90px;
	float: left;
}
.title-001{
    padding-top: 45px;
	padding-bottom: 70px;    
}
.out{
    margin: 0 50px;
    border: 2px solid #e0e0e0;
}
.title-tiping{
	margin-top: 100px;
    text-align: center;
    font-size: 30px;
    font-weight: 900;
	padding-bottom: 60px;
}
.image-array{
	padding: 0 50px;
    text-align: center;
}
.map-1{
	border: 1px solid #CCCCCC;
    margin: 45px 48px 25px 48px;
}
.address-row {
	float:left;
	width:100%;
	border-bottom:1px solid #B7B7B7;
}
.address-row-left {
	float: left;
	margin: 13px 0px;
	font-size: 24px;
	line-height: 97px;
	font-weight: 900;
	width: 200px;
	text-align: center;
}
.address-row-left img {
	float:right;
}
.address-row-right {
	float: left;
	font-size: 18px;
	padding: 24px 30px;
	line-height: 37px;
	padding-right: 0px;
}
.address-row-arrow {
	float: right;
	line-height: 122px;
	margin-right: 15px;
	cursor:pointer;
}
</style>
<script>
	function slideMap(num) {
		if($('#gn-map-'+num).css("display") == "none"){
			$('#gn-map-'+num).slideDown(300) ;
			$('#arrow-'+num).attr("src", 'http://koh-a.com/img/gn_arrow2.png');
		} else {
			$('#gn-map-'+num).slideUp(300) ;
			$('#arrow-'+num).attr("src", 'http://koh-a.com/img/gn_arrow.png');
		}
	}
</script>
<div style="background-color: #ccc;">
	<div class="title-bg-01">
		<div style="font-size: 50px;font-weight: 900;color: #fff;text-shadow: 3px 3px 3px #000;padding-bottom: 15%;">COMPANY</div>

	</div>
	<div class="at-container" style="overflow: initial;">
		<div class="ullli" style="margin-top: -62px;">
			<ul style="display: flex; justify-content: center; padding: 20px 0;">
				<a href="http://sungtaek13.dothome.co.kr/bbs/page.php?hid=company_1"><li class="lli">회사소개</li></a>
				<a href="http://sungtaek13.dothome.co.kr/bbs/page.php?hid=company_2"><li class="lli">회사연혁</li></a>
				<a href="http://sungtaek13.dothome.co.kr/bbs/page.php?hid=company_3" style="border-bottom: 2px solid; padding-bottom: 15px;"><li class="lli">글로벌네트워크</li></a>
				<a href="http://sungtaek13.dothome.co.kr/bbs/page.php?hid=company_4"><li class="lli">인증 및 특허</li></a>
			</ul>
		</div>
	</div>
	<div class="at-container">
		<div class="ullli" style="margin-bottom: 70px;">
			<div class="title-001">
				<div class="out">
					<ul class="nav nav-tabs" style="list-style: none; text-align: center; font-size: 20px; padding-left: 0px;">
						<a href="#domestic" class="active" data-toggle="tab" ><li class="title-menu-4">국내</li></a>
						<a href="#Overseas" class="" data-toggle="tab" ><li class="title-menu-4">해외</li></a>
					</ul>
					<div>
						<div class="title-tiping"><b>GLOBAL OPERTATION! ACHIEVE LEADERSHIP!</b></div>
					</div>
					<div class="image-array">
						<img src="http://koh-a.com/img/gn_img_01.png">
						<img src="http://koh-a.com/img/gn_img_02.png">
						<img src="http://koh-a.com/img/gn_img_03.png">
						<img src="http://koh-a.com/img/gn_img_04.png">
						<img src="http://koh-a.com/img/gn_img_05.png">
					</div>
					<div class="">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="domestic">
								<img src="http://koh-a.com/img/gn_img_06.png" style="margin-top: 45px; margin-bottom: 25px;">
								<div class="address-list">
									<div class="address-row">
										<div class="address-row-left">대구본사<img src="http://koh-a.com/img/line.jpg"/></div>
										<div class="address-row-right">대구시 북구 산격동 1666번지 조명관 관리동 크리스탈B/D 4F</br>
										<b>전화</b> 053-383-3001 | <b>팩스</b> 053-383-3009</div>
										<div class="address-row-arrow" onClick="slideMap(1)"><img src="http://koh-a.com/img/gn_arrow.png" id="arrow-1"/></div>
									</div>
									<div class="address-map" id="gn-map-1" style="display:none;">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1142.5770674148073!2d128.60891527714497!3d35.90546119012727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ab01c4e605847ce!2z6rO16rCE7KGw66qF!5e0!3m2!1sko!2skr!4v1587587830047!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</div>
									
									<div class="address-row">
										<div class="address-row-left">서울수출팀<img src="http://koh-a.com/img/line.jpg"/></div>
										<div class="address-row-right">서울시 강남구 대치동 891-36 제나(승진) 빌딩 5F</br>
										<b>전화</b> 02-798-3010 | <b>팩스</b> 02-798-3012</div>
										<div class="address-row-arrow"onClick="slideMap(2)"><img src="http://koh-a.com/img/gn_arrow.png" id="arrow-2"/></div>
									</div>
									<div class="address-map" id="gn-map-2" style="display:none;">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1142.5770674148073!2d128.60891527714497!3d35.90546119012727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ab01c4e605847ce!2z6rO16rCE7KGw66qF!5e0!3m2!1sko!2skr!4v1587587830047!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</div>
									
									<div class="address-row">
										<div class="address-row-left">경주공장<img src="http://koh-a.com/img/line.jpg"/></div>
										<div class="address-row-right">경북 경주시 강동면 왕신리563번지</br>
										<b>전화</b> 054-762-9470 | <b>팩스</b> 054-762-5508</div>
										<div class="address-row-arrow"onClick="slideMap(3)"><img src="http://koh-a.com/img/gn_arrow.png" id="arrow-3"/></div>
									</div>
									<div class="address-map" id="gn-map-3" style="display:none;">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3229.2248161033594!2d129.2925372156173!3d35.96592872191212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3566556b5fefaabb%3A0x415a3d4b065819f2!2z6rK97IOB67aB64-EIOqyveyjvOyLnCDqsJXrj5nrqbQg7JmV7Iug66asIDU2Mw!5e0!3m2!1sko!2skr!4v1587588660562!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</div>
									
									<div class="address-row">
										<div class="address-row-left">의성공장<img src="http://koh-a.com/img/line.jpg"/></div>
										<div class="address-row-right">경북 의성군 의성읍 용연리 682번지</br>
										<b>전화</b> 054-833-5951 | <b>팩스</b> 054-833-5955</div>
										<div class="address-row-arrow"onClick="slideMap(4)"><img src="http://koh-a.com/img/gn_arrow.png" id="arrow-4"/></div>
									</div>
									<div class="address-map" id="gn-map-4" style="display:none;">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3214.107123915436!2d128.6657825156244!3d36.333953501504496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35668262306cc641%3A0xa7a82eb58fd9daae!2z6rK97IOB67aB64-EIOydmOyEseq1sCDsnZjshLHsnY0g7Jqp7Jew66asIDY4Mg!5e0!3m2!1sko!2skr!4v1587588679308!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</div>
									
									<div class="address-row">
										<div class="address-row-left">광주공장<img src="http://koh-a.com/img/line.jpg"/></div>
										<div class="address-row-right">광주 북구 첨단벤처로60번길 20 (대촌동)</br>
										<b>전화</b> 062-720-2700 | <b>팩스</b> 062-720-2709</div>
										<div class="address-row-arrow"onClick="slideMap(5)"><img src="http://koh-a.com/img/gn_arrow.png" id="arrow-5"/></div>
									</div>
									<div class="address-map" id="gn-map-5" style="display:none;">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1629.6091670286585!2d126.85877785822974!3d35.22593458613002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35718e0e552e800b%3A0x26937b3ffb4ca3da!2z6rOg7JWE7KCV6rO16rSR7KO86rO17J6l!5e0!3m2!1sko!2skr!4v1587588733982!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</div>
									
									<div class="address-row">
										<div class="address-row-left">코아텍시스템즈<img src="http://koh-a.com/img/line.jpg"/></div>
										<div class="address-row-right">경남 창원시 성산구 창원대로1144번길 41</br>
										<b>전화</b> 055-716-0330 | <b>팩스</b> 055-716-0331</div>
										<div class="address-row-arrow"onClick="slideMap(6)"><img src="http://koh-a.com/img/gn_arrow.png" id="arrow-6"/></div>
									</div>
									<div class="address-map" id="gn-map-6" style="display:none;">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3260.565903414392!2d128.704108315603!3d35.192370564233464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3568cdbb3beabc61%3A0x31fef8a6eab1b26d!2z6rK97IOB64Ko64-EIOywveybkOyLnCDshLHsgrDqtawg7ISx7KO864-ZIOywveybkOuMgOuhnDExNDTrsojquLggNDE!5e0!3m2!1sko!2skr!4v1587588765684!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</div>
									
									<div class="address-row">
										<div class="address-row-left">연구소<img src="http://koh-a.com/img/line.jpg"/></div>
										<div class="address-row-right">광주 북구 첨단벤처로60번길 20 (대촌동)</br>
										<b>전화</b> 022-8699-8221 | <b>팩스</b> 022-8699-8223</div>
										<div class="address-row-arrow"onClick="slideMap(7)"><img src="http://koh-a.com/img/gn_arrow.png" id="arrow-7"/></div>
									</div>
									<div class="address-map" id="gn-map-7" style="display:none;">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1629.6091670286585!2d126.85877785822974!3d35.22593458613002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35718e0e552e800b%3A0x26937b3ffb4ca3da!2z6rOg7JWE7KCV6rO16rSR7KO86rO17J6l!5e0!3m2!1sko!2skr!4v1587588733982!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</div>
									<div>&nbsp;</div>
								</div>
							</div>
							<div class="tab-pane fade" id="Overseas">
								<img src="http://koh-a.com/img/gn_img_07.png" style="margin-top: 45px; margin-bottom: 25px;">
								<div class="address-list">
									<div class="address-row">
										<div class="address-row-left">중국태주<img src="http://koh-a.com/img/line.jpg"/></div>
										<div class="address-row-right">태주시 해릉구 해릉공업원구 홍업로 96호 표준엄방제3당 보아전자(태주) 유한공사</br>
										<b>전화</b> 0523-8608-9171</div>
										<div class="address-row-arrow" onClick="slideMap(8)"><img src="http://koh-a.com/img/gn_arrow.png" id="arrow-8"/></div>
									</div>
									<div class="address-map" id="gn-map-8" style="display:none;">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1142.5770674148073!2d128.60891527714497!3d35.90546119012727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ab01c4e605847ce!2z6rO16rCE7KGw66qF!5e0!3m2!1sko!2skr!4v1587587830047!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</div>
									
									<div class="address-row">
										<div class="address-row-left">중국천진<img src="http://koh-a.com/img/line.jpg"/></div>
										<div class="address-row-right">천진시 북신구 진위공로9호 (LG내) 보아전자(천진)유한공사</br>
										<b>전화</b> 022-2699-0508</div>
										<div class="address-row-arrow"onClick="slideMap(9)"><img src="http://koh-a.com/img/gn_arrow.png" id="arrow-9"/></div>
									</div>
									<div class="address-map" id="gn-map-9" style="display:none;">
										<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1142.5770674148073!2d128.60891527714497!3d35.90546119012727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ab01c4e605847ce!2z6rO16rCE7KGw66qF!5e0!3m2!1sko!2skr!4v1587587830047!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</div>
									<div>&nbsp;</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

