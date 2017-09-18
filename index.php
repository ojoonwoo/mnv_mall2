<?
	include_once "./config.php";
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=640">
<!-- <meta name="viewport" content="width=device-width"> -->
<link href='https://cdn.rawgit.com/openhiun/hangul/14c0f6faa2941116bb53001d6a7dcd5e82300c3f/nanumbarungothic.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="./lib/Swiper-master/dist/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="./css/style_jw.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./lib/Swiper-master/dist/js/swiper.jquery.min.js"></script>
<title>촌의감각 메인페이지</title>
</head>
<body>
	<div id="chon-app">
<?
	include_once "./head_area.php";
?>
		<div id="container" class="main">
			<div class="section main-slider swiper-container">
				<div class="slider swiper-wrapper">
					<div class="slide swiper-slide _01" style="background: url(./images/main_banner_01.jpg) center center / cover no-repeat;">
					</div>
					<div class="slide swiper-slide _02" style="background: url(./images/main_banner_02.jpg) center center / cover no-repeat;">
					</div>
					<div class="slide swiper-slide _03" style="background: url(./images/main_banner_03.jpg) center center / cover no-repeat;">
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
			<div class="section brand">
				<div class="title">
					<h3>
						BRAND STORY
					</h3>
				</div>
				<div class="brand-slider">
					<div class="slide _01">
						<div class="main-block">
							<img src="./images/brand_main_01.jpg">
						</div>
						<div class="intro-block layout-1 clearfix">
							<figure class="product">
								<a href="#">
									<img src="./images/brand_product_01.png">
									<figcaption>
										<span class="sub">기품있는 상차림</span>
										<span class="bname">비즐</span>
									</figcaption>
								</a>
							</figure>
							<figure class="product">
								<a href="#">
									<img src="./images/brand_product_02.png">
									<figcaption>
										<span class="sub">기품있는 상차림</span>
										<span class="bname">비즐</span>
									</figcaption>
								</a>
							</figure>
							<figure class="product fullW">
								<a href="#">
									<img src="./images/brand_product_03.png">
									<figcaption>
										<span class="sub">기품있는 상차림</span>
										<span class="bname">비즐</span>
										<span class="desc">단아하게 하얀색의 도자기가 저절로 아끼는 마음을 만들어 냅니다.</span>
									</figcaption>
								</a>
							</figure>
						</div>
					</div>
				</div>
			</div>
			<div class="section newest">
				<div class="grid">
					<ul class="list-row clearfix">
						<li class="col">
							<figure class="pr-item">
								<a href="#">
									<img src="./images/newest_01.jpg">
								</a>
							</figure>
						</li>
						<li class="col">
							<figure class="pr-item">
								<a href="#">
									<img src="./images/newest_02.jpg">
								</a>
							</figure>
						</li>
						<li class="col">
							<figure class="pr-item">
								<a href="#">
									<img src="./images/newest_03.jpg">
								</a>
							</figure>
						</li>
						<li class="col">
							<figure class="pr-item">
								<a href="#">
									<img src="./images/newest_04.jpg">
								</a>
							</figure>
						</li>
						<li class="col">
							<figure class="pr-item">
								<a href="#">
									<img src="./images/newest_05.jpg">
								</a>
							</figure>
						</li>
						<li class="col">
							<figure class="pr-item">
								<a href="#">
									<img src="./images/newest_06.jpg">
								</a>
							</figure>
						</li>
					</ul>
				</div>
			</div>
			<div class="section magazine">
				<a href="#">
					<img src="./images/magazine_01.jpg">
				</a>
			</div>
			<div class="section sale">
				<div class="title">
					<h3>
						SALE
					</h3>
				</div>
				<div class="grid">
					<ul class="list-row clearfix">
						<li class="col">
							<figure class="pr-item">
								<a href="#">
									<img src="./images/sale_sample.png">
									<figcaption>
										<span class="price">20,000</span>
										<span class="percent">50%</span>
										<span class="saleP">10,000</span>
									</figcaption>
								</a>
							</figure>
						</li>
						<li class="col">
							<figure class="pr-item">
								<a href="#">
									<img src="./images/sale_sample.png">
									<figcaption>
										<span class="price">20,000</span>
										<span class="percent">50%</span>
										<span class="saleP">10,000</span>
									</figcaption>
								</a>
							</figure>
						</li>
						<li class="col">
							<figure class="pr-item">
								<a href="#">
									<img src="./images/sale_sample.png">
									<figcaption>
										<span class="price">20,000</span>
										<span class="percent">50%</span>
										<span class="saleP">10,000</span>
									</figcaption>
								</a>
							</figure>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="nav">
				<ul class="clearfix">
					<li>
						<a href="#">
							<span>촌의감각</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>개인정보취급방침</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span>이용약관</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="social">
				<a class="icon kt" href="#"></a><a class="icon insta" href="#"></a>
			</div>
			<div class="mall-info">
				<div>
					<p>상호 : 촌의 감각 (미니버타이징 주식회사)</p>
				</div>
				<div>
					<p>대표자(성명) : 양선혜</p>
				</div>
				<div>
					<p>개인정보관리책임자 : 김영훈 yh.kim@minivertising.kr</p>
				</div>
				<div>
					<p>사업자등록번호 : 114-87-11622 </p>
					<a href="#">[사업자 정보확인]</a>
				</div>
				<div>
					<p>통신판매업 : 제 2017-</p>
				</div>
				<div>
					<p>주소 : 서울특별시 서초구</p>
				</div>
				<div>
					<p>고객센터 : 02-532-2475</p>
				</div>
				<div>
					<p>Mon-Fri 10:30 ~ 5:30 / Off time : 12:00 ~ 2:00</p>
				</div>
				<div>
					<p>팩스 : 02-532-2493</p>
				</div>
				<div>
					<p>@chon Right Reserved.</p>
				</div>
			</div>
			<div class="go-top">
				<a href="#">
					<span>TOP</span>
				</a>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var $header = $('#header');
		var $app = $('#chon-app');

		// scrolling header action
		$(window).on('scroll', function() {
			var currentScroll = $(this).scrollTop();
			if(currentScroll > $header.height() && !$app.hasClass('menu-opened')) {
				$app.addClass('scrolled');
			} else {
				$app.removeClass('scrolled');
			}

			if(currentScroll > ($app.height()/3)) {
				$('.go-top').css({
					opacity: 1
				});
			} else {
				$('.go-top').css({
					opacity: 0
				});
			}
			// (currentScroll > $header.height()) ? $headerBg.addClass('scrolled') : $headerBg.remove
		});
		$(document).ready(function() {
			// swiper initialize
			var chonSwiper = new Swiper ('.swiper-container', {
				// Optional parameters
				direction: 'horizontal',
				effect: 'fade',
				speed: 2000,
				loop: true,
				autoplay: 4000,
				autoplayDisableOnInteraction: false,
				pagination: '.swiper-pagination',
				paginationClickable: true,
				paginationBulletRender: function(swiper, index, className) {
					return '<span class="' + className +'">' + '</span>';
				}
				// If we need pagination
				// pagination: '.swiper-pagination'
			});

			$('.gnb').on('click', function() {
				$('#menu-layer').slideDown('normal');
				$app.hasClass('menu-opened') ? $app.removeClass('menu-opened') : $app.addClass('menu-opened');
			});
			$('#menu-layer .close-btn a').on('click', function() {
				$app.removeClass('menu-opened');
				$('#menu-layer').slideUp('normal');
			});
		});


	</script>
</body>
</html>
