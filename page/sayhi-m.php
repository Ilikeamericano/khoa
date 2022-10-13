<?php
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
    padding-top: 50px;
	padding-bottom: 20px;
}
.hi-bt-con{
	font-size: 15px;
    font-weight: bold;
}
.hi-bt-text{
	padding-top: 25px;
}
.sel-option{
	width: 100px;
    border: none;
    height: 50px;
    border-left: 1px solid #b2b2b2;
}
.sel-con{
	
}
.CEO{
	
}
.CEO_name{
	float: left;
    padding-left: 10px;
    font-size: 20px;
    font-weight: bold;
    margin-top: -3px;
}
.CEO_sign{
	float: left;
    margin-top: -5px;
    padding-left: 10px;
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
			<div class="big">CEO인사말</div>
		</div>
	</div>
</div>
<div style="border-bottom: 1px solid #b2b2b2;">
	<div class="at-container">
		<a href="<?php echo $at_href['main'];?>"><div style="float:left; height: 50px; width: 50px; float: left; text-align: center; border-left: 1px solid #b2b2b2;"><img src="<?php echo G5_IMG_URL ?>/home.png" style="margin-top: 13px;"></div></a>
		<div class="sel-con">
			<div class="boxx" style="margin-left: 50px;">
			  <div class="selectBox2 ">
				<button class="label">회사소개<img src="<?php echo G5_IMG_URL?>/under_ang_b.png" style="margin-left: 85px;"></button>
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
				<button class="label" style="color: #0a2972;">CEO 인사말<img src="<?php echo G5_IMG_URL?>/under_ang.png" style="margin-left:67px;"></button>
				<ul class="optionList" style="width: 201px;">
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=history"><li class="optionItem">연혁</li></a>
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
	<div class="at-container">
		<div class="hi-title">세계시장을 리드하고 변화를 선도하는</br>글로벌 기업 코아오토모티브입니다</div>
	</div>
	<div class="mid-imag"><img src="<?php echo G5_IMG_URL ?>/mid_bg.png" style="width: 100%;"></div>
	<div class="at-container">
		<div class="hi-bt-title">글로벌 No.1 친환경 자동차 부품생산 전문기업</div>
		<div class="hi-bt-con">
			<div class="hi-bt-text">오늘날의 급변하는 경제상황 속에서 앞서가는 기업으로 지속적인 성장을 하기 위해서는 미래를 내다보는 안목과 함께 이를 뒷받침하기 위한 조력자가 필요합니다.</div>
			<div class="hi-bt-text">코아오토모티브는 지속적인 신규 투자와 연구개발로 미래의 성장산업인 EV,고효율 발전분야의 산업에 진출하여 세계 최고의 제품을 생산, 공급함으로써 선도적으로</br> 고객의 가치를 창출하는 기업으로 성장해 나갈 것입니다.</div>
			<div class="hi-bt-text"> 끊임없는 변화와 혁신으로 내부 역량을 강화하여 급별하고 있는 글로벌 시장에 능률적으로 대처하고 국내외 다양한 고객의 요구와 수요패턴 변화를 선도적으로 예츨해</br> 글로벌 No.1 친환경자동차 부품생산 기업이 되기 위해 최선을 다하겠습니다.</div>
			<label className="input-file-button" for="input-file">
			  업로드
			</label>
			<input type="file" id="input-file" style="display:none"/>
			<div class="hi-bt-text" style="padding-bottom: 50px;margin-bottom:50px;">
				<div class="CEO" style="float: left;">대표이사</div>
				<div class="CEO_name" style="float: left;">김원석</div>
				<img src="<?php echo G5_IMG_URL ?>/CEO.png" class="CEO_sign">
			</div>
		</div>
	</div>
</div>
