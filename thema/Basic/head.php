<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
include_once(THEMA_PATH.'/assets/thema.php');
?>
<head>
<link rel="stylesheet" type="text/css" href="./scroll/fullview.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Javascript Files -->
<script  src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>
<script type="text/javascript" src="./scroll/fullview.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
<style>
.more {
  display:block;
  width: 55px;
  height: 16px;
  <!-- background-image:url('https://s.pstatic.net/static/www/img/2017/sp_nav_v170523.png'); -->
  background-position: 0 -78px;
}
.blind {
  position: absolute;
  overflow: hidden;
  clip: rect(0 0 0 0);
  margin: -1px;
  width: 1px;
  height: 1px;
}
.more:hover, .close:hover {
  cursor:pointer;
}
.close {
  display:block;
  background-image:url('https://s.pstatic.net/static/www/img/2017/sp_nav_v170523.png');
  width: 42px;
  height: 16px;
  background-position: -166px -78px;
}
.board {
  font-size:13px;
  position:absolute;
  width:100%;
  background:#fff;
  visibility:visible;
  height: auto;
  top: 0;
}
.menu-left-logo-img{
	float: left;
    padding-top: 30px;
    padding-left: 90px;
    max-width: none;
}
.list {
	background-color:#fff;
	padding: 2% 4%;
	position: absolute;
    width: 100%;
}
.board-logo-left{
	float: left;
    position: absolute;
    z-index: 99999999999;
    margin-left: 13px;
    margin-top: -8px;
}
.board-menu-right{
	float: right;
    position: absolute;
    right: 48px;
    z-index: 99999999999;
    margin-top: -8px;
}
.board-koa-right{
	float: right;
    margin-top: -8px;
	margin-right: 74px;
    position: absolute;
    right: 36px;
    z-index: 99999999999;
}
.menu-title{
	float: left;
    width: 80%;
    margin: 0% 10%;
    margin-bottom: 0;
    top: 0;
}
.menu-con{
	float: left;
	width: 100%;
	margin-top: 17%;
}
.menu-title-left{
	float: left;
    font-size: 35px;
    font-weight: bold;
    width: 16%;
    text-align: center;
}
.board-menu-ul{
	float: left;
    text-align: center;
    line-height: 40px;
    width: 16%;
}
.mid-bar{
	background-color: #d4d4d4;
	float: left;
	width: 100%;
	height: 1px;
	margin-top: 20px;
}
.menu-list-con{
	float: left;
	width: 100%;
}
.menu-list-title{
	float: left;
	width: 80%;
    margin: 1% 10%;
    margin-bottom: 0;
    font-size: 19px;
    font-weight: bold;
}
.selectBox2 * { box-sizing: border-box; }
.selectBox2 {
    position: relative;
    width: 200px;
    height: 50px;
    border: 1px solid #b0b0b0;
    cursor: pointer;
    border-bottom: none;
    border-top: none;
}

.selectBox2:after {
  content: '';
  display: block; 
  height: 100%; 
  position: absolute; 
  top: 0; 
  right: 50px;
  background: #b0b0b0;
}

.selectBox2 .label {
    display: flex;
    align-items: center;
    width: inherit;
    height: inherit;
    border: 0 none;
    outline: 0 none;
    padding-left: 15px;
    background: transparent;
    cursor: pointer;
    color: #000;
    font-size: 15px;
    font-weight: bold;
}

.selectBox2 .optionList {
    position: absolute;
    top: 51px;
    left: 0;
    width: 100%;
    list-style-type: none;
    padding: 0;
    overflow: hidden;
    max-height: 0;
    transition: .3s ease-in;
}
.selectBox2 .optionList::-webkit-scrollbar {width: 6px;}
.selectBox2 .optionList::-webkit-scrollbar-track {background: transparent; }
.selectBox2 .optionList::-webkit-scrollbar-thumb {background: #303030; border-radius: 45px;}
.selectBox2 .optionList::-webkit-scrollbar-thumb:hover {background: #303030;}

.selectBox2.active .optionList {
	max-height: 500px;
	max-height: 500px;
	border: 1px solid #d7d7d7;
	border-top: none;
	width: 200px;
	margin-left: -1px;
}
.selectBox2.active .label img{
	transform: rotateZ(-180deg);
}

.selectBox2 .optionItem {
	padding: 10px 15px 5px;
    transition: .1s;
    font-size: 15px;
    font-weight: bold;
    background-color: #fff;
}

.selectBox2 .optionItem:hover {
  background: rgb(255 255 255);
}

.selectBox2 .optionItem:last-child {
  border-bottom: 0 none;
}
.boxx{
	float:left;
	position: absolute;
}
.m-logo-con{
	float:left;
	width:100%;
}
.m-left-logo{
	float:left;
	padding: 1rem 0px 0px 1rem;
}
.m-right-menu{
	float: right;
    padding: 1rem 1rem 0px 0px;
}
.menu-right-cont{
	float: right;
	width: 250px;
}
</style>
</head>


<div id="thema_wrapper" class="wrapper <?php echo $is_thema_layout;?> <?php echo $is_thema_font;?>">

	<!-- Mobile Header -->
	<header class="m-header">
		<div class="at-container">
			<!--<div class="header-wrap">
				<div class="header-icon">
					<a href="javascript:;" onclick="sidebar_open('sidebar-user');">
						<i class="fa fa-user"></i>
					</a>
				</div>
				<div class="header-logo en">
					<!-- Mobile Logo -->
					<!--<a href="<?php echo $at_href['home'];?>">
						<b>뭘봐</b>
					</a>
				</div>
				<div class="header-icon">
					<a href="javascript:;" onclick="sidebar_open('sidebar-search');">
						<i class="fa fa-search"></i>
					</a>
				</div>
			</div>-->
			<div class="m-logo-con">
				<div class="m-left-logo">
					<a href=<?php echo $at_href['main'];?>>
						<img src="<?php echo G5_IMG_URL ?>/logo-w.png" style="float: left; width: 150px; height: 30px;">
					</a>
				</div>
				<div class="m-right-menu">
					<a class="more" style="float:right; width: 3rem;"><img src="<?php echo G5_IMG_URL ?>/menu-white.png" style="width: 27px"></a>
					<a href="http://sungtaek13.dothome.co.kr" style="float:right; padding-right: 2rem;" target="_blank"><img src="<?php echo G5_IMG_URL ?>/koha-white.png" style="width:80px;"></a>
				</div>
			</div>
			<div class="board" style="display:none;">
				<div class="list">
					<div class="board-logo-left"><a href="<?php echo $at_href['main'];?>"><img src="<?php echo G5_IMG_URL ?>/logo_b.png" style="width: 210px;"></a></div>
					<div class="board-menu-right"><a class="cls-btn"><img src="<?php echo G5_IMG_URL ?>/close-icon.png"></a></div>
					<div class="board-koa-right"><a href="http://sungtaek13.dothome.co.kr"><img src="<?php echo G5_IMG_URL ?>/koha.png"></a></div>
				</div>
				<div class="menu-con">
					<div class="menu-title">
						<div class="menu-title-left">회사소개</div>
						<div class="menu-title-left">연구개발</div>
						<div class="menu-title-left">제품</div>
						<div class="menu-title-left">공장</div>
						<div class="menu-title-left">뉴스룸</div>
						<div class="menu-title-left">고객지원</div>
					</div>
				</div>
				<div class="mid-bar">&nbsp;</div>
				<div class="menu-list-con">
					<div class="menu-list-title">
						<ul style="float: left; text-align: center; line-height: 40px;">
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-1)]['sub'][0]['href'];?>"><li>CEO 인사말</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-1)]['sub'][1]['href'];?>"><li>연혁</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-1)]['sub'][2]['href'];?>"><li>비전</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-1)]['sub'][3]['href'];?>"><li>사업부 소개</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-1)]['sub'][4]['href'];?>"><li>글로벌 네트워크</li></a>
						</ul>
						<ul style="float: left; text-align: center; line-height: 40px; margin-left: 10.5%;">
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-2)]['sub'][0]['href'];?>"><li>연구소 소개</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-2)]['sub'][1]['href'];?>"><li>연구성과</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-2)]['sub'][2]['href'];?>"><li>국내외 특허</li></a>
						</ul>
						<ul style="float: left; text-align: center; line-height: 40px; margin-left: 8%;">
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-3)]['sub'][0]['href'];?>"><li>Motor Core</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-3)]['sub'][1]['href'];?>"><li>PCB Controller</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-3)]['sub'][2]['href'];?>"><li>In Wheel Motor</li></a>
						</ul>
						<ul style="float: left; text-align: center; line-height: 40px; margin-left: 5%;">
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-4)]['sub'][0]['href'];?>"><li>의성공장</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-4)]['sub'][1]['href'];?>"><li>광주공장</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-4)]['sub'][2]['href'];?>"><li>태주공장</li></a>
						</ul>
						<ul style="float: left; text-align: center; line-height: 40px; margin-left: 10%;">
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-5)]['sub'][1]['href'];?>"><li>보도자료</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-5)]['sub'][0]['href'];?>"><li>미디어 룸</li></a>
						</ul>
						<ul style="float: left; text-align: center; line-height: 40px; margin-left: 11%;">
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-6)]['sub'][0]['href'];?>"><li>공지사항</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-6)]['sub'][1]['href'];?>"><li>온라인 문의</li></a>
							<a href="<?php echo $menu[$menu_cnt-($menu_cnt-6)]['sub'][2]['href'];?>"><li>채용공고</li></a>
						</ul>
					</div>
				</div>
				<div style="bottom:0; float: left; margin-top: 40%;">&nbsp;</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</header>
	<!--팝업 레이어 시작 -->
	<div id="hd_pop" style="margin-left: 500px;">
		<h2>팝업레이어 알림</h2>
			<!--<div id="hd_pops_1" class="hd_pops" style="top:100px;left:-450px">
				<div class="hd_pops_con" style="width:499px;height:811px">
					<img src="http://koaautomotive.com/data/editor/2205/398ea001fe5c7bb1279bd9ef7ed32e7b_1652516439_93.jpg" title="398ea001fe5c7bb1279bd9ef7ed32e7b_1652516439_93.jpg" alt="398ea001fe5c7bb1279bd9ef7ed32e7b_1652516439_93.jpg" />
				</div>
				<div class="hd_pops_footer">
					<button class="hd_pops_reject hd_pops_1 24"><strong>24</strong>시간 동안 다시 열람하지 않습니다.</button>
					<button class="hd_pops_close hd_pops_1">닫기 <i class="fa fa-times" aria-hidden="true"></i></button>
				</div>
			</div>-->
	</div>
	<script>
	$(function() {
		$(".hd_pops_reject").click(function() {
			var id = $(this).attr('class').split(' ');
			var ck_name = id[1];
			var exp_time = parseInt(id[2]);
			$("#"+id[1]).css("display", "none");
			set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
		});
		$('.hd_pops_close').click(function() {
			var idb = $(this).attr('class').split(' ');
			$('#'+idb[1]).css('display','none');
		});
		$("#hd").css("z-index", 1000);
	});
	</script>
	<!--팝업 레이어 끝 -->
	<!-- Menu -->
	<nav class="at-menu" style="z-index:0;">
		<!-- PC Menu -->
		<div class="pc-menu" style="z-index:999;">
		
			<!-- Menu Button & Right Icon Menu -->
			 
			
			<?php include_once(THEMA_PATH.'/menu.php');	// 메뉴 불러오기 ?>
			<!--<div class="clearfix"></div>-->
			<div class="nav-back"></div>
		</div><!-- .pc-menu -->

		<!-- PC All Menu -->
		<div class="pc-menu-all">
			<div id="menu-all" class="collapse">
				<div class="at-container table-responsive">
					<table class="table">
					<tr>
					<?php 
						$az = 0;
						for ($i=1; $i < $menu_cnt; $i++) {

							if(!$menu[$i]['gr_id']) continue;

							// 줄나눔
							if($az && $az%$is_allm == 0) {
								echo '</tr><tr>'.PHP_EOL;
							}
					?>
						<td class="<?php echo $menu[$i]['on'];?>">
							<a class="menu-a" href="<?php echo $menu[$i]['href'];?>"<?php echo $menu[$i]['target'];?>>
								<?php echo $menu[$i]['name'];?>
								<?php if($menu[$i]['new'] == "new") { ?>
									<i class="fa fa-bolt new"></i>
								<?php } ?>
							</a>
							<?php if($menu[$i]['is_sub']) { //Is Sub Menu ?>
								<div class="sub-1div">
									<ul class="sub-1dul">
									<?php for($j=0; $j < count($menu[$i]['sub']); $j++) { ?>

										<?php if($menu[$i]['sub'][$j]['line']) { //구분라인 ?>
											<li class="sub-1line"><a><?php echo $menu[$i]['sub'][$j]['line'];?></a></li>
										<?php } ?>

										<li class="sub-1dli <?php echo $menu[$i]['sub'][$j]['on'];?>">
											<a href="<?php echo $menu[$i]['sub'][$j]['href'];?>" class="sub-1da<?php echo ($menu[$i]['sub'][$j]['is_sub']) ? ' sub-icon' : '';?>"<?php echo $menu[$i]['sub'][$j]['target'];?>>
												<?php echo $menu[$i]['sub'][$j]['name'];?>
												<?php if($menu[$i]['sub'][$j]['new'] == "new") { ?>
													<i class="fa fa-bolt sub-1new"></i>
												<?php } ?>
											</a>
										</li>
									<?php } //for ?>
									</ul>
								</div>
							<?php } ?>
						</td>
					<?php $az++; } //for ?>
					</tr>
					</table>
					<div class="menu-all-btn">
						<div class="btn-group">
							<a class="btn btn-lightgray" href="<?php echo $at_href['main'];?>"><i class="fa fa-home"></i></a>
							<a href="javascript:;" class="btn btn-lightgray" data-toggle="collapse" data-target="#menu-all"><i class="fa fa-times"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .pc-menu-all -->

		<!-- Mobile Menu -->
		<div class="m-menu">
			<?php include_once(THEMA_PATH.'/menu-m.php');	// 메뉴 불러오기 ?>
		</div><!-- .m-menu -->
	</nav><!-- .at-menu -->

	<div class="clearfix"></div>
	
	<?php if($page_title) { // 페이지 타이틀 ?>
		<div class="at-title">
			<div class="at-container">
				<div class="page-title en">
					<strong<?php echo ($bo_table) ? " class=\"cursor\" onclick=\"go_page('".G5_BBS_URL."/board.php?bo_table=".$bo_table."');\"" : "";?>>
						<?php echo $page_title;?>
					</strong>
				</div>
				<?php if($page_desc) { // 페이지 설명글 ?>
					<div class="page-desc hidden-xs">
						<?php echo $page_desc;?>
					</div>
				<?php } ?>
				<div class="clearfix"></div>
			</div>
		</div>
	<?php } ?>

	<div class="at-body">
		<?php if($col_name) { ?>
			<div class="at-container">
			<?php if($col_name == "two") { ?>
				<div class="row at-row">
					<div class="col-md-<?php echo $col_content;?><?php echo ($at_set['side']) ? ' pull-right' : '';?> at-col at-main">		
			<?php } else { ?>
				<div class="at-content">
					
					
			<?php } ?>
		<?php } ?>
