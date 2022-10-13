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
.mid-imag{
	background-image: url(<?php echo G5_IMG_URL ?>/mid_bg.png);
    height: 395px;
    background-size: 100% auto;
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
.swiper1 {
	width: 100%;
}
.swiper-slide {
	text-align: center;
	font-size: 18px;
	background: #fff;

	/* Center slide text vertically */
	display: -webkit-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	-webkit-justify-content: center;
	justify-content: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
	-webkit-align-items: center;
	align-items: center;
}
.main-slide-1 {
	background-image: url('<?php echo G5_IMG_URL;?>/m_main_1.jpg');
	width: 100%;
	padding-bottom: 139%;
	background-position: center;
	background-size: 100%;
	background-repeat: no-repeat;
}
.main-slide-1 .main-slide-1-circle {    
	width: 38%;
	position: absolute;
	top: 16%;
	right: 17%;
	animation: rotate_image 10s linear infinite;
	transform-origin: 50% 50%;
}

@keyframes rotate_image{
	100% {
		transform: rotate(360deg);
	}
}
.main-slide-pagination {
	position: relative;
	top: -52px;
	left: -1%;
	width: 100px;
}
.main-slide-pagination .swiper-pagination-bullet {
	width: 16px;
	height: 16px;
	background: #A3A3A3;
	text-indent: -10000px;
	margin: 0px 6px;
}
.main-slide-pagination .swiper-pagination-bullet-active {
	background: #1B1C1E;
	border: 4px solid #424043;
	text-indent:-10000px;
	margin: 0px 6px;
}
.main-title-1 {  
	margin-top: -24px;
	color: #404042;
	font-size: 30px;
	font-weight: 900;
	text-align: center;
	width: 100%;
	line-height: 60px;
	padding: 11px;
}
.main-content-1 {
	float: left;
	width: 100%;
}
.main-content-1-left {
	float: left;
	width: 100%;
	background-repeat: no-repeat;
	background-position-x: center;
}
.main-content-1-left img {
	width: 100%;
}
.main-content-1-right {
	float: left;
	width: 100%;
	background: #F7F7F7;
	padding: 65px 15px;
}
.main-content-1-sec1 {		
	font-size: 25px;
	line-height: 50px;
	margin-top: 10px;
	font-weight: bold;
	color: #404040;
}
.main-content-1-bar {
	width: 35px;
	height: 3px;
	background: #404040;
	margin-top: 35px;
	margin-bottom: 35px;
}
.main-content-1-sec2 {		
	font-size: 17px;
	line-height: 30px;
	color: #404040;
}


.swiper2 {
	width: 100%;
	margin-top: 72px;
}
.swiper-slide2 {
	text-align: center;
	font-size: 18px;
	background: #fff;

	/* Center slide text vertically */
	display: -webkit-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	-webkit-justify-content: center;
	justify-content: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
	-webkit-align-items: center;
	align-items: center;
}
.main-slide-2 {
	width: 1200px;
}
.main-slide-2-color {		
	position: relative;
	left: 0px;
	width: 374px;
}
.main-slide-2-icon {	
	position: relative;
}
.main-slide-2-icon img {
	margin-top: 40px;
}
.swiper-button-next {		
	background: #414143;
	color: #FFF;
	width: 65px;
	height: 65px;
	border-radius: 60px;
}
.swiper-button-next::after {
	font-size: 30px;
	font-weight: bold;
}
.swiper-button-prev {		
	background: #414143;
	color: #FFF;
	width: 65px;
	height: 65px;
	border-radius: 60px;
}
.swiper-button-prev::after {
	font-size: 30px;
	font-weight: bold;
}
.main-slide-2-info {
	border-top: 1px solid #D7D7D7;
	padding-top: 35px;
}
.main-slide-2-info-left {	
	font-size: 37px;
	line-height: 50px;
	font-weight: 900;
	margin-bottom: 50px;
}
.main-slide-2-info-right {	
	font-size: 18px;
	line-height: 31px;
	margin-top: 30px;
	margin-bottom: 30px;
	border-top: 1px solid #CCC;
	margin-left: 20px;
	margin-right: 20px;
	padding-top: 18px;
}
.main-video-div {
	background: #252525;
	overflow: hidden;
	width: 100%;
	padding: 0px 25px;
}
.main-video-title {	
	font-size: 30px;
	line-height: 46px;
	font-weight: bold;
	color: #FFF;
	width: 1200px;
	margin: auto;
	margin-top: 60px;
	margin-bottom: 18px;

}
.main-video-bottom {
	width: 100%;
	height: 410px;
	background: #FFF;
	top: -300px;
	position: relative;
}


.main-input-row {		
	border-bottom: 2px solid #CCCCCC;
    font-size: 15px;
    line-height: 35px;
    font-weight: bold;
    margin-top: 30px;
    float: left;
    width: 48%;
}
.main-input-text {
	margin-left: 20px;
    background: none;
    border: none;
    width: 73%;
    font-weight: normal;
    margin-top: -5px;
    height: 35px;
}
.main-input-row2 {		
	font-size: 15px;
	line-height: 45px;
	font-weight: bold;
	margin-top: 30px;
	float: left;
	width: 100%;
}
.main-textarea {		
	background: none;
    border: 2px solid #CCCCCC;
    width: 100%;
    height: 200px;
}
.btn-main-contact {
	background: #fff;
    color: #000;
    cursor: pointer;
    border: 1px solid #000;
    font-size: 20px;
    padding: 2px;
    text-align: center;
    margin-top: 60px;
    margin-bottom: 130px;
    margin-left: 40%;
    width: 20%;
}
.m-banner-arrows {
	width: 33%;
	float: left;
	z-index: 999999;
	position: relative;
	margin-left: 33%;
	margin-top: 50px;
	margin-bottom: 55px;
}
.m-banner-arrows .swiper-button-next {
	position: inherit !important;
	float: right;
	width: 47px;
	height: 47px;
}
.m-banner-arrows .swiper-button-prev {
	position: inherit !important;
	float: left;
	width: 47px;
	height: 47px;
}
.m-banner-arrows .swiper-button-next::after {
	font-size: 20px !important;
}
.m-banner-arrows .swiper-button-prev::after {
	font-size: 20px !important;
}
.main-input-terms {		
	font-size: 13px;
	line-height: 22px;
	font-weight: normal;
	overflow-y: scroll;
	height: 92px;
}
.main-input-check {
	float: left;
	width: 100%;
}
.main-input-check input {		
	margin-top: -1px;
	margin-right: 6px;
}
.form-con-box{
	float:left;
	width:100%;
}
.main-input-label{
	float:left;
	padding: 30px 0px;
}
.main-input-div{
	float: left;
    width: 70%;
    padding: 30px 0px;
}
.main-input-text-email{
	margin-left: 20px;
    background: none;
    border: none;
    width: 73%;
    font-weight: normal;
    margin-top: -5px;
    height: 35px;
}
.btn-search{
	background-color: #000;
    color: #fff;
    padding: 0px 14px;
}
</style>
<script>
	function submitFunction() {
		if($('#mb_check').is(":checked") == false){
			alert('개인정보 수집 및 이용에 동의해주세요.');
			$('#mb_check').focus();
			return;
		}
		if( $('#mb_name').val() == '') {
			alert('이름을 입력해주세요');
			$('#mb_name').focus();
			return;
		}
		if( $('#mb_hp').val() == '') {
			alert('연락처를 입력해주세요');
			$('#mb_hp').focus();
			return;
		}
		if( $('#mb_email').val() == '') {
			alert('이메일을 입력해주세요');
			$('#mb_email').focus();
			return;
		}
		if($('#mb_content').val()==''){
			alert('내용을 입력해주세요');
			$('#mb_content').focus();
			return;
		}
		if($('#mb_company').val()==''){
			alert('회사명을 입력해주세요');
			$('#mb_company').focus();
			return;
		}
		if (!chk_captcha()) {
			
			alert('자동등록방지 숫자가 틀렸습니다.');
			return;
		}
		$('#contact_form').submit();
	}
	$( document ).ready(function() {
		$("input:text[numberOnly]").on("keyup", function() {
			$(this).val($(this).val().replace(/[^0-9]/gi,""));
			if($(this).val().length<=9) {
				$('#mb_hp').css('border-color', 'red');	
				$('#mb_hp:focus').css('border-color', 'red');	
				$('.mb_hp_text').show();
			} else {
				$('#mb_hp').css('border-color', '#CCCCCC');	
				$('#mb_hp:focus').css('border-color', '#CCCCCC');	
				$('.mb_hp_text').hide();
			}
		});
		$("input:text[numberOnly]").focusout(function() {
			if($(this).val().length<=9) {
				$('#mb_hp').css('border-color', 'red');	
				$('#mb_hp:focus').css('border-color', 'red');	
				$('.mb_hp_text').show();
			} else {
				$('#mb_hp').css('border-color', '#CCCCCC');	
				$('#mb_hp:focus').css('border-color', '#CCCCCC');	
				$('.mb_hp_text').hide();
			}
		});
		$("input:text[emailOnly]").on("keyup", function() {
			$(this).val($(this).val().replace(/[^a-z0-9\-+@*_.]/gi,""));
		});
	});
</script>
</div>
</div>
</div>
<div class="hi-top">
	<div class="at-container">
		<div class="left-hi">
			<div class="smalls">고객지원</div>
			<div class="big">온라인 문의</div>
		</div>
	</div>
</div>
<div style="border-bottom: 1px solid #b2b2b2;">
	<div class="at-container">
		<a href="<?php echo $at_href['main'];?>"><div style="float:left; height: 50px; width: 50px; float: left; text-align: center; border-left: 1px solid #b2b2b2;"><img src="<?php echo G5_IMG_URL ?>/home.png" style="margin-top: 13px;"></div></a>
		<div class="sel-con">
			<div class="boxx" style="margin-left: 50px;">
			  <div class="selectBox2 ">
				<button class="label">고객지원<img src="<?php echo G5_IMG_URL?>/under_ang_b.png" style="margin-left: 85px; transition: transform 0.3s;"></button>
				<ul class="optionList">
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=hi"><li class="optionItem">회사소개</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=rnd_intro"><li class="optionItem">연구개발</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pd_core"><li class="optionItem">제품</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pactory"><li class="optionItem">공장</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=gallery"><li class="optionItem">뉴스룸</li></a>
				</ul>
			  </div>
			</div>
			<div class="boxx" style="margin-left: 250px;">
			  <div class="selectBox2" style="border-left: none;">
				<button class="label">온라인 문의<img src="<?php echo G5_IMG_URL?>/under_ang.png" style="margin-left: 75px; transition: transform 0.3s;"></button>
				<ul class="optionList" style="width: 201px;">
				  <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice"><li class="optionItem">공지사항</li></a>
				  <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=empoly"><li class="optionItem">채용공고</li></a>
				</ul>
			  </div>
			</div>
		</div>
	</div>
</div>
<div>
	<div class="at-container">
		<div class="hi-title">온라인 문의</div>
	</div>
	<div class="at-container">
		<form action="<?php echo G5_BBS_URL?>/ajax.contact.php" id="contact_form" method="post" enctype='multipart/form-data'>
			<div class="form-con-box">
				<div class="main-input-row">
					<div class="main-input-label">
					이름
					 <font style="color:#F25657;font-weight:900;">·</font></div>
					<div class="main-input-div"><input type="text" class="main-input-text" name="mb_name" id="mb_name" placeholder="이름을 입력하세요."></div>
				</div>
				<div class="main-input-row" style="margin-left: 4%;">
					<div class="main-input-label">
					회사
					 <font style="color:#F25657;font-weight:900;">·</font></div>
					<div class="main-input-div"><input type="text" class="main-input-text" name="mb_company" id="mb_company" placeholder="회사명을 입력하세요."></div>
				</div>
				<div class="main-input-row">
					<div class="main-input-label">
					연락처
					 <font style="color:#F25657;font-weight:900;">·</font>
					</div>
					<div class="main-input-div">
					<input type="text" class="main-input-text" name="mb_hp" id="mb_hp" numberOnly style="margin-top: -5px; width: 66%; margin-left: 5%; float: none;" maxlength='15' placeholder="연락처를 입력하세요."/></div>
				</div>
				<div class="main-input-row" style="margin-left: 4%;">
					<div class="main-input-label">
					이메일
					  <font style="color:#F25657;font-weight:900;">·</font>
					</div>
					<div class="main-input-div" style="padding: 28px 0px;">
					<input type="text" class="main-input-text-email" name="mb_email1" id="mb_email1" emailOnly style="margin-right: 5px;" placeholder="이메일을 입력하세요.">
					</div>
				</div>
				<div class="main-input-row2">
					<div class="main-input-label">
					내용
					  <font style="color:#F25657;font-weight:900;">·</font></div>
					<textarea class="main-textarea" name="mb_content" rows="3" cols="50" style="line-height: 24px; resize:none; padding: 10px;" id="mb_content" placeholder="내용을 입력하세요."></textarea>
				</div>
				<div class="main-input-row">
					<div class="c-row-left" style="height: 55px; float: left; margin-right: 16px;">
						첨부파일
					</div>
					<div class="c-row-right" style="float: left; width: 86%;">
						<input type="text" class="input-contact" style="width: 80%; float: left; border: none;" name="c_file_name" id="c_file_name" readonly placeholder="첨부파일은 최대 25MB 보낼 수 있습니다."/>
							<label class="btn-search" for="c_file" style="float: right;">찾아보기</label><input type="file" id="c_file" name="c_file" style="display: none;" onchange="javascript:document.getElementById('c_file_name').value = this.value"/>
						<div class="file-explain">
							&nbsp;
						</div>
					</div>
				</div>
				<script>var g5_captcha_url  = "<?php echo G5_PLUGIN_URL ?>/kcaptcha";</script>
				<script src="<?php echo G5_PLUGIN_URL ?>/kcaptcha/kcaptcha.js"></script>
				<fieldset id="captcha" class="captcha" style="float:left; width: 48%; border-bottom: 2px solid #CCCCCC; padding-bottom: 15px; margin-top: 30px; margin-left: 4%;">
					<div  style="float: left; font-size: 15px; line-height: 35px; font-weight: bold;">자동등록방지</div>
					<legend><label for="captcha_key">자동등록방지</label></legend>
					<img src="<?php echo G5_PLUGIN_URL ?>/plugin/kcaptcha/img/dot.gif" alt="" id="captcha_img" style="height: 40px;"><input type="text" name="captcha_key" id="captcha_key" required class="captcha_box required" size="6" maxlength="6" placeholder="코드를 입력하세요." style="height: 40px; width: 200px; border: none; float: left; margin-left: 13px;">
					<button type="button" id="captcha_reload" style="background-color: #000; color: #fff; padding: 2px 14pxpx; width: 18.3%;"><span></span>새로고침</button>
				</fieldset>
				</div>
				<div class="main-input-row2">
					<div class="main-input-label" style="float:left; width: 100%;">
					개인정보처리방침
					  <font style="color:#F25657;font-weight:900;">·</font></div>
					<div class="main-input-terms" style="float:left; width: 100%; border: 2px solid #cccccc;height: 200px;padding: 10px 20px;">
					1. 수집하는 개인정보 항목<br/>
					본 사이트는 홈페이지 문의, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.<br/><br/>

					- 수집항목: 이름, 회사, 연락처, 이메일<br/>
					- 개인정보 수집방법: 홈페이지 문의 및 상담<br/><br/>

					2. 개인정보의 수집 및 이용목적<br/>
					본 사이트는 수집한 개인정보를 다음의 목적을 위해 활용합니다.<br/><br/>

					- 회원 관리: 개인 식별, 불만처리 등 민원처리, 고지사항 전달<br/><br/>

					3. 개인정보의 보유 및 이용기간<br/>
					원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.<br/><br/>

					보존 항목: 이름, 연락처, 이메일<br/>
					보존 근거: 문서관리규정<br/>
					보존 기간: 3년</div>
				</div>
				<div class="main-input-check">
					<label><input type="checkbox" value="1" name="mb_check" id="mb_check" >개인정보 수집 및 이용에 동의하십니까? (필수)
					</label>
				</div>
				<div class="main-input-row2" style="margin-top: -13px;">
					<div class="btn-main-contact" onClick="submitFunction()">문의하기</div>
				</div>
			</div>
		</form>
	</div>
</div>
