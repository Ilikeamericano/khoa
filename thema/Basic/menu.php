<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
?>
<style>
@media screen and (max-width: 1250px) {
	#menu-ul { display:none; }
}

</style>
<script>
		$(document).ready(function(){
			var scroll_pos = 0;

			$(document).scroll(function() { 

				scroll_pos = $(this).scrollTop();

				if(scroll_pos > 300) {

					$(".pc-menu").css('background', '#fff');
					$('.menu-a').css('color', '#000');
					$('#logo-01').attr('src','<?php echo G5_IMG_URL ?>/logo_b.png');
					$('#r_home').attr('src','<?php echo G5_IMG_URL ?>/koha.png');
					$('#r_menu').attr('src','<?php echo G5_IMG_URL ?>/menu-black.png');

				} else {

					$(".pc-menu").css('background', '#0000');
					$('.menu-a').css('color', '#fff');
					$('#logo-01').attr('src','<?php echo G5_IMG_URL ?>/logo-w.png');
					$('#r_home').attr('src','<?php echo G5_IMG_URL ?>/koha-white.png');
					$('#r_menu').attr('src','<?php echo G5_IMG_URL ?>/menu-white.png');
				}

			});
		  $('.more').click(function(){
			if($('.more').hasClass('more')){
			   //$('.more').addClass('close').removeClass('more');
			   $('.board').css('display', 'block');
			   $('.more').css('visibility', 'hidden');
			   $('.menu-right-cont').css('position', 'absolute');
			   $('.menu-right-cont').css('right', '0px');
			   $('.menu-left-logo-img').css('position', 'absolute');
			   $('.menu-ul').css('display', 'none');
			   //$('#fv-dots').css('visibility', 'hidden');
			}
		  });
		  $('.cls-btn').click(function(){
			if($('.more').hasClass('more')){
			  // $('.close').addClass('more').removeClass('close');
			   $('.board').css('display', 'none');
			   $('.more').css('visibility', '');
			   $('.menu-right-cont').css('position', '');
			   $('.menu-right-cont').css('right', '');
			   $('.menu-left-logo-img').css('position', '');
			   $('.menu-ul').css('display', 'table');
			   //$('#fv-dots').css('visibility', 'visible');
			}
		  });
		  $('.pc-menu').hover(function(){ // 매뉴에 마우스 hover했을때
				//alert('background =' + $('.pc-menu').css('backgroundColor'));
			if($('.pc-menu').css('backgroundColor') == 'rgba(0, 0, 0, 0)'){
			   $('.pc-menu').css('background', '#fff');
			}
			   $('.menu-a').css('color', '#000');
			   $('#logo-01').attr('src','<?php echo G5_IMG_URL ?>/logo_b.png');
			   $('#r_home').attr('src','<?php echo G5_IMG_URL ?>/koha.png');
			   $('#r_menu').attr('src','<?php echo G5_IMG_URL ?>/menu-black.png');
		  }, function(){					// 매뉴에 마우스 hover out했을때
				if($('.pc-menu').css('backgroundColor') == 'rgb(255, 255, 255)' && scroll_pos < 300 ){
					$('.pc-menu').css('background', '#0000');
					$('.menu-a').css('color', '#fff');
					$('#logo-01').attr('src','<?php echo G5_IMG_URL ?>/logo-w.png');
					$('#r_home').attr('src','<?php echo G5_IMG_URL ?>/koha-white.png');
					$('#r_menu').attr('src','<?php echo G5_IMG_URL ?>/menu-white.png');
				}
		  });
		});
	</script>
<?php if($is_top_nav == "float"){ // 좌측형 ?>
	<div class="nav-visible">
		<div class="at-container">
			<div class="nav-top nav-float nav-slide">
				<ul class="menu-ul">
				<li class="menu-li <?php echo ($is_index) ? 'on' : 'off';?>">
					<a class="" href="<?php echo $at_href['main'];?>">
						<img src="<?php echo G5_IMG_URL?>/logo_w.png">
					</a>
				</li>
				<?php 
					for ($i=1; $i < $menu_cnt; $i++) {

						if(!$menu[$i]['gr_id']) continue;

				?>
					<li class="menu-li <?php echo $menu[$i]['on'];?>">
						<a class="menu-a nav-height" href="<?php echo $menu[$i]['href'];?>"<?php echo $menu[$i]['target'];?>>
							<?php echo $menu[$i]['name'];?>
							<?php if($menu[$i]['new'] == "new") { ?>
								<i class="fa fa-bolt new"></i>
							<?php } ?>
						</a>
						<?php if($menu[$i]['is_sub']) { //Is Sub Menu ?>
							<div class="sub-slide sub-1div">
								<ul class="sub-1dul subm-w pull-left">
								<?php 
									$smw1 = 1; //나눔 체크
									for($j=0; $j < count($menu[$i]['sub']); $j++) { 
								?>
									<?php if($menu[$i]['sub'][$j]['sp']) { //나눔 ?>
										</ul>
										<ul class="sub-1dul subm-w pull-left">
									<?php $smw1++; } // 나눔 카운트 ?>

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
										<?php if($menu[$i]['sub'][$j]['is_sub']) { // Is Sub Menu ?>
											<div class="sub-slide sub-2div">
												<ul class="sub-2dul subm-w pull-left">					
												<?php 
													$smw2 = 1; //나눔 체크
													for($k=0; $k < count($menu[$i]['sub'][$j]['sub']); $k++) { 
												?>
													<?php if($menu[$i]['sub'][$j]['sub'][$k]['sp']) { //나눔 ?>
														</ul>
														<ul class="sub-2dul subm-w pull-left">
													<?php $smw2++; } // 나눔 카운트 ?>

													<?php if($menu[$i]['sub'][$j]['sub'][$k]['line']) { //구분라인 ?>
														<li class="sub-2line"><a><?php echo $menu[$i]['sub'][$j]['sub'][$k]['line'];?></a></li>
													<?php } ?>

													<li class="sub-2dli <?php echo $menu[$i]['sub'][$j]['sub'][$k]['on'];?>">
														<a href="<?php echo $menu[$i]['sub'][$j]['sub'][$k]['href'];?>" class="sub-2da"<?php echo $menu[$i]['sub'][$j]['sub'][$k]['target'];?>>
															<?php echo $menu[$i]['sub'][$j]['sub'][$k]['name'];?>
															<?php if($menu[$i]['sub'][$j]['sub'][$k]['new'] == "new") { ?>
																<i class="fa fa-bolt sub-2new"></i>
															<?php } ?>
														</a>
													</li>
												<?php } ?>
												</ul>
												<?php $smw2 = ($smw2 > 1) ? $is_subw * $smw2 : 0; //서브메뉴 너비 ?>
												<div class="clearfix"<?php echo ($smw2) ? ' style="width:'.$smw2.'px;"' : '';?>></div>
											</div>
										<?php } ?>
									</li>
								<?php } //for ?>
								</ul>
								<?php $smw1 = ($smw1 > 1) ? $is_subw * $smw1 : 0; //서브메뉴 너비 ?>
								<div class="clearfix"<?php echo ($smw1) ? ' style="width:'.$smw1.'px;"' : '';?>></div>
							</div>
						<?php } ?>
					</li>
				<?php } //for ?>
				</ul>
			</div><!-- .nav-top -->
		</div>	<!-- .nav-container -->
	</div><!-- .nav-visible -->

<?php } else { // 배분형 ?>

	<div class="nav-visible">
		<!--<div class="at-container">-->
			<div class="nav-top nav-both nav-slide">
				<div class="menu-left-logo-img">
					<a href="<?php echo $at_href['main'];?>">
						<img src="<?php echo G5_IMG_URL?>/logo-w.png" style="width: 220px;" id="logo-01">
					</a>
				</div>
				<ul class="menu-ul" id="menu-ul" style="">
				<!--<li class="menu-li nav-home <?php echo ($is_index) ? 'on' : 'off';?>">
					<a class="" href="<?php echo $at_href['main'];?>">
						<img src="http://koaautomotive.com/img/logo_w.png">
					</a>
				</li>-->
				<?php 
					for ($i=1; $i < $menu_cnt; $i++) {

						if(!$menu[$i]['gr_id']) continue;

				?>
					<li class="menu-li <?php echo $menu[$i]['on'];?>">
						<a class="menu-a nav-height" href="<?php echo $menu[$i]['href'];?>"<?php echo $menu[$i]['target'];?>>
							<?php echo $menu[$i]['name'];?>
							<?php if($menu[$i]['new'] == "new") { ?>
								<i class="fa fa-bolt new"></i>
							<?php } ?>
						</a>
						<?php if($menu[$i]['is_sub']) { //Is Sub Menu ?>
							<div class="sub-slide sub-1div">
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
										<?php if($menu[$i]['sub'][$j]['is_sub']) { // Is Sub Menu ?>
											<div class="sub-slide sub-2div">
												<ul class="sub-2dul subm-w pull-left">					
												<?php 
													$smw2 = 1; //나눔 체크
													for($k=0; $k < count($menu[$i]['sub'][$j]['sub']); $k++) { 
												?>
													<?php if($menu[$i]['sub'][$j]['sub'][$k]['sp']) { //나눔 ?>
														</ul>
														<ul class="sub-2dul subm-w pull-left">
													<?php $smw2++; } // 나눔 카운트 ?>

													<?php if($menu[$i]['sub'][$j]['sub'][$k]['line']) { //구분라인 ?>
														<li class="sub-2line"><a><?php echo $menu[$i]['sub'][$j]['sub'][$k]['line'];?></a></li>
													<?php } ?>

													<li class="sub-2dli <?php echo $menu[$i]['sub'][$j]['sub'][$k]['on'];?>">
														<a href="<?php echo $menu[$i]['sub'][$j]['sub'][$k]['href'];?>" class="sub-2da"<?php echo $menu[$i]['sub'][$j]['sub'][$k]['target'];?>>
															<?php echo $menu[$i]['sub'][$j]['sub'][$k]['name'];?>
															<?php if($menu[$i]['sub'][$j]['sub'][$k]['new'] == "new") { ?>
																<i class="fa fa-bolt sub-2new"></i>
															<?php } ?>
														</a>
													</li>
												<?php } ?>
												</ul>
												<?php $smw2 = ($smw2 > 1) ? $is_subw * $smw2 : 0; //서브메뉴 너비 ?>
												<div class="clearfix"<?php echo ($smw2) ? ' style="width:'.$smw2.'px;"' : '';?>></div>
											</div>
										<?php } ?>
									</li>
								<?php } //for ?>
								</ul>
							</div>
						<?php } ?>
					</li>
					
				<?php } //for ?>
				<!--<div style="float: right; margin-top: 30px; cursor:pointer;margin-right: -100px;">
					<img src="http://koaautomotive.com/img/ic_menu_w.png">
				</div>-->
				<!-- 우측공간 확보용 -->
				<!--<li class="menu-li nav-rw"><a>&nbsp;</a></li>-->
				</ul>
				<div class="menu-right-cont">
					<div style="float: right; padding: 30px 10% 0px 0px;">
						<a class="more" style="float:right;">
							<img src="<?php echo G5_IMG_URL ?>/menu-white.png" id="r_menu" style="width: 36px; height: 28px;">
						</a>
					</div>
					<div style="float: right; padding: 30px 12% 0px 0px;">
						<a class="" href="http://sungtaek13.dothome.co.kr" style="float:right;" target="_blank" >
							<img src="<?php echo G5_IMG_URL ?>/koha-white.png"id="r_home">
						</a>
					</div>
				</div>
			</div><!-- .nav-top -->
		<!--</div>-->	<!-- .nav-container -->
		
		<div class="board" style="display:none;">
			<div class="list">
				
				<div class="board-menu-right"><a class="cls-btn" style="float:left;"><img src="<?php echo G5_IMG_URL ?>/close-icon.png" style="width: 30px; height: 30px;"></a></div>
				
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
					<ul class="board-menu-ul">
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-1)]['sub'][0]['href'];?>"><li>CEO 인사말</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-1)]['sub'][1]['href'];?>"><li>연혁</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-1)]['sub'][2]['href'];?>"><li>비전</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-1)]['sub'][3]['href'];?>"><li>사업부 소개</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-1)]['sub'][4]['href'];?>"><li>글로벌 네트워크</li></a>
					</ul>
					<ul class="board-menu-ul">
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-2)]['sub'][0]['href'];?>"><li>연구소 소개</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-2)]['sub'][1]['href'];?>"><li>연구성과</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-2)]['sub'][2]['href'];?>"><li>국내외 특허</li></a>
					</ul>
					<ul class="board-menu-ul">
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-3)]['sub'][0]['href'];?>"><li>Motor Core</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-3)]['sub'][1]['href'];?>"><li>PCB Controller</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-3)]['sub'][2]['href'];?>"><li>In Wheel Motor</li></a>
					</ul>
					<ul class="board-menu-ul">
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-4)]['sub'][0]['href'];?>"><li>의성공장</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-4)]['sub'][1]['href'];?>"><li>광주공장</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-4)]['sub'][2]['href'];?>"><li>태주공장</li></a>
					</ul>
					<ul class="board-menu-ul">
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-5)]['sub'][1]['href'];?>"><li>보도자료</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-5)]['sub'][0]['href'];?>"><li>미디어 룸</li></a>
					</ul>
					<ul class="board-menu-ul">
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-6)]['sub'][0]['href'];?>"><li>공지사항</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-6)]['sub'][1]['href'];?>"><li>온라인 문의</li></a>
						<a href="<?php echo $menu[$menu_cnt-($menu_cnt-6)]['sub'][2]['href'];?>"><li>채용공고</li></a>
					</ul>
				</div>
			</div>
			<div style="bottom:0; float: left; margin-top: 40%;">&nbsp;</div>
		</div>
	</div><!-- .nav-visible -->
	

<?php } ?>
