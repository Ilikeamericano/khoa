<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
?>
<style>
.hi-top{
	background-image: url(<?php echo G5_IMG_URL ?>/pactory1_top.png);
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
    font-size: 13px;
}
.rnd-result-con{
	padding-top: 40px;
}
.rnd-result-sub-title{
	font-size: 20px;
    font-weight: bold;
}
.rnd-result-left{
	float: left;
    width: 20%;
    font-size: 20px;
    font-weight: bold;
    color: #092971;
    padding-top: 20px;
    border-top: 1px solid #3a3a3a;
	margin-right: 3%;
}
.rnd-result-right{
	float: left;
    width: 75%;
	border-top: 1px solid #b0b0b0;
    padding-top: 30px;
}
.rnd-result-right-ul{
    list-style: none;
    padding-left: 20px;
    margin-bottom: 0px;
    float: left;
    line-height: 30px;
    font-size: 13px;
    font-weight: bold;
	padding-bottom: 30px;
}
.size-of-day{
	float: left;
    font-size: 17px;
    font-weight: bold;
    color: #0a2972;
	line-height: 30px;
}
.rnd-result-cont{
	float: left;
    width: 100%;
    padding: 0px 5% 0px 5%;
}
.mt-title{
	padding-top: 110px;
    padding-bottom: 50px;
    float: right;
    padding-right: 50px;
}
.mt-title-content{
	font-size: 18px;
    font-weight: bold;
    padding-bottom: 30px;
    line-height: 30px;
}
.mt-title-content-sub{
	font-size: 14px;
    font-weight: bold;
    line-height: 25px;
}
.foot-color{
	background-color: #f8f8f8;
}
.content-01-con{
	padding: 50px 0px;
	border-top: 1px solid #b0b0b0;
}
.content-01-font{
	font-size: 17px;
    font-weight: bold;
    padding-bottom: 20px;
}
.foot-bg{
	background-image: url(http://localhost/img/pd_foot.png);
    background-size: 100% auto;
    height: 370px;
}
.foot-title{
	padding-top: 100px;
    font-size: 26px;
    font-weight: bold;
    color: #fff;
}
.sub-title-04{font-size: 13px; font-weight: bold; margin-top: 55px; padding: 15px 34px; float: left; border: 1px solid #fff; color: #fff; cursor: pointer;}
.video-center{  }
.under-video-title{
	width: 100%;
    text-align: center;
    padding-top: 50px;
    font-size: 24px;
    font-weight: bold;
	padding-bottom: 50px;
}
.img-con{
	float: left;
    width: 33%;
    display: flex;
    justify-content: center;
}
.img-padding{
	
}
.padding-first{
	float:left;
}
.padding-second{
	float:left;
}
.pac1-title{
	float: left;
    font-size: 30px;
    font-weight: bold;
    padding-left: 15px;
}
.pac1-title-sub{
	padding-top: 50px;
    margin-left: 65px;
}
.img-con-top{
	float: left;
    width: 100%;
    padding-bottom: 80px;
}
.pac1-foot-bg{
	background-color: #f8f8f8;
}
.foot-box-con{
	float: left;
    width: 30%;
    text-align: center;
    border: 1px solid #b3b3b3;
    height: 280px;
    margin-bottom: 100px;
	background-color: #fff;
}
.box-title{
	font-size: 25px;
    font-weight: bold;
    color: #d2d2d2;
	padding-bottom: 15px;
	padding-top: 40px;
}
.box-line{
	border-top: 3px solid #0a2972;
    width: 22px;
    margin-left: 47%;
}
.box-sub-title{
	font-size: 14px;
    font-weight: bold;
    padding-bottom: 15px;
}
.box-content{
	line-height: 23px;
}
.p-control{
	float: right;
    font-size: 18px;
    font-weight: bold;
    margin-top: 12px;
    margin-left: 7px;
}
<!-- 가져온것 -->

</style>
</div>
</div>
</div>
<div class="hi-top">
	<div class="at-container">
		<div class="left-hi">
			<div class="smalls">공장</div>
			<div class="big">의성공장</div>
		</div>
	</div>
</div>
<div style="border-bottom: 1px solid #b2b2b2;">
	<div class="at-container">
		<a href="<?php echo $at_href['main'];?>"><div style="float:left; height: 50px; width: 50px; float: left; text-align: center; border-left: 1px solid #b2b2b2;"><img src="<?php echo G5_IMG_URL ?>/home.png" style="margin-top: 13px;"></div></a>
		<div class="sel-con">
			<div class="boxx" style="margin-left: 50px;">
			  <div class="selectBox2 ">
				<button class="label">공장<img src="<?php echo G5_IMG_URL?>/under_ang_b.png" style="margin-left: 115px; transition: transform 0.3s;"></button>
				<ul class="optionList">
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=hi"><li class="optionItem">회사소개</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=rnd_intro"><li class="optionItem">연구개발</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pd_core"><li class="optionItem">제품</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=news"><li class="optionItem">뉴스룸</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice"><li class="optionItem">고객지원</li></a>
				</ul>
			  </div>
			</div>
			<div class="boxx" style="margin-left: 250px;">
			  <div class="selectBox2" style="border-left: none;">
				<button class="label">의성공장<img src="<?php echo G5_IMG_URL?>/under_ang.png" style="margin-left: 90px; transition: transform 0.3s;"></button>
				<ul class="optionList" style="width: 201px;">
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=pactory2"><li class="optionItem">광주공장</li></a>
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=pactory3"><li class="optionItem">태주공장</li></a>
				</ul>
			  </div>
			</div>
		</div>
	</div>
</div>
<div>
	<div class="at-container">
		<div class="hi-title" style="float: left;">의성공장</div>
		<div class="mt-title">
			<div class="mt-title-content-sub">24년간 Motor Core 생산 경험으로 다양한 자동차용 모터응용분야를 가지고 있으며,</br>고효율 Motor를 위한 Motor core 생산방식인 Self-Bonding 방식과</br>Glue-Dot 방식의 양산기술을 활용하고 있습니다.</div>
		</div>
		<div class="video-center">
			<a href="https://youtu.be/nyBth2LN2t0" target="_blank"><img src="http://www.koh-a.com/img/m2_video.jpg" style="width:100%"></a>
		</div>
		<div class="under-video-title">설비</div>
		<div class="img-padding">
			<div class="img-con-top">
				<div class="img-con">
					<div class="padding-first">
						<img src="<?php echo G5_IMG_URL ?>/pac1-1.png" style="float:left;">
						<div class="pac1-title">14<p style="float: right; font-size: 18px; font-weight: bold; margin-top: 12px; margin-left: 7px;">대</p></div>
						<div class="pac1-title-sub">고속프레스(45~400 Ton)</div>
					</div>
				</div>
				<div class="img-con">
					<div class="padding-first">
						<img src="<?php echo G5_IMG_URL ?>/pac1-2.png" style="float:left;">
						<div class="pac1-title">2<p style="float: right; font-size: 18px; font-weight: bold; margin-top: 12px; margin-left: 7px;">Line</p></div>
						<div class="pac1-title-sub">열처리(BAB)</div>
					</div>
				</div>
				<div class="img-con">
					<div class="padding-first">
						<img src="<?php echo G5_IMG_URL ?>/pac1-3.png" style="float:left;">
						<div class="pac1-title">2<p style="float: right; font-size: 18px; font-weight: bold; margin-top: 12px; margin-left: 7px;">Line</p></div>
						<div class="pac1-title-sub">트랙션 모터코어</br>Stator Core(GTAW)</div>
					</div>
				</div>
			</div>
			<div class="img-con-top">
				<div class="img-con">
					<div class="padding-first" style="margin-left: -55px;">
						<img src="<?php echo G5_IMG_URL ?>/pac1-4.png" style="float:left;">
						<div class="pac1-title">2<p style="float: right; font-size: 18px; font-weight: bold; margin-top: 12px; margin-left: 7px;">Line</p></div>
						<div class="pac1-title-sub">트랙션 모터코어</br>Rotor Assembly(Semi)</div>
					</div>
				</div>
				<div class="img-con">
					<div class="padding-first" style="margin-left: 55px;">
						<img src="<?php echo G5_IMG_URL ?>/pac1-5.png" style="float:left;">
						<div class="pac1-title">1<p style="float: right; font-size: 18px; font-weight: bold; margin-top: 12px; margin-left: 7px;">Line</p></div>
						<div class="pac1-title-sub">트랙션 모터코어</br>Self Bonding(Proto)</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pac1-foot-bg">
		<div class="at-container">
			<div class="under-video-title">기술력</div>
			<div class="foot-box-con">
				<div class="box-title">01</div>
				<div>
					<div class="box-line">&nbsp;</div>
				</div>
				<div class="box-sub-title">모터코어 생산 24년</div>
				<div class="box-content">24년간의 모터코어 생산경험을 통해</br>다양한 모터응용과 고효율 모터 생산 가능</div>
			</div>
			<div class="foot-box-con" style="margin-left: 5%;">
				<div class="box-title">02</div>
				<div>
					<div class="box-line">&nbsp;</div>
				</div>
				<div class="box-sub-title">양산기술 특허 보유</div>
				<div class="box-content">모터의 효율적인 제조방식을 위한</br>SB,Glue-Dot방식 등 양산기술 및 특허 5종 보유</div>
			</div>
			<div class="foot-box-con" style="margin-left: 5%;">
				<div class="box-title">03</div>
				<div>
					<div class="box-line">&nbsp;</div>
				</div>
				<div class="box-sub-title">모터 성능 인증</div>
				<div class="box-content">LG전자 Pipe Line을 통한 제너럴모터스,</br>재규어랜드로버,동평,제일기차 등</br>EV용Traction Motor Core rldrmq</div>
			</div>
		</div>
	</div>
</div>
