<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
		<?php if($col_name) { ?>
			<?php if($col_name == "two") { ?>
					<!--</div>-->
					<div class="col-md-<?php echo $col_side;?><?php echo ($at_set['side']) ? ' pull-left' : '';?> at-col at-side">
						<?php include_once($is_side_file); // Side ?>
					</div>
				<!--</div>-->
			<?php } else { ?>
				</div><!-- .at-content -->
			<?php } ?>
			<!--</div> .at-container -->
		<?php } ?>
	<!--</div> .at-body -->

	<?php if(!$is_main_footer) { ?>
	<div class="tw" id="re" style="background-color: #222222;">
		<footer class="at-footer">
			<div class="footer-bg">
				<div class="footer-left">
					<div class="footer-left-title">
						코아오토모티브
					</div>
					<div class="footer-left-sub">
						A 경상북도 의성군 의성읍 용연1길 40-4<br/>
						T 054-833-5951~3 | F 054-833-5955
					</div>
				</div>
				<div class="footer-right">
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=contact"><div class="footer-con">온라인 문의</div></a>
					<div class="footer-right-title">Copyright ⓒ KOA AUTOMOTIVE. All rights reserved.</div>
				</div>
			</div>
			<script>
				$(document).ready(function () {
				  var fv = $("#fullview").fullView({
					//Navigation
					dots: true,
					dotsPosition: "right",
					//dotsTooltips: true,

					//Scrolling
					easing: "swing",
					//backToTop: true,

					// Accessibility
					keyboardScrolling: true,

						
					// Callback
					onScrollEnd: function (currentView, preView) {
					  console.log("Current", currentView);
					  console.log("Previus", preView);
					}
				  });
				  for(var i = 0; i <= 4; i++){
					const find = document.getElementById("help_"+i);
					switch (i) {
						case 0:
							find.innerHTML = "HOME"
							break;
						case 1:
							find.innerHTML = "공장"
							break;
						case 2:
							find.innerHTML = "연구개발"
							break;
						case 3:
							find.innerHTML = "뉴스룸"
							break;
						case 4:
							find.innerHTML = "회사소개"
							break;
						default:
							break;
					}
				}
				var hid = document.querySelectorAll('#fv-dots ul li a');
					hid[4].style.display = 'none';
				});
			</script>
			<script>
			/* 화살표 함수 */
			const label = document.querySelectorAll('.label');
			label.forEach(function(lb){
				lb.addEventListener('click', e => {
					let optionList = lb.nextElementSibling;
					let optionItems = optionList.querySelectorAll('.optionItem');
					clickLabel(lb, optionItems);
				})
			});
			const clickLabel = (lb, optionItems) => {
				if(lb.parentNode.classList.contains('active')) {
					lb.parentNode.classList.remove('active');
					optionItems.forEach((opt) => {
						opt.removeEventListener('click', () => {
							handleSelect(lb, opt)
						})
					})
				} else {
					lb.parentNode.classList.add('active');
					optionItems.forEach((opt) => {
						opt.addEventListener('click', () => {
							handleSelect(lb, opt)
						})
					})
				}
			}
			const handleSelect = (label, item) => {
				label.innerHTML = item.textContent;
				label.parentNode.classList.remove('active');
			}
			</script>
		</footer>
	</div>
</div> <!-- fullview  -->
	<?php } ?>
</div><!-- .wrapper -->

<div class="at-go">
	<div id="go-btn" class="go-btn">
		<span class="go-top cursor"><i class="fa fa-chevron-up"></i></span>
		<span class="go-bottom cursor"><i class="fa fa-chevron-down"></i></span>
	</div>
</div>

<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo THEMA_URL;?>/assets/js/respond.js"></script>
<![endif]-->

<!-- JavaScript -->
<script>
var sub_show = "<?php echo $at_set['subv'];?>";
var sub_hide = "<?php echo $at_set['subh'];?>";
var menu_startAt = "<?php echo ($m_sat) ? $m_sat : 0;?>";
var menu_sub = "<?php echo $m_sub;?>";
var menu_subAt = "<?php echo ($m_subsat) ? $m_subsat : 0;?>";
</script>
<script src="<?php echo THEMA_URL;?>/assets/bs3/js/bootstrap.min.js"></script>
<script src="<?php echo THEMA_URL;?>/assets/js/sly.min.js"></script>
<script src="<?php echo THEMA_URL;?>/assets/js/custom.js"></script>
<?php if($is_sticky_nav) { ?>
<script src="<?php echo THEMA_URL;?>/assets/js/sticky.js"></script>
<?php } ?>

<?php echo apms_widget('basic-sidebar'); //사이드바 및 모바일 메뉴(UI) ?>

<?php if($is_designer || $is_demo) include_once(THEMA_PATH.'/assets/switcher.php'); //Style Switcher ?>
