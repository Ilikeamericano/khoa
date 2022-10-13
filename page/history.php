<?php
include_once('../bbs/_common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
?>
<style>
.hi-top{
	background-image: url(<?php echo G5_IMG_URL ?>/hi_bg.png);
	margin-top: -1.3%;
	height: 400px;
	background-size: 100% 100%;
}
.left-hi{
	color: #fff;
	margin-top: 250px;
}
.smalls{
	font-size: 20px;
}
.big{
	font-size: 46px;
    line-height: 50px;
    font-weight: bold;
    padding-top: 13px;
}
.mid-imag{
	background-image: url('<?php echo G5_IMG_URL ?>/slide-02-2-mo.jpg');
    height: 300px;
}
.hi-title{
	padding-top: 100px;
    padding-bottom: 50px;
    font-size: 35px;
    font-weight: bold;
    line-height: 50px;
}
.hi-bt-title{
	font-size: 26px;
    font-weight: bold;
    padding-top: 30px;
	padding-bottom: 20px;
}
.hi-bt-con{
	font-size: 15px;
    font-weight: bold;
}
.hi-bt-text{
	padding-top: 20px;
}
.sel-option{
	width: 100px;
    border: none;
    height: 50px;
	border-left: 1px solid #b2b2b2;
}
.sel-con{
	
}
.his-table{
	width: 100%;
	float: left;
}
.left-title-now{
	float: left;
    font-size: 18px;
    font-weight: bold;
    border-top: 1px solid #222;
    width: 150px;
    padding-top: 15px;
}
.center-title-now{
	float:left;
}
.right-title-now{
	
}
.center-title-li{
	border-top: 1px solid #909090;
    padding: 10px 0px;
}
.right-title-li{
	border-top: 1px solid #ddd;
	padding: 10px 0px;
}
<!-- 가져온것 -->

</style>
</div>
</div>
</div>
<div class="hi-top">
	<div class="at-container">
		<div class="left-hi">
			<div class="smalls">회사소개</div>
			<div class="big">연혁</div>
		</div>
	</div>
</div>
<div style="border-bottom: 1px solid #b2b2b2;">
	<div class="at-container">
		<a href="<?php echo $at_href['main'];?>"><div style="float:left; height: 50px; width: 50px; float: left; text-align: center; border-left: 1px solid #b2b2b2;"><img src="<?php echo G5_IMG_URL ?>/home.png" style="margin-top: 13px;"></div></a>
		<div class="sel-con">
			<div class="boxx" style="margin-left: 50px;">
			  <div class="selectBox2 ">
				<button class="label">회사소개<img src="<?php echo G5_IMG_URL?>/under_ang_b.png" style="margin-left: 85px; transition: transform 0.3s;"></button>
				<ul class="optionList">
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=rnd_intro"><li class="optionItem">연구개발</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pd_core"><li class="optionItem">제품</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pactory"><li class="optionItem">공장</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=news"><li class="optionItem">뉴스룸</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice"><li class="optionItem">고객지원</li></a>
				</ul>
			  </div>
			</div>
			<div class="boxx" style="margin-left: 250px;">
			  <div class="selectBox2" style="border-left: none;">
				<button class="label">연혁<img src="<?php echo G5_IMG_URL?>/under_ang.png" style="margin-left: 115px; transition: transform 0.3s;"></button>
				<ul class="optionList" style="width: 201px;">
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=hi"><li class="optionItem">CEO 인사말</li></a>
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=vision"><li class="optionItem">비전</li></a>
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=Business_intro"><li class="optionItem">사업부 소개</li></a>
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=global_network"><li class="optionItem">글로벌 네트워크</li></a>
				</ul>
			  </div>
			</div>
		</div>
	</div>
</div>
<div>
	<div class="at-container" style="margin-bottom: 100px;">
		<div class="hi-title">연혁</div>
		<div class="his-table">
			<div class="left-title-now">현재~</br>2011</div>
			<div class="center-title-now">
				<ul style="list-style: none; float: left; padding-left: 0px; width: 150px; margin-left: 15%;color: #143075; font-size: 14px; font-weight: bold;">
					<li class="center-title-li" style="padding-bottom: 32px;">2018</li>
					<li class="center-title-li">2017</li>
					<li class="center-title-li">2015</li>
					<li class="center-title-li">2014</li>
					<li class="center-title-li">2012</li>
				</ul>
			</div>
			<div class="right-title-now">
				<ul style="list-style: none; float: left; width: 70%; font-size: 14px; font-weight: bold;">
					<li class="right-title-li">Motor Core 생산신공법</br>SB 방식 특허 3종 획득</li>
					<li class="right-title-li">삼성전자 협력업체 등록</li>
					<li class="right-title-li">GM Volt EV 차량 Traction Motor Core 양상개발</li>
					<li class="right-title-li">코아텍시스템즈 신공장 준공 1월</li>
					<li class="right-title-li">광주 모터공장 준공</li>
				</ul>
			</div>
			<div></div>
		</div>
		<div class="his-table">
			<div class="left-title-now">2010~</br>2001</div>
			<div class="center-title-now">
				<ul style="list-style: none; float: left; padding-left: 0px; width: 150px; margin-left: 15%;color: #143075; font-size: 14px; font-weight: bold;">
					<li class="center-title-li">2010</li>
					<li class="center-title-li" style="padding-bottom: 32px;">2009</li>
					<li class="center-title-li" style="padding-bottom: 32px;">2005</li>
					<li class="center-title-li" style="padding-bottom: 32px;">2003</li>
				</ul>
			</div>
			<div class="right-title-now">
				<ul style="list-style: none; float: left; width: 70%; font-size: 14px; font-weight: bold;">
					<li class="right-title-li">중국 태주법인 설립</li>
					<li class="right-title-li">R&D 역량 강화</br>광주모터 기술 연구소 설립</li>
					<li class="right-title-li">해외 생산 거점 확보</br>중국 천진 보아전자 설립</li>
					<li class="right-title-li">전기강판 가공센터 설립</br>경주공장 설립</li>
				</ul>
			</div>
			<div></div>
		</div>
		<div class="his-table">
			<div class="left-title-now">2000~</br>1995</div>
			<div class="center-title-now">
				<ul style="list-style: none; float: left; padding-left: 0px; width: 150px; margin-left: 15%;color: #143075; font-size: 14px; font-weight: bold;">
					<li class="center-title-li" style="padding-bottom: 32px;">2000</li>
					<li class="center-title-li" style="padding-bottom: 32px;">1999</li>
					<li class="center-title-li">1998</li>
					<li class="center-title-li">1996</li>
					<li class="center-title-li">1995</li>
				</ul>
			</div>
			<div class="right-title-now">
				<ul style="list-style: none; float: left; width: 70%; font-size: 14px; font-weight: bold;">
					<li class="right-title-li">수출거래선 확대</br>TABUCHI전기, 유럽 등 해외시장 개척</li>
					<li class="right-title-li">수출 및 사업다각화</br>의성공장 설립</li>
					<li class="right-title-li">LG전자 거래업체 선정</li>
					<li class="right-title-li">포스코 전기 강판 거래업체 선정</li>
					<li class="right-title-li">(주)고아정공 설립</li>
				</ul>
			</div>
			<div></div>
		</div>
	</div>
</div>
