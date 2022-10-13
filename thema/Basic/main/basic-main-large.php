<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 대표아이디 설정
$wid = 'CMBL';

// 게시판 제목 폰트 설정
$font = 'font-16 en';

// 게시판 제목 하단라인컬러 설정 - red, blue, green, orangered, black, orange, yellow, navy, violet, deepblue, crimson..
$line = 'navy';

// 사이드 위치 설정 - left, right
$side = ($at_set['side']) ? 'left' : 'right';

?>
<style>
	.widget-index .at-main,
	.widget-index .at-side { padding-top:10px; padding-bottom:0px; }
	.widget-index .div-title-underbar { margin-bottom:15px; }
	.widget-index .div-title-underbar span { padding-bottom:4px; }
	.widget-index .div-title-underbar span b { font-weight:500; }
	.widget-index .widget-img img { display:block; max-width:100%; /* 배너 이미지 */ }
	.widget-box { margin-bottom:25px; }
	.title-bg{ background: url(<?php echo G5_IMG_URL?>/slide-01.jpg); background-position: center; background-size: cover; }
	.sub-title-01{margin-top: 28%; font-size: 60px; font-weight: bold; color: #fff;}
	.sub-title-02{font-size: 60px; font-weight: bold; color: #fff; }
	.sub-title-03{font-size: 20px; font-weight: bold; padding-top: 20px; color:#fff;}
	.sub-title-04{font-size: 13px; font-weight: bold; margin-top: 55px; padding: 15px 34px; float: left; border: 1px solid #fff; color: #fff; cursor: pointer;}
	.sub-title-container{ height:100%; }
	#sub-title-10-1{background: url(<?php echo G5_IMG_URL?>/slide-02-1.jpg); background-size: 100% 100%; background-position: center;}
	.sub-title-10{width: 33.333333%; float: left; height: 100%; color:#fff;}
	#sub-title-20-1{background: url(<?php echo G5_IMG_URL?>/slide-02-2.jpg); background-size: 100% 100%; background-position: center;}
	.sub-title-20{width: 33.333333%; float: left; height: 100%; color:#fff;}
	#sub-title-30-1{background: url(<?php echo G5_IMG_URL?>/slide-02-3.jpg); background-size: 100% 100%; background-position: center;}
	.sub-title-30{width: 33.333333%; float: left; height: 100%; color:#fff;}
	.sub-title-10-01{font-size: 28px; font-weight: bold; margin-top: 294px;}
	.sub-title-10-02{font-size: 38px; font-weight: bold; margin-top: 20px;}
	.sub-title-10-03{margin-top: 30px; font-size: 20px; font-weight: bold;}
	.sub-title-10-04{font-size: 17px; margin-top: 20px; line-height: 30px;}
	.title-03-bg{background: url(http://koaautomotive.com/img/img_main_3.jpg); background-position: center; background-size: cover;}
	.sub-title-05{font-size: 13px; font-weight: bold; margin-top: 55px; padding: 15px 34px; float: left; border: 1px solid #000; color: #000; cursor: pointer;}
	.box-color{background-color: #23ff00; width: 10px; height: 10px; float: left;}
	.title-04-container{ float: left; width: 100%; margin-top: 200px;}
	.title-04-left{ float: left; }
	.title-04-sub{font-size: 38px; font-weight: bold; margin-top: 15px; margin-left: 5px;}
	.sub-title-05{float: right;}
	.title-04-sub-01{ color: #3a3a3a;  margin-top: 30px; font-weight: bold; font-size: 20px;}
	.title-04-bottom-list{list-style: none; border: 1px solid #3a3a3a; width: 23.5%; padding: 30px 21px; margin-right: 2%; float: left;}
	.title-04-bottom{ float: left; width: 100%; margin-top: 100px; }
	.title-04-bottom-ul{ float: left; width: 100%; }
	.title-04-bottom-ul-li{list-style: none; border: 2px solid #000; width: 22%; padding: 30px 50px; margin-right: 4%; float: left;}
	.borde-title-lev{font-size: 1.6vh; color: #80c41c; font-weight: bold;}
	.borde-title{color: #000; font-size: 22px; margin-top: 23px; height: 55px; line-height: 29px; overflow: hidden; font-weight: bold;}
	.borde-sub{color: #59666E; font-size: 17px;  line-height: 28px; height: 87px; overflow: hidden; margin-top: 25px;}
	.borde-time{color: #59666E; margin-top: 66px; font-size: 13px;}
	#fv-dots ul a.active div{ color: #fff; }
	#fv-dots ul li a div{ color: #b5b5b5; font-size: 18px; }
	.list-name{ position: absolute; float: left; margin: -8px; left: -65px; }
	#re{height:194px !important}
	
	@media screen and (max-width: 1050px) {
		.title-04-bottom-list{ width:46%; margin-bottom: 30px; height: 190px; overflow: hidden; }
		.borde-sub{ display:none; }
		.borde-time{ margin-top:25px; }
	}
	
	<!-- 추 가 -->
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
	.board-logo-left{
		float:left;
	}
	
</style>

<?php //echo apms_widget('basic-title', $wid.'-wt1', 'height=400px shadow=4', 'auto=0'); //타이틀 ?>

<div id="fullview">
	<div class="title-bg" id="section1" data-tooltip="Section 1 Title">
		<div class="at-container">
			<div class="sub-title-01">Global No.1</div>
			<div class="sub-title-02">친환경 자동차 부품 기업</div>
			<div class="sub-title-03">끊임없는 변화와 혁신으로 고객과 함께 더 나은 미래를 이끌어가겠습니다.</div>
			<a href="<?php echo G5_BBS_URL?>/page.php?hid=hi"><div class="sub-title-04">
				VIEW MORE
				<img src="http://koaautomotive.com/img/ic_arrow_right_w.png" style="width: 25px; margin-left: 10px;">
			</div></a>
		</div>
	</div>
	<div id="section2" data-tooltip="Section 2 Title">
		<div class="sub-title-container">
			<div class="sub-title-10" id="sub-title-10-1">
				<div class="at-container" style="margin: 0 13%;">
					<div class="sub-title-10-01">01</div>
					<div class="sub-title-10-02">의성공장</div>
					<div class="sub-title-10-03">Motor Core</div>
					<div class="sub-title-10-04">
						의성공장은 24년간 MOTOR CORE 생산 경험으로<br/>
						소형가전에서 자동차용 MOTOR 부문까지<br/>
						다양한 모터응용분야를 가지고 있습니다.
					</div>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pactory"><div class="sub-title-04">
						VIEW MORE
						<img src="http://koaautomotive.com/img/ic_arrow_right_w.png" style="width: 25px; margin-left: 10px;">
					</div></a>
				</div>
			</div>
			<div class="sub-title-20" id="sub-title-20-1">
				<div class="at-container" style="margin: 0 13%;">
					<div class="sub-title-10-01">02</div>
					<div class="sub-title-10-02">광주공장</div>
					<div class="sub-title-10-03">Motor Core&PCB Controller</div>
					<div class="sub-title-10-04">
						광주공장은 BLDC Motor를 주력생산하고 있으며<br/>
						모터의 고효율, 경량화, 소형화 등 자동차 및<br/>
						모터응용분야의 변화되는 트랜드에 대응하고 있습니다.
					</div>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pactory2"><div class="sub-title-04" style="margin-top: 25px;">
						VIEW MORE
						<img src="http://koaautomotive.com/img/ic_arrow_right_w.png" style="width: 25px; margin-left: 10px;">
					</div></a>
				</div>
			</div>
			<div class="sub-title-30" id="sub-title-30-1">
				<div class="at-container" style="margin: 0 13%;">
					<div class="sub-title-10-01">03</div>
					<div class="sub-title-10-02">태주공장</div>
					<div class="sub-title-10-03">In Wheel Motor</div>
					<div class="sub-title-10-04">
						태주공장은 In Wheel Motor를 주력생산하고<br/>
						있으며, 중국시장의 전기차용 모터사업<br/>
						진출을 위한 내부 인프라가 확충 되어있습니다.
					</div>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pactory3"><div class="sub-title-04">
						VIEW MORE
						<img src="http://koaautomotive.com/img/ic_arrow_right_w.png" style="width: 25px; margin-left: 10px;">
					</div></a>
				</div>
			</div>
		</div>
	</div>
	<div class="title-03-bg" id="section3" data-tooltip="Section 3 Title">
		<div class="at-container">
			<div class="sub-title-01">지속적인</div>
			<div class="sub-title-02">연구개발을 이어나갑니다</div>
			<div class="sub-title-03">코아오토모티브는 보다 뛰어난 제품을 개발하고자 노력하고 있습니다.</div>
			<a href="<?php echo G5_BBS_URL?>/page.php?hid=rnd_intro"><div class="sub-title-04">
				VIEW MORE
				<img src="http://koaautomotive.com/img/ic_arrow_right_w.png" style="width: 25px; margin-left: 10px;">
			</div></a>
		</div>
	</div>
	<div id="section4" data-tooltip="Section 4 Title">
		<div class="at-container">
			<div class="title-04-container">
				<div class="title-04-left">
					<div class="box-color"></div>
					<div class="title-04-sub">뉴스룸</div>
					<div class="title-04-sub-01">코아오토모티브의 소식을 알려드립니다.</div>
				</div>
				<div class="title-04-right">
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=news"><div class="sub-title-05">
						VIEW MORE
						<img src="http://koaautomotive.com/img/ic_arrow_right_b.png" style="width: 25px; margin-left: 10px;">
					</div></a>
				</div>
				<div class="title-04-bottom">
					<ul>
						<a href="http://localhost/bbs/board.php?bo_table=news&wr_id=6">
							<li class="title-04-bottom-list">
								<div class="borde-title-lev">News</div>
								<div class="borde-title">[기획│대구 산업구조 전환 8년의 성과] 섬유·자동차부품에서 미래신산업으로 탈바꿈</div>
								<div class="borde-sub">대구의 산업지도와 기업의 판도가 완전히 바뀌고 있다. 섬유산업을 넘어 기계장비, 자동차 부품업을 거쳐 새로운 신성장산업으로 산업구조가 획기적으로 전환되고 있다.대구시가 수년간 추진한 산업혁신의 결과다. 이른바 '5+1 신산업'프로젝트의 성과가 가시화되고 있다.대구시 달성군 구지면에 위치한 '국가물산업클러스터' 전경. 시는 이곳에 삼성·롯데와 강소기업 등 포함 141개 기업을 유치했다. 사진 대구시 제공◆왜 '5+1 신산업'인가 = 11일 대구시가 발표한 대구산업구조 전환 8년의 성과 자료에 따르면 대구시는 2014년부터 '대구의 산업구조를 바꾸지 않으면 지역의 미래가 없다'며 산업구조 개편에 시동을 걸었다.대구의 환경, 산업인프라, 전후방 연관 산업을 분석해 대구가 가장 잘할 수 있고, 미래 먹거리 산업으로 유망한 '물, 의료, 로봇, 미래형자동차, 에너지' 등의 5대 신산업과 시민생활 전반의 정보통신기술(ICT)융합으로 도시공간을 혁신할 수 있는 '스마트시티'를 더해 '5+1 신산업' 중심의 산업구조 개편이 본격 추진됐다.시가 신산업 육성에 집중적으로 투자하고, 중점적으로 추진한 전략은 '신산업별 테스트베드 조성'이다. 소규모 스타트업과 중소기업이 기술개발, 인증, 제품실증 등 여러 단계의 테스트를 받을 수 있는 기반을 조성하는 것부터 시작했다.시는 2014년 시 전체를 미래신성장산업의 테스트베드로 활용하겠다고 공언했다. 지능형자동차시험장을 시작으로 2017년 전국 최초의 스마트시티 전담부서 조직을 통한 수성알파시티 스마트시티 실증센터, 2019년 국내 유일 국가물산업클러스터 본격가동, 의료기기 산업 고도화를 위한 스마트웰니스 규제자유특구 지정 등에 이어 지난해 8월에는 로봇산업의 새로운 전기를 마련할 국가로봇테스트필드를 유치했다.◆연평균 성장률 전국평균 웃돌아 = 산업구조전환의 성과는 각종 통계자료에서 확인되고 있다.통계청 자료에 따르면 2014년부터 6년간 대구의 신산업 연평균 성장률은 전국 평균을 크게 상회했다. 연평균 부가가치 성장률을 보면 물산업이 8.4%(전국 4.6), 로봇 14.5%(5.8), 미래차 1.4%(-1.0), 의료산업 22.8%(9.1), 에너지 25.6%(7.4), ICT 8.6%(4.5)이다.2019년 기준 5대 신산업 분야 660개사의 부가가치 창출액이 총 3조5000억원이었다. 이는 대구 제조업(10인 이상 기업) 전체 부가가치의 39.5%, 대구 생산액 27조 8000억원의 17%를 차지해 지역 주력산업으로 자리잡고 있다.고용에서도 신산업 분야는 높은 성장세를 보이고 있다. 2009년부터 2019년까지 연평균 고용인원이 의료 13.4%, 에너지 9.1%, 로봇 7.3%, 물 산업 5.1%씩 각각 증가했다. 이는 같은 기간 감소 또는 정체된 섬유(-2.3%)와 안경(+2.3%)등 전통제조업의 둔화된 고용창출을 만회했다.미래형자동차와 의료기업이 대구의 상장기업 시가총액 상위권을 차지하는 등 대구시 '5+1'신산업이 최근 급격한 성장세를 보이고 있다한국거래소에 따르면 2021년 9월말 기준 53개 대구 상장기업 중 시총 1위는 2차 전지 양극제를 생산하는 '엘앤에프'였다.이 기업의 시총 6조1895억원이었다. 의약물질을 연구개발해 제조하는 한국비엔씨(시총 2조5173억원)가 3위, 2차전지 등 에너지 관련 제조설비를 생산하는 씨아이에스(시총 1조2303억원) 6위를 차지하는 등 상위 7개사 중 3개가 미래차(2차전지), 의료분야 기업이다.◆물산업 허브도시 자리매김 = 국내 유일의 국가물산업클러스터는 혁신기술 개발을 위한 기술개발 단계부터 해외진출까지 전주기 지원을 위해 만들어진 시설이다. 물산업 5개분야(정수, 하수, 폐수, 재이용, 종합관망 시험) 실험 실증 연구시설로 구성돼 2019년 9월부터 운영되고 있다.대구시는 현재까지 물클러스터에는 삼성, 롯데 등 대기업과 강소기업들을 포함 141개 기업을 유치했다. 3375억원이 투자됐고 1377명의 신규고용 효과가 창출됐다. 2014년 3개에 불과하던 100억원 이상 매출을 기록하는 물기업도 2021년에는 16개 업체로 증가했다. 연매출 3% 이상 연구개발 투자, 수출 비중 5% 이상, 물분야 해외인증 보유 기업 등을 갖춘 환경부 선정 혁신형 물기업 20개 중 9개사가 입주하는 등 대구는 명실상부 전국 최고의 물산업 중심도시로 변신했다.◆전기차·자율주행 선도 = 대구시는 자동차산업의 전기와 자율차 비중 확대, 산업 패러다임 전환 전망에 발빠르게 대응해 미래차 산업 육성에 힘써 온 결과, 현재 모터, 배터리, 충전기, PM산업, 자율주행 등의 분야 선도기업과 스타트업의 성장이 두드러지고 있다.모터분야의 경창산업, 성림첨단산업, 고아정공 등이 급성장하고 자율주행의 이인텔리전스와 드림에이스가 두각을 나타낸다. 배터리분야의 엘엔에프와 씨아이에스, 충전기분야의 대영채비와 차지인 등도 급성장하고 있다. 대구시는 지자체 유일 'ITS'주행시험장 구축을 시작으로 100㎞이상의 도심로에 국내 최대 규모의 자율주행 실증환경을 조성하고 있으며 2019년에는 시민이 체감하는 자율주행 셔틀 서비스를 전국 최초 개시했다.◆최고수준 경쟁력 대구 의료산업 = 의료산업도 2014년 이후 지속적 성장세를 보이고 있다.통계청 자료에 따르면 2014년에서 2019년까지 의료산업의 종사자수는 직전 5년(9.69%)보다 대폭(16.09%) 늘어났다. 부가가치도 14.64%에서 22.82%규모로 증가했다.대구의료산업의 중심인 대구경북첨단의료복합단지는 의료기기, 의약품 연구개발에서 임상, 허가, 생산, 마케팅까지 전주기 기업지원 생태계 구축을 통해 26건의 기술이전과 8200여건의 유무상 기술서비스를 지원하는 실적을 올렸다.이 곳에는 의료기업 148개사가 입주해 있으며, 최근 5년간 고용은 연평균 27%(2015년 1041명→ 2019년 2719명), 기업 매출은 연평균 14%(2015년 2224억원 →2019년 3385억원)으로 높은 성장세를 보이고 있다.◆비수도권 1위 로봇산업 = 대구 로봇산업도 미래신성장 동력으로 급부상하고 있다.로봇기업수, 고용, 매출액 등을 기준으로 보면 비수도권 1위다. 2010년 한국로봇산업진흥원 유치를 시작으로 2012년부터 2017년까지 로봇산업클러스터를 조성하면서 로봇기업이 2014년 48개에서 2019년 202개로 늘었고 매출은 1942억원에서 7328억원으로 증가했다.현대로보틱스 등 글로벌 로봇기업 5개사가 대구 로봇산업을 견인하고 있다.대구시는 2030년까지 로봇기업수 662개사, 고용 1만1799명, 매출 4조1000억원 규모의 성장을 목표로 추진하고 있다.◆세계가 인정한 대구 스마트시티 = 대구시는 2016년 지자체 최초로 스마트시티 전담조직을 신설해 스마트시티 조성에 나섰다.시는 이를 위해 수성알파시티를 중심으로 국토부 스마트시티 실증도시 지정 등 국책사업과 연계하여 도시 전역에 테스트베드를 확산했다.알파시티 내 SW융합클러스터는 3년만에 68개사, 매출 3000억원대로 성장해 비수도권 최고 수준이라는 평가를 받고 있다.전국 최초 스마트시티 아시아·태평양 어워드 3회 수상(2018, 2019, 2021년)과 세계경제포럼 G20 스마트시티 연합 가입(2020년)등으로 세계도 스마트시티 대구를 인정했다. 기업수 662개사, 고용 1만1799명, 매출 4조1000억원 규모의 성장을 목표로 추진하고 있다.최세호 기자 seho@naeil.com</div>
								<div class="borde-time">
									<img src="http://koaautomotive.com/img/ic_clock_b.png" style="height: 13px; margin-top: -2px; margin-right: 5px;">
									2022-06-12 16:43:41
								</div>
							</li>
						</a>
						<a href="http://localhost/bbs/board.php?bo_table=news&wr_id=5">
							<li class="title-04-bottom-list">
								<div class="borde-title-lev">News</div>
								<div class="borde-title">광주시, 전장부품기업 ‘BEST 10 ’ 1차 선정</div>
								<div class="borde-sub">미래차 부품 개발-완성차 납품까지 전방위 맞춤 지원광주광역시는 전장부품기업 ‘베스트(BEST) 10’에 우수 기술력을 보유하고 성장 잠재력이 뛰어난 지역 전장부품 기업 5개사를 1차로 선정했다.전장부품이란 자동차에 사용되는 전기·전자장치 또는 관련 부품으로 전기차 모터, 배터리, 카메라·라이다 센서류, 전선류, 제어기, PCB, 반도체 등이 이에 해당된다.이번 전장부품 기업 ‘베스트 10’ 선정은 미래자동차 핵심분야인 전장부품산업을 선도적으로 육성해 ‘미래차 대전환 광주형 일자리 시즌2’를 성공적으로 안착시키기 위해 추진됐다.참여기업 공모는 전력기반 미래차 파워트레인 분야, 자율주행차 인지·진단 분야, 자동차 편의부품 인포테인먼트 분야 등 3개 분야로 나눠 진행했다.심의위원회 평가 결과 ▲미래차 파워트레인 분야는 세방리튬배터리, 인셀, 고아정공 등 3개사 ▲인지·진단 분야에는 뷰닉스 ▲인포테인먼트 분야에는 한국알프스를 선정했다.이 가운데 미래차 파워트레인 분야의 세방리튬배터리는 전기차용 배터리 수요 증가에 따라 보유기술을 활용한 발전 가능성과 기업 경쟁력이 높은 것으로 평가됐고, 인셀은 배터리팩 전문업체로 높은 기술력과 관련 특허를 다량 보유한 것이 장점으로 부각됐다.고아정공은 트랙션 모터 개발을 통해 미래차 시장 진출 경쟁력이 동종업체보다 매우 높았다.인지·진단 분야의 뷰닉스는 카메라 모듈 생산 자체기술을 보유하고 적외선 나이트비전 및 광학렌즈 개발 등 성장 잠재력을 높게 인정받았다. 인포테인먼트 분야의 한국알프스는 보유기술력을 응용해 스마트 인터페이스 등 미래차 편의부품 산업을 선도할 것으로 평가됐다.광주시는 선정된 5개사와 4월1일 기업지원협약을 체결하고 현장 인터뷰를 통해 수요 사항과 건의사항을 수렴한 후 글로벌 부품기업으로 성장할 수 있도록 전방위 맞춤형 기업 지원을 할 계획이다.이와 함께 신규 국가사업을 공동 발굴하고 완성차 기업과의 공동연구를 추진하는 등 기술경쟁력 향상을 위한 다양한 사업을 추진하고, 고급 연구인력에 대한 고용장려금도 적극 지원해 연구개발(R&D) 역량을 한단계 끌어올릴 계획이다.또한, 5월중에 추가 모집을 통해 2차로 5개 기업을 선정할 예정이다.</div>
								<div class="borde-time"><img src="http://koaautomotive.com/img/ic_clock_b.png" style="height: 13px; margin-top: -2px; margin-right: 5px;">2022-06-12 16:43:36</div>
							</li>
						</a>
						<a href="http://localhost/bbs/board.php?bo_table=news&wr_id=4">
							<li class="title-04-bottom-list">
								<div class="borde-title-lev">News</div>
								<div class="borde-title">의성군, ICT 융합 스마트공장 보급 확산사업에 선정된 제조업체 군비 지원</div>
								<div class="borde-sub">(경북=NSP통신) 조인호 기자 = 의성군(군수 김주수)은 중소기업 제조 현장의 경쟁력 제고를 위해 중소벤처기업부에서 추진하고 있는 ‘2022년 ICT 융합 스마트공장 보급·확산사업’ 에 선정된 관내 제조업체에 군비를 지원한다고 밝혔다.스마트공장 보급·확산사업은 제품설계, 생산공정 개선 등을 위해 IoT 등 첨단기술을 적용한 스마트공장 솔루션 구축 및 구축에 필요한 자동화장비, 제어기, 센서 등을 지원해 주는 사업으로 지원 유형에 따라 기초와 고도화로 나뉘며 사업비 부담률은 국비 50%, 기업부담 50%로 기업부담금이 비교적 높은 사업이다.이에 의성군은 작년에 현장평가를 거쳐 최종 선정된 고아정공 의성공장을 비롯한 관내 6개 업체에 기업부담금의 20%, 1억3천만 원을 군비로 지원해 기업부담을 덜어 준다.스마트공장 보급·확산사업은 경북테크노파크 위탁으로 진행되며 참여를 희망하는 기업은 의성군 경제투자과 문의 또는 경북테크노파크홈페이지에서 2022년 중소기업 스마트제조혁신 지원사업 통합공고를 확인하면 된다.김주수 의성군수는 “제조업 전반의 혁신은 기업대표들의 의지가 무엇보다 중요하다”며 “참여한 업체가 제조공정의 개선을 통해 노동 생산성 향상과 일자리 창출에 기여할 수 있도록 지원에 최선을 다하겠다”고 말했다. NSP통신 조인호 기자 eno8166@nspna.com저작권자ⓒ 한국의 경제뉴스통신사 NSP통신·NSP TV. 무단전재-재배포 금지.</div>
								<div class="borde-time"><img src="http://koaautomotive.com/img/ic_clock_b.png" style="height: 13px; margin-top: -2px; margin-right: 5px;">2022-06-12 16:43:25</div>
							</li>
						</a>
						<a href="http://localhost/bbs/board.php?bo_table=news&wr_id=3">
							<li class="title-04-bottom-list" style="margin-right: 0px;">
								<div class="borde-title-lev">News</div>
								<div class="borde-title">대구 미래차 비전 선포 '자동차 기업 도약 선언</div>
								<div class="borde-sub">8년 후 미래차 전환 200개 회사 지원 목표대구시가 산업통상자원부와 함께 임인년(壬寅年) 새해를 맞아 5일 오후 대구경북과학기술원(DGIST) 컨벤션홀에서 지역 자동차기업의 힘찬 도약을 선언하는 '미래차 전환 비전 선포식'을 개최했다.▲ 대구시와 자동차 산업 관계자들이 미래차 대전환 선포식을 갖고 있다. [대구시 제공]6일 대구시에 따르면 이번 선포식은 지자체, 중앙정부, 기업, 지원기관 등의 역량을 결집해 당면한 미래차 전환의 도전을 슬기롭게 헤쳐 나가고자 마련됐다.행사는 최근의 코로나19 상황을 반영해 철저한 방역수칙 준수 아래 온·오프라인 하이브리드 방식으로 진행됐다. 고아정공, 구영테크, 성림첨단산업, 대영채비, 차지인, 스프링클라우드, 드림에이스 등 30여개의 기업들이 온라인으로 참여했다.시는 산업부와 긴밀한 협력 아래 2030년까지 미래차 전환 200개사 지원, 30개 강소기업 육성을 목표로 하는 추진계획을 발표하고, 이를 위해 미래차 전환 연대협력 강화, 미래 모빌리티 부품 집중 육성, 미래 모빌리티 신(新)생태계 확대 등을 전략으로 제시한다.미래차 전환은 기술개발부터 사업화, 판로개척, 금융, 인력양성 등을 아우르는 종합적인 지원이 필요하다.따라서 개별기관이나 기업의 역량만으로는 한계가 있어 다양한 주체들의 연대·협력이 매우 중요하다.시는 중앙정부, 대학, 이전 공공기관, 지원기관, 기업 등 28개 기관·기업이 협업하는 전환 협의체를 출범해 상생협력을 다짐하는 협약식을 갖고, 지능형자동차부품진흥원을 거점으로 미래차 전환 지원을 총괄하는 '미래차 전환 종합지원센터'를 발족한다.이 센터는 협의체 운영을 총괄하고 지역의 다양한 정책수단 연계를 통해 컨설팅에서부터 기술개발, 사업화, 판로개척, 금융, 인력양성 등에 이르는 미래차 전(全)주기 지원을 담당하게 된다.특히 기업과의 소통을 강화하고자 120여 개의 기업이 참여하는 기업협의체도 별도 구성·운영해 나간다.김부겸 국무총리는 영상 축하메시지를 통해 "산업화 시기에 대구가 보여준 불굴의 의지와 지난 10여 년간 대구가 걸어 온 변화와 혁신의 길을 되짚어볼 때 대구는 미래차 전환을 성공적으로 이루어 낼 것"이라고 말했다.UPI뉴스 / 전주식 기자 jschun@upinews.kr[저작권자ⓒ UPI뉴스. 무단전재-재배포 금지]</div>
								<div class="borde-time"><img src="http://koaautomotive.com/img/ic_clock_b.png" style="height: 13px; margin-top: -2px; margin-right: 5px;">2022-06-12 16:26:45</div>
							</li>
						</a>
					</ul>
				</div>
			</div>
		</div>
	</div>

