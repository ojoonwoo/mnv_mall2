<?
include_once "./header.php";
?>
<body>
	<div id="chon-app">
<?
	include_once "./head_area.php";
?>
		<div id="container" class="about-chon">
			<div class="main-img">
				<img src="./images/about_chon_main.jpg">
			</div>
			<div class="message1">
				<p>
					'촌'이라는 단어는<br>
					우리를 편안하게 합니다<br>
					마음을 쉬게 합니다.
				</p>
			</div>
			<div class="message2">
				<p>
					시간이 지날수록 '촌스럽다'라는<br>
					표현이 다르게 느껴집니다<br>
					그런 브랜드를 만들고 싶었습니다<br>
					화려하지 않아 곁에 두고두고 아끼며<br>
				</p>
			</div>
			<div class="message3">
				<p>
					우리는 <em>식탁 위의 풍경</em>을 바꾸고<br>
					<em>소중한 것을 더 특별하게 생각하게 만듭니다.</em>
				</p>
			</div>
			<div class="logo">
				<img src="./images/about_chon_logo.png">
			</div>
		</div>
<?
	include_once "./footer.php";
?>
	</div>
	<script type="text/javascript">
		var $header = $('#header');
		var $app = $('#chon-app');
		$(document).ready(function() {
			$('.gnb').on('click', function() {
				$('#menu-layer').slideDown('slow');
				$app.hasClass('menu-opened') ? $app.removeClass('menu-opened') : $app.addClass('menu-opened');
			});
			$('#menu-layer .close-btn a').on('click', function() {
				$app.removeClass('menu-opened');
				$('#menu-layer').slideUp('slow');
			});
		});
	</script>
</body>
</html>
