<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
html{
	scroll-behavior: smooth;
}
body{
	background-color: #ccc;
}
.title-bg-01{
	background-image: url(http://www.koh-a.com/img/bg_company.jpg);
    padding-top: 15%;
    text-align: center;
	z-index: 0;
}
.lli{
	list-style: none;
    float: left;
    font-size: 20px;
    font-weight: 900;
    padding: 0px 55px;
	color:#000;
}
.ullli{
    background-color: #fff;
}
.title-menu-4{
    display: inline-block;
    border: 1px solid #9d9d9d;
	padding: 15px 90px;
	float: left;
}
.title-001{
    padding-top: 45px;
	padding-bottom: 70px;    
}
.out{
    margin: 0 50px;
    border: 2px solid #e0e0e0;
}
.sign{
	text-align: center;
    font-size: 40px;
    font-weight: 900;
    padding-bottom: 50px;
}
.license{
	border: 2px solid #a5a5a5;
    float: left;
    padding: 40px 80px 80px 29px;
    margin: 40px 20px 20px 20px;
}
.displ{
	display: flex;
	justify-content: center;
}
</style>

<div style="background-color: #ccc;">
	<div class="title-bg-01">
		<div style="font-size: 50px;font-weight: 900;color: #fff;text-shadow: 3px 3px 3px #000;padding-bottom: 15%;">COMPANY</div>

	</div>
	<div class="at-container" style="overflow: initial;">
		<div class="ullli" style="margin-top: -62px;">
			<ul style="display: flex; justify-content: center; padding: 20px 0;">
				<a href="http://sungtaek13.dothome.co.kr/bbs/page.php?hid=company_1"><li class="lli">회사소개</li></a>
				<a href="http://sungtaek13.dothome.co.kr/bbs/page.php?hid=company_2"><li class="lli">회사연혁</li></a>
				<a href="http://sungtaek13.dothome.co.kr/bbs/page.php?hid=company_3"><li class="lli">글로벌네트워크</li></a>
				<a href="http://sungtaek13.dothome.co.kr/bbs/page.php?hid=company_4" style="border-bottom: 2px solid; padding-bottom: 15px;"><li class="lli">인증 및 특허</li></a>
			</ul>
		</div>
	</div>
	<div class="at-container">
		<div class="ullli" style="margin-bottom: 70px;">
			<div class="title-001">
				<div class="sign">인증 및 특허</div>
				<div class="out">
					<ul class="nav nav-tabs" style="list-style: none; text-align: center; font-size: 20px; padding-left: 0px;">
						<a href="#qwe" class="active" data-toggle="tab" ><li class="title-menu-4">행정기관</li></a>
						<a href="#asd" class="" data-toggle="tab" ><li class="title-menu-4">인증기관</li></a>
						<a href="#zxc" class="" data-toggle="tab" ><li class="title-menu-4">고객사</li></a>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="qwe">
							<div class="displ">
								<div class="license">
									LICENSE
									<div>특허증</div>
									<div>제 10-1215969호</div>
								</div>
								<div class="license">
									LICENSE
									<div>특허증</div>
									<div>제 10-1215969호</div>
								</div>
								<div class="license">
									LICENSE
									<div>특허증</div>
									<div>제 10-1215969호</div>
								</div>
								<div class="license">
									LICENSE
									<div>특허증</div>
									<div>제 10-1215969호</div>
								</div>
							</div>
							<div class="displ">
								<div class="license">
									LICENSE
									<div>특허증</div>
									<div>제 10-1215969호</div>
								</div>
								<div class="license">
									LICENSE
									<div>특허증</div>
									<div>제 10-1215969호</div>
								</div>
								<div class="license">
									LICENSE
									<div>특허증</div>
									<div>제 10-1215969호</div>
								</div>
								<div class="license">
									LICENSE
									<div>특허증</div>
									<div>제 10-1215969호</div>
								</div>
							</div>
						</div>
							<div class="tab-pane fade" id="asd">
								<div class="displ">
									<div class="license">
										LICENSE
										<div>특허증</div>
										<div>제 10-1215969호</div>
									</div>
									<div class="license">
										LICENSE
										<div>특허증</div>
										<div>제 10-1215969호</div>
									</div>
									<div class="license">
										LICENSE
										<div>특허증</div>
										<div>제 10-1215969호</div>
									</div>
									<div class="license">
										LICENSE
										<div>특허증</div>
										<div>제 10-1215969호</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="zxc">
								<div class="displ">
									<div class="license">
										LICENSE
										<div>특허증</div>
										<div>제 10-1215969호</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

