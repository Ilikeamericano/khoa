<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
?>
<style>
.hi-top{
	background-image: url(<?php echo G5_IMG_URL ?>/rnd_title.png);
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
.rnd-title{
	width: 100%;
    float: left;
}
.rnd-title-left-img{
	float: left;
    width: 50%;
}
.rnd-title-right-text{
	float:left;
	padding-left: 80px;
}
.rnd-title-sub{
	padding-top: 20px;
    padding-bottom: 40px;
    border-bottom: 1px solid #b0b0b0;;
    font-size: 15px;
    font-weight: bold;
}
.rnd-title-sub-1{
	padding-top: 40px;
	padding-bottom: 40px;
	border-bottom: 1px solid #b0b0b0;;
	font-size: 13px;
}
.rnd-sub-title{
	color: #95cd4c;
    padding-bottom: 14px;
}
.rnd-content{
    float: left;
    width: 100%;
    padding-bottom: 10%;
}
.content-left{
	float:left;
}
.content-right{
	float:right;
	width: 60%;
}
.content-sub{
	font-size: 20px;
    font-weight: bold;
	padding-bottom: 30px;
}
.rnd-title-sub-1 li::marker{
	color: #95cd4c;
}
.content-left li::marker{
	color: #95cd4c;
}
.content-ul{
	padding-left: 20px;
	line-height: 25px;
    font-size: 15px;
}
<!-- 가져온것 -->

</style>
</div>
</div>
</div>
<div class="hi-top">
	<div class="at-container">
		<div class="left-hi">
			<div class="smalls">연구개발</div>
			<div class="big">연구소 소개</div>
		</div>
	</div>
</div>
<div style="border-bottom: 1px solid #b2b2b2;">
	<div class="at-container">
		<a href="<?php echo $at_href['main'];?>"><div style="float:left; height: 50px; width: 50px; float: left; text-align: center; border-left: 1px solid #b2b2b2;"><img src="<?php echo G5_IMG_URL ?>/home.png" style="margin-top: 13px;"></div></a>
		<div class="sel-con">
			<div class="boxx" style="margin-left: 50px;">
			  <div class="selectBox2 ">
				<button class="label">연구개발<img src="<?php echo G5_IMG_URL?>/under_ang_b.png" style="margin-left: 85px; transition: transform 0.3s;"></button>
				<ul class="optionList">
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=hi"><li class="optionItem">회사소개</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pd_core"><li class="optionItem">제품</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pactory"><li class="optionItem">공장</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=news"><li class="optionItem">뉴스룸</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice"><li class="optionItem">고객지원</li></a>
				</ul>
			  </div>
			</div>
			<div class="boxx" style="margin-left: 250px;">
			  <div class="selectBox2" style="border-left: none;">
				<button class="label">연구소 소개<img src="<?php echo G5_IMG_URL?>/under_ang.png" style="margin-left: 75px; transition: transform 0.3s;"></button>
				<ul class="optionList" style="width: 201px;">
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=rnd_result"><li class="optionItem">연구성과</li></a>
				  <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=patent"><li class="optionItem">국내외 특허</li></a>
				</ul>
			  </div>
			</div>
		</div>
	</div>
</div>
<div>
	<div class="at-container">
		<div class="hi-title">도전과 혁신으로</br>새로운 가치를 창조하는 연구소</div>
	</div>
	<div class="rnd-title">
		<div class="rnd-title-left-img">
			<img src="<?php echo G5_IMG_URL ?>/rnd_title_left.png" style="width: 100%;">
		</div>
		<div class="rnd-title-right-text">
			<div></div>
			<div>
				<div class="rnd-title-sub">코아오토모티브는 Motor 분야 및 Motor Drive 분야의</br>기술혁신을 이룩하고 있습니다.</div>
				<div class="rnd-title-sub-1">
					<div class="rnd-sub-title">연구개발 소프트웨어</div>
					<ul style="padding-left: 20px; line-height: 25px;">
						<li><b>Motor Design :</b> J-Mag 2/3D, Opera 2D, Opera 3D</li>
						<li><b>Motor Structure Design :</b> Auto Cad, Pro-E Catia 3D, Ansys</li>
						<li><b>Controller Design :</b> PSIM, OrCAD, Pads2D, CAN Viewer, Pads3D</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="at-container">
		<div class="hi-title">연구개발 미션</div>
		<div class="rnd-content">
			<div class="content-left">
				<div class="content-sub">혁신적 기술개발을 통한</br>제품 경쟁력 확보</div>
				<div>
					<ul class="content-ul">
						<li>미래사회 및 변화에 대응하는 연구기획 강화</li>
						<li>차세대기술 연구 체계 마련</li>
					</ul>
				</div>
			</div>
			<div class="content-right"><img src="<?php echo G5_IMG_URL?>/rnd_sub1.png"></div>
		</div>
		<div class="rnd-content">
			<div class="content-left">
				<div class="content-sub">공정 및 시스템 개선을 통한</br>효율적 제품 개발</div>
				<div>
					<ul class="content-ul">
						<li>지속적인 모니터링을 통한 문제점 분석 및 개선</li>
						<li>스마트공정 구축을 위한 투자유치</li>
					</ul>
				</div>
			</div>
			<div class="content-right"><img src="<?php echo G5_IMG_URL?>/rnd_sub2.png"></div>
		</div>
		<div class="rnd-content">
			<div class="content-left">
				<div class="content-sub">우수 연구인력 지원을 통한</br>연구개발 역량 강화</div>
				<div>
					<ul class="content-ul">
						<li>연구몰입 환경 조성을 위한 연구자 중신의 연구환경 조성</li>
						<li>교육훈련 프로그램개발</li>
						<li>상호 신뢰하는 조직 문화</li>
					</ul>
				</div>
			</div>
			<div class="content-right"><img src="<?php echo G5_IMG_URL?>/rnd_sub3.png"></div>
		</div>
		<div class="rnd-content">
			<div class="content-left">
				<div class="content-sub">국내외연구 네트워크 활성화를 통한</br>교류 및 협력 기회 확대</div>
				<div>
					<ul class="content-ul">
						<li>산학연 협동연구체제 강화</li>
						<li>기업 및 구성원,고객 및 협력사와 동반성장</li>
						<li>전문 지식,성과,인프라 공유</li>
					</ul>
				</div>
			</div>
			<div class="content-right"><img src="<?php echo G5_IMG_URL?>/rnd_sub4.png"></div>
		</div>
	</div>
</div>
