<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$attach_list = '';
if ($view['link']) {
	// 링크
	for ($i=1; $i<=count($view['link']); $i++) {
		if ($view['link'][$i]) {
			$attach_list .= '<a class="list-group-item break-word" href="'.$view['link_href'][$i].'" target="_blank">';
			$attach_list .= '<span class="label label-warning pull-right view-cnt">'.number_format($view['link_hit'][$i]).'</span>';
			$attach_list .= '<i class="fa fa-link"></i> '.cut_str($view['link'][$i], 70).'</a>'.PHP_EOL;
		}
	}
}

// 가변 파일
$j = 0;
for ($i=0; $i<count($view['file']); $i++) {
	if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
		if ($board['bo_download_point'] < 0 && $j == 0) {
			$attach_list .= '<a class="list-group-item"><i class="fa fa-bell red"></i> 다운로드시 <b>'.number_format(abs($board['bo_download_point'])).'</b>'.AS_MP.' 차감 (최초 1회 / 재다운로드시 차감없음)</a>'.PHP_EOL;
		}
		$file_tooltip = '';
		if($view['file'][$i]['content']) {
			$file_tooltip = ' data-original-title="'.strip_tags($view['file'][$i]['content']).'" data-toggle="tooltip"';
		}
		$attach_list .= '<a class="list-group-item break-word view_file_download at-tip" href="'.$view['file'][$i]['href'].'"'.$file_tooltip.'>';
		$attach_list .= '<span class="label label-primary pull-right view-cnt">'.number_format($view['file'][$i]['download']).'</span>';
		$attach_list .= '<i class="fa fa-download"></i> '.$view['file'][$i]['source'].' ('.$view['file'][$i]['size'].') &nbsp;';
		$attach_list .= '<span class="en font-11 text-muted"><i class="fa fa-clock-o"></i> '.apms_datetime(strtotime($view['file'][$i]['datetime']), "Y.m.d").'</span></a>'.PHP_EOL;
		$j++;
	}
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css" media="screen">', 0);

?>
<?php if($boset['video']) { ?>
	<style>.view-wrap .apms-autowrap { max-width:<?php echo (G5_IS_MOBILE) ? '100%' : $boset['video'];?> !important;}</style>
<?php } ?>
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
</style>
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
</div>
</div>
<div class="hi-top">
	<div class="at-container">
		<div class="left-hi">
			<div class="smalls">뉴스룸</div>
			<div class="big">미디어 룸</div>
		</div>
	</div>
</div>
<div style="border-bottom: 1px solid #b2b2b2;">
	<div class="at-container">
		<a href="<?php echo $at_href['main'];?>"><div style="float:left; height: 50px; width: 50px; float: left; text-align: center; border-left: 1px solid #b2b2b2;"><img src="<?php echo G5_IMG_URL ?>/home.png" style="margin-top: 13px;"></div></a>
		<div class="sel-con">
			<div class="boxx" style="margin-left: 50px;">
			  <div class="selectBox2 ">
				<button class="label">뉴스룸<img src="<?php echo G5_IMG_URL?>/under_ang_b.png" style="margin-left: 85px; transition: transform 0.3s;"></button>
				<ul class="optionList">
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=hi"><li class="optionItem">회사소개</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=rnd_intro"><li class="optionItem">연구개발</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pd_core"><li class="optionItem">제품</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pactory"><li class="optionItem">공장</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice"><li class="optionItem">고객지원</li></a>
				</ul>
			  </div>
			</div>
			<div class="boxx" style="margin-left: 250px;">
			  <div class="selectBox2" style="border-left: none;">
				<button class="label">미디어룸<img src="<?php echo G5_IMG_URL?>/under_ang.png" style="margin-left: 75px; transition: transform 0.3s;"></button>
				<ul class="optionList" style="width: 201px;">
				  <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=news"><li class="optionItem">보도자료</li></a>
				</ul>
			  </div>
			</div>
		</div>
	</div>
</div>
<div class="at-container">
	<div class="hi-title">미디어 룸</div>
</div>
<div class="at-container">
<div class="view-wrap<?php echo (G5_IS_MOBILE) ? ' view-mobile font-14' : '';?>">
<div style="float: left; width: 100%; border-top: 1px solid #000; border-bottom: 1px solid #b0b0b0; padding: 1rem 0px; margin-bottom: 6rem;">
	<h1 style="float:left;"><?php if($view['photo']) { ?><img src="<?php echo $view['photo'];?>" class="photo" alt=""><?php } ?><?php echo cut_str(get_text($view['wr_subject']), 70); ?></h1>
	<div style="float: right; font-size: 14px; font-weight: bold; padding-top: 1.3rem;">등록일: <?php echo date('y-m-d', $view['date']); //시간 ?></div>
</div>
	<!--<div class="panel panel-default view-head<?php echo ($attach_list) ? '' : ' no-attach';?>">
		<div class="panel-heading">
			<div class="font-12 text-muted">
				<i class="fa fa-user"></i>
				<?php echo $view['name']; //등록자 ?><?php echo ($is_ip_view) ? '<span class="print-hide hidden-xs">&nbsp;('.$ip.')</span>' : ''; ?>
				<?php if($view['ca_name']) { ?>
					<span class="hidden-xs">
						<span class="sp"></span>
						<i class="fa fa-tag"></i>
						<?php echo $view['ca_name']; //분류 ?>
					</span>
				<?php } ?>

				<span class="sp"></span>
				<i class="fa fa-comment"></i>
				<?php echo ($view['wr_comment']) ? '<b class="red">'.number_format($view['wr_comment']).'</b>' : 0; //댓글수 ?>

				<span class="sp"></span>
				<i class="fa fa-eye"></i>
				<?php echo number_format($view['wr_hit']); //조회수 ?>

				<span class="pull-right">
					<?php echo apms_date($view['date'], 'orangered'); //시간 ?>
				</span>
			</div>
		</div>
	   <?php
			if($attach_list) {
				echo '<div class="list-group font-12">'.$attach_list.'</div>'.PHP_EOL;
			}
		?>
	</div>-->

	<?php if ($is_torrent) echo apms_addon('torrent-basic'); // 토렌트 파일정보 ?>

	<?php
		// 이미지 상단 출력
		$v_img_count = count($view['file']);
		if($v_img_count && $is_img_head) {
			echo '<div class="view-img">'.PHP_EOL;
			for ($i=0; $i<=count($view['file']); $i++) {
				if ($view['file'][$i]['view']) {
					echo get_view_thumbnail($view['file'][$i]['view']);
				}
			}
			echo '</div>'.PHP_EOL;
		}
	 ?>

	<div class="view-content" style="overflow: auto;">
		<?php echo get_view_thumbnail($view['content']); ?>
	</div>

	<?php
		// 이미지 하단 출력
		if($v_img_count && $is_img_tail) {
			echo '<div class="view-img">'.PHP_EOL;
			for ($i=0; $i<=count($view['file']); $i++) {
				if ($view['file'][$i]['view']) {
					echo get_view_thumbnail($view['file'][$i]['view']);
				}
			}
			echo '</div>'.PHP_EOL;
		}
	?>

	<?php if ($good_href || $nogood_href) { ?>
		<div class="print-hide view-good-box">
			<?php if ($good_href) { ?>
				<span class="view-good">
					<a href="#" onclick="apms_good('<?php echo $bo_table;?>', '<?php echo $wr_id;?>', 'good', 'wr_good'); return false;">
						<b id="wr_good"><?php echo number_format($view['wr_good']) ?></b>
						<br>
						<i class="fa fa-thumbs-up"></i>
					</a>
				</span>
			<?php } ?>
			<?php if ($nogood_href) { ?>
				<span class="view-nogood">
					<a href="#" onclick="apms_good('<?php echo $bo_table;?>', '<?php echo $wr_id;?>', 'nogood', 'wr_nogood'); return false;">
						<b id="wr_nogood"><?php echo number_format($view['wr_nogood']) ?></b>
						<br>
						<i class="fa fa-thumbs-down"></i>
					</a>
				</span>
			<?php } ?>
		</div>
		<p></p>
	<?php } ?>

	<?php if ($is_tag) { // 태그 ?>
		<p class="view-tag font-12"><i class="fa fa-tags"></i> <?php echo $tag_list;?></p>
	<?php } ?>

	<div class="print-hide view-icon">
		<div class="pull-right">
			<div class="form-group">
				<!--<button onclick="apms_print();" class="btn btn-black btn-xs"><i class="fa fa-print"></i> <span class="hidden-xs">프린트</span></button-->
				<?php if ($scrap_href) { ?>
					<!--<a href="<?php echo $scrap_href;  ?>" target="_blank" class="btn btn-black btn-xs" onclick="win_scrap(this.href); return false;"><i class="fa fa-tags"></i> <span class="hidden-xs">스크랩</span></a>-->
				<?php } ?>
				<?php if ($is_shingo) { ?>
					<button onclick="apms_shingo('<?php echo $bo_table;?>', '<?php echo $wr_id;?>');" class="btn btn-black btn-xs"><i class="fa fa-bell"></i> <span class="hidden-xs">신고</span></button>
				<?php } ?>
				<?php if ($is_admin) { ?>
					<?php if ($view['is_lock']) { // 글이 잠긴상태이면 ?>
						<button onclick="apms_shingo('<?php echo $bo_table;?>', '<?php echo $wr_id;?>', 'unlock');" class="btn btn-black btn-xs"><i class="fa fa-unlock"></i> <span class="hidden-xs">해제</span></button>
					<?php } else { ?>
						<button onclick="apms_shingo('<?php echo $bo_table;?>', '<?php echo $wr_id;?>', 'lock');" class="btn btn-black btn-xs"><i class="fa fa-lock"></i> <span class="hidden-xs">잠금</span></button>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
		<div class="pull-left">
			<div class="form-group">
				<?php include_once(G5_SNS_PATH."/view.sns.skin.php"); // SNS ?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

	<?php if($is_signature) echo apms_addon('sign-basic'); // 회원서명 ?>

	<!--<h3 class="view-comment">Comments</h3>-->
	<?php //include_once('./view_comment.php'); ?>

	<div class="clearfix"></div>
	<?php 
	$href_adress = $list[$i]['href'];
	
		$conn = mysqli_connect("localhost", "sungtaek12", "sungtaek1!" , "sungtaek12");
		$sql = "SELECT * FROM  g5_write_gallery WHERE wr_id = $view[wr_id]+1";
		$sqll = "SELECT * FROM  g5_write_gallery WHERE wr_id = $view[wr_id]-1";
		$sqql = "SELECT * FROM  g5_write_gallery WHERE wr_id = $view[wr_id]+1";
		$sqqll = "SELECT * FROM  g5_write_gallery WHERE wr_id = $view[wr_id]-1";
		$resullt = mysqli_query($conn, $sqql);
		$resulltt = mysqli_query($conn, $sqqll);
		$result = mysqli_query($conn, $sql);
		$resultt = mysqli_query($conn, $sqll);
		$row = mysqli_fetch_array($result);
		$roww = mysqli_fetch_array($resultt);
		$roow = mysqli_fetch_array($resullt);
		$rooww = mysqli_fetch_array($resulltt);
		
		//echo $roow['wr_datetime'];
		//echo $rooww['wr_datetime'];
		
		
	?>
	<div class="print-hide view-btn text-right">
		<div class="btn-group" style="width:100%; font-family:'NotoSerifKR', sans-serif;">
			<?php if ($prev_href) { ?>
				<a href="<?php echo $prev_href ?>" class="btn btn-black btn-sm" title="이전글" style="width:100%; border-top: 1px solid #000; padding: 20px 0px; font-family: none;">
					<div style="width:100%; float:left; font-size:1.5rem;">
					<i style="float: left; margin-top: -5px;padding-right: 1rem;"><img src="<?php echo G5_IMG_URL?>/prev.png"></i><span class="hidden-xs" style="float:left;"> 이전글</span>
						<div style="float:left; padding-left: 6%;"><?php echo $prev_wr_subject; ?></div>
						<div style="float:right;"><?php echo substr($prev_wr_date,0,10); //시간 ?></div>
					</div>
				</a>
			<?php }else{ ?>
					<div style="width:100%; float:left; font-size:1.5rem; border-top: 1px solid #e7e7e7; padding: 20px 0px; color: #e7e7e7;">
						<i style="float: left; margin-top: -5px;padding-right: 1rem;"><img src="<?php echo G5_IMG_URL?>/prev.png"></i>
						<span class="hidden-xs" style="float:left;">이전글</span>
						<div style="float:left; padding-left: 6%;">이전글이 없습니다.</div>
					</div>

					<?php } ?>
			<?php if ($next_href) { ?>
				<a href="<?php echo $next_href ?>" class="btn btn-black btn-sm" title="다음글" style="width:100%; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 20px 0px; font-family: none;">
					<div style="width:100%; float:left; font-size:1.5rem;">
					<i style="float: left; margin-top: -5px;padding-right: 1rem;"><img src="<?php echo G5_IMG_URL?>/next.png"></i><span class="hidden-xs" style="float:left;"> 다음글</span>
						<div style="float:left; padding-left: 6%;"><?php echo $next_wr_subject; ?></div>
						<div style="float:right;"><?php echo substr($next_wr_date,0,10); //시간 ?></div>
					</div>
				</a>
			<?php }else{ ?>
					<div style="width:100%; float:left; font-size:1.5rem; border-top: 1px solid #e7e7e7; padding: 20px 0px; color: #e7e7e7;">
						<i style="float: left; margin-top: -5px;padding-right: 1rem;"><img src="<?php echo G5_IMG_URL?>/next.png"></i>
						<span class="hidden-xs" style="float:left;">다음글</span>
						<div style="float:left; padding-left: 6%;">다음글이 없습니다.</div>
					</div>
			<?php } ?>
			<?php if ($copy_href) { ?>
				<a href="<?php echo $copy_href ?>" class="btn btn-black btn-sm" onclick="board_move(this.href); return false;" title="복사">
					<i class="fa fa-clipboard"></i><span class="hidden-xs"> 복사</span>
				</a>
			<?php } ?>
			<?php if ($move_href) { ?>
				<a href="<?php echo $move_href ?>" class="btn btn-black btn-sm" onclick="board_move(this.href); return false;" title="이동">
					<i class="fa fa-share"></i><span class="hidden-xs"> 이동</span>
				</a>
			<?php } ?>
			<?php if ($delete_href) { ?>
				<a href="<?php echo $delete_href ?>" class="btn btn-black btn-sm" title="삭제" onclick="del(this.href); return false;">
					<i class="fa fa-times"></i><span class="hidden-xs"> 삭제</span>
				</a>
			<?php } ?>
			<?php if ($update_href) { ?>
				<a href="<?php echo $update_href ?>" class="btn btn-black btn-sm" title="수정">
					<i class="fa fa-plus"></i><span class="hidden-xs"> 수정</span>
				</a>
			<?php } ?>
			<?php if ($search_href) { ?>
				<a href="<?php echo $search_href ?>" class="btn btn-black btn-sm">
					<i class="fa fa-search"></i><span class="hidden-xs"> 검색</span>
				</a>
			<?php } ?>
			<div style="float: left; width: 100%; height: 12rem; margin-top: 7rem;">
				<a href="<?php echo $list_href ?>" class="btn btn-black btn-sm" style="float: left; width: 15%; height: 44%;margin-left: 45%; border: 1px solid #000;">
					<div style="font-size: 18px; font-weight: bold; margin-top: 0.8rem;">목록보기</div>
				</a>
			</div>
			<?php if ($reply_href) { ?>
				<a href="<?php echo $reply_href ?>" class="btn btn-black btn-sm">
					<i class="fa fa-comments"></i><span class="hidden-xs"> 답변</span>
				</a>
			<?php } ?>
			<?php if ($write_href) { ?>
				<a href="<?php echo $write_href ?>" class="btn btn-color btn-sm">
					<i class="fa fa-pencil"></i><span class="hidden-xs"> 글쓰기</span>
				</a>
			<?php } ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<script>
function board_move(href){
	window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
$(function() {
	$("a.view_image").click(function() {
		window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
		return false;
	});
	<?php if ($board['bo_download_point'] < 0) { ?>
	$("a.view_file_download").click(function() {
		if(!g5_is_member) {
			alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
			return false;
		}

		var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

		if(confirm(msg)) {
			var href = $(this).attr("href")+"&js=on";
			$(this).attr("href", href);

			return true;
		} else {
			return false;
		}
	});
	<?php } ?>
});
</script>
