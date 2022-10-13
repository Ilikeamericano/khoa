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
<!-- 가져온것 -->

</style>
</div>
</div>
</div>
<div class="hi-top">
	<div class="at-container">
		<div class="left-hi">
			<div class="smalls">연구개발</div>
			<div class="big">국내외 특허</div>
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
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=gallery"><li class="optionItem">뉴스룸</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=history"><li class="optionItem">고객지원</li></a>
				</ul>
			  </div>
			</div>
			<div class="boxx" style="margin-left: 250px;">
			  <div class="selectBox2" style="border-left: none;">
				<button class="label">국내외 특허<img src="<?php echo G5_IMG_URL?>/under_ang.png" style="margin-left: 75px; transition: transform 0.3s;"></button>
				<ul class="optionList" style="width: 201px;">
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=rnd_intro"><li class="optionItem">연구소 소개</li></a>
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=rnd_result"><li class="optionItem">연구성과</li></a>
				</ul>
			  </div>
			</div>
		</div>
	</div>
</div>
<div>
	<div class="at-container">
		<div class="hi-title">국내외 특허</div>
		<?php
		//include_once(G5_PATH.'/page/board_inc.php');
		$conn = mysqli_connect("localhost", "root", "dltjdxor123!", "test");
		$sql = "SELECT * FROM g5_board where bo_table = 'gallery'";
		$result = mysqli_query($conn, $sql);
			$board = mysqli_fetch_array($result);
		?>
			<div style="color:#red; font-size: 30px;"><?php echo $board['bo_skin']?></div>
			<img src="http://localhost/data/file/gallery/0_9Keutbqi_10eb2a9456c935e13b6294f85e31363670c796ac.png">
			  

	</div>
</div>
