<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css" media="screen">', 0);

?>

<section class="board-list<?php echo (G5_IS_MOBILE) ? ' font-14' : '';?>"> 

	<?php if($is_category) include_once($board_skin_path.'/category.skin.php'); // 카테고리	?>
<style>
.hi-top{
	background-image: url(<?php echo G5_IMG_URL ?>/media_top.png);
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
	padding-bottom: 65px;
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
.post-row {
	width: 33.33% !important;
}
.top-max-container{
	width:100vw;
	margin-left: calc(-50vw + 50%);
}
.list_count{
	padding-bottom: 50px;
	font-size: 14px;
	font-weight: bold;
}
.table-content-i{
	float: left;
    width: 100%;
    padding: 2rem 1rem 2rem 1rem;
    border-top: 1px solid #000;
}
.content-left-day{
	float: left;
    margin-right: 50px;
    margin-top: 20px;
}
.content-big-day{
	font-size: 5rem;
    font-weight: bold;
}
.content-big-y-m{
	font-size: 2rem;
    font-weight: 600;
    color: #a9a8a8;
}
.content-center{
	float: left;
    width: 70%;
    padding: 20px 0px 20px 30px;
    border-left: 1px solid #000;
}
.content-title{
	float: left;
    width: 100%;
    font-size: 1.8rem;
    font-weight: bold;
    margin-bottom: 10px;
}
.content-sub-title{
	float: left;
    max-width: 95%;
    max-height: 100px;
    overflow: hidden;
	color: #616161;
}
.content-right-image{
	float: left;
    max-width: 18%;
    max-height: 200px;
    margin-left: 20px;
}
</style>
	<div class="list-wrap">
		
			<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
			<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
			<input type="hidden" name="stx" value="<?php echo $stx ?>">
			<input type="hidden" name="spt" value="<?php echo $spt ?>">
			<input type="hidden" name="sca" value="<?php echo $sca ?>">
			<input type="hidden" name="sst" value="<?php echo $sst ?>">
			<input type="hidden" name="sod" value="<?php echo $sod ?>">
			<input type="hidden" name="page" value="<?php echo $page ?>">
			<input type="hidden" name="sw" value="">
			</div>
			</div>
			</div>
			<div class="hi-top">
				<div class="at-container">
					<div class="left-hi">
						<div class="smalls">고객지원</div>
						<div class="big">공지사항</div>
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
							<button class="label">공지사항<img src="<?php echo G5_IMG_URL?>/under_ang.png" style="margin-left: 75px; transition: transform 0.3s;"></button>
							<ul class="optionList" style="width: 201px;">
							  <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=empoly"><li class="optionItem">채용공고</li></a>
							  <a href="<?php echo G5_BBS_URL?>/page.php?hid=contact"><li class="optionItem">온라인 문의</li></a>
							</ul>
						  </div>
						</div>
					</div>
				</div>
			</div>
		<form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post" role="form" class="form">
			<div class="at-container">
				<div class="hi-title">공지사항</div>
				<div class="list_count">&nbsp;</div>
			<?php 
				$list_skin_file = (G5_IS_MOBILE) ? 'list.skin.mobile.php' : 'list.skin.pc.php';
				include_once($board_skin_path.'/'.$list_skin_file);
			?>
			<?php 
				$conn = mysqli_connect("localhost", "sungtaek12", "sungtaek1!" , "sungtaek12");
				$sql = "SELECT * FROM  g5_write_notice";
				$result = mysqli_query($conn, $sql);
				$board_total = 0;
				while($row = mysqli_fetch_array($result)){
					
					$board_total += 1;
				}
			?>
			<div class="list_count" style="position: absolute; top: 640px;">총 <?php echo $board_total; ?>개의 개시물이있습니다.</div>
			<div class="list-btn-box">
				<?php if ($list_href || $write_href) { ?>
					<div class="form-group pull-right list-btn">
						<div class="btn-group dropup">
							<?php if ($boset['sort']) { ?>
								<a id="sortLabel" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-black btn-sm">
									<i class="fa fa-sort"></i><span>정렬</span>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="sortLabel">
									<li<?php echo ($sst == 'wr_datetime') ? ' class="sort"' : '';?>><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>날짜순</a></li>
									<li<?php echo ($sst == 'wr_hit') ? ' class="sort"' : '';?>><?php echo subject_sort_link('wr_hit', $qstr2, 1) ?>조회순</a></li>
									<?php if ($is_good) { ?>
										<li<?php echo ($sst == 'wr_good') ? ' class="sort"' : '';?>><?php echo subject_sort_link('wr_good', $qstr2, 1) ?>추천순</a></li>
									<?php } ?>
									<?php if ($is_nogood) { ?>
										<li<?php echo ($sst == 'wr_nogood') ? ' class="sort"' : '';?>><?php echo subject_sort_link('wr_nogood', $qstr2, 1) ?>비추천순</a></li>
									<?php } ?>
									<li><a href="./board.php?bo_table=<?php echo $bo_table;?>&amp;sca=<?php echo urlencode($sca);?>">초기화</a></li>
								</ul>
							<?php } ?>
							<?php if ($list_href) { ?><a href="<?php echo $list_href ?>" class="btn btn-black btn-sm"><i class="fa fa-bars"></i><span>목록</span></a><?php } ?>
							<?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn btn-color btn-sm"><i class="fa fa-pencil"></i><span>글쓰기</span></a><?php } ?>
						</div>
					</div>
				<?php } ?>
				<div class="form-group list-btn font-12">
					<div class="btn-group">
						<!--<a href="#" class="btn btn-black btn-sm" data-toggle="modal" data-target="#searchModal" onclick="return false;"><i class="fa fa-search"></i></a>-->
						<?php if ($rss_href) { ?>
							<a href="<?php echo $rss_href; ?>" class="btn btn-color btn-sm"><i class="fa fa-rss"></i></a>
						<?php } ?>
						<?php if ($is_checkbox || $setup_href || $admin_href) { ?>
							<?php if ($is_checkbox) { ?>
								<button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="btn btn-black btn-sm"><i class="fa fa-times"></i><span class="hidden-xs"> 선택삭제</span></button>
								<button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value" class="btn btn-black btn-sm"><i class="fa fa-clipboard"></i><span class="hidden-xs"> 선택복사</span></button>
								<button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value" class="btn btn-black btn-sm"><i class="fa fa-arrows"></i><span class="hidden-xs"> 선택이동</span></button>
								<button type="button" id="btn_chkall" class="btn btn-black btn-sm"><i class="fa fa-check"></i><span class="hidden-xs"> 전체선택</span></button>
							<?php } ?>
							<?php if ($admin_href) { ?>
								<a href="<?php echo $admin_href; ?>" class="btn btn-black btn-sm"><i class="fa fa-cog"></i></a>
							<?php } ?>
							<?php if ($setup_href) { ?>
								<a href="<?php echo $setup_href; ?>" class="btn btn-color btn-sm win_memo"><i class="fa fa-cogs"></i><span class="hidden-xs"> 설정</span></a>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</form>

		<?php if($total_count > 0) { ?>
			<div class="list-page text-center">
				<ul class="pagination pagination-sm en">
					<?php if($prev_part_href) { ?>
						<li><a href="<?php echo $prev_part_href;?>">이전검색</a></li>
					<?php } ?>
					<?php echo apms_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, './board.php?bo_table='.$bo_table.$qstr.'&amp;page=');?>
					<?php if($next_part_href) { ?>
						<li><a href="<?php echo $next_part_href;?>">다음검색</a></li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>

		<div class="clearfix"></div>

		<?php if($is_checkbox) { ?>
			<noscript>
			<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
			</noscript>
		<?php } ?>

		<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<h4 id="myModalLabel"><i class="fa fa-search fa-lg"></i> Search</h4>
						</div>
						<form name="fsearch" method="get" role="form" class="form" style="margin-top:20px;">
							<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
							<input type="hidden" name="sca" value="<?php echo $sca ?>">
							<input type="hidden" name="sop" value="and">
							<div class="form-group">
								<label for="sfl" class="sound_only">검색대상</label>
								<select name="sfl" id="sfl" class="form-control input-sm">
									<option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
									<option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
									<option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>전체</option>
									<option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
									<option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
									<option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
									<option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option>
								</select>
							</div>
							<div class="form-group">
								<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
								<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="form-control input-sm" maxlength="20" placeholder="검색어">
							</div>

							<div class="btn-group btn-group-justified">
								<div class="btn-group">
									<button type="submit" class="btn btn-color"><i class="fa fa-check"></i></button>
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-black" data-dismiss="modal"><i class="fa fa-times"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<form name="fsearch" method="get" role="form" class="form" style="margin-top: 20px; position: absolute; width: 400px; top: 610px; margin-left: 78.5rem;">
			<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
			<input type="hidden" name="sca" value="<?php echo $sca ?>">
			<input type="hidden" name="sop" value="and">
			<div class="form-group" style="float:left; width:70px;">
				<label for="sfl" class="sound_only">검색대상</label>
				<select name="sfl" id="sfl" class="form-control input-sm" style="height: 38px;">
					<option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
					<option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
					<option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>전체</option>
				</select>
			</div>
			<div class="btn-group btn-group-justified"  style="float:right; width: 45px;">
				<div class="btn-group">
					<button type="submit" class="btn btn-color" style="padding-top: 2px; background-color: rgb(10 41 114); height:38px;"><i class="fa fa-search" style="transform: scale(1.3); margin-top: 4px;"></i></button>
				</div>
			</div>
			<div class="form-group"  style="float:left; width: 285px;">
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="form-control input-sm" maxlength="20" placeholder="검색어를 입력해주세요" style="height:38px; border: 1px solid #b0b0b0; border-left: none;">
			</div>
		</form>
	</div>
</section>
<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
	var f = document.fboardlist;

	for (var i=0; i<f.length; i++) {
		if (f.elements[i].name == "chk_wr_id[]")
			f.elements[i].checked = sw;
	}
}
$(function(){
	$("#btn_chkall").click(function(){
		var clicked_checked = $(this);

		if(clicked_checked.hasClass('active')) {
			all_checked(false);
			clicked_checked.removeClass('active');
		} else {
			all_checked(true);
			clicked_checked.addClass('active');
		}
	});
});
function fboardlist_submit(f) {
	var chk_count = 0;

	for (var i=0; i<f.length; i++) {
		if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
			chk_count++;
	}

	if (!chk_count) {
		alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
		return false;
	}

	if(document.pressed == "선택복사") {
		select_copy("copy");
		return;
	}

	if(document.pressed == "선택이동") {
		select_copy("move");
		return;
	}

	if(document.pressed == "선택삭제") {
		if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
			return false;

		f.removeAttribute("target");
		f.action = "./board_list_update.php";
	}

	return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
	var f = document.fboardlist;

	if (sw == "copy")
		str = "복사";
	else
		str = "이동";

	var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

	f.sw.value = sw;
	f.target = "move";
	f.action = "./move.php";
	f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
