		<div id="header">
			<div class="bg"></div>
			<div class="wrapper">
				<h1 class="logo">
					<a href="./index.php">
						<img src="./images/logo.png" alt="촌의 감각">
					</a>
				</h1>
				<div class="gnb">
					<div class="closed wrapper">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</div>
				</div>
			</div>
		</div>
		<div id="menu-layer">
			<div class="menu-inner">
				<div class="close-btn">
					<a href="#">

					</a>
				</div>
				<div class="top-block">
					<div class="wrapper">
<?
	if (!$_SESSION['ss_chon_email'])
	{
?>
						<a href="member_login.php?ref_url=<?=$_SERVER['REQUEST_URI']?>">
							<span>LOG IN</span>
						</a>
						<a href="member_join.php">
							<span>JOIN</span>
						</a>
<?
	}else{
?>
						<a href="logout.php">
							<span>LOG OUT</span>
						</a>
<?
	}
?>
					</div>
				</div>
				<div class="bot-block">
					<div class="wrapper">
						<div class="child">
							<div class="list cate">
								<ul>
<?
    $query		= "SELECT * FROM ".$_gl['category_info_table']." WHERE cate_mobileYN='Y'";
    $result		= mysqli_query($my_db, $query);

    while ($data = mysqli_fetch_array($result))
    {
?>
									<li>
										<a href="product_list.php?cate=<?=$data["cate_1"]?>">
											<span><?=$data['cate_name']?></span>
										</a>
									</li>
<?
    }
?>
								</ul>
							</div>
							<div class="list theme">
								<ul>
									<li>
										<a href="magazine_list.php">
											<span>MAGAZINE</span>
										</a>
									</li>
									<li>
										<a href="best_list.php">
											<span>BEST ITEM</span>
										</a>
									</li>
									<li>
										<a href="sale_list.php">
											<span>SALE</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="banner-block">
						<a href="#">
							<img src="./images/menu_banner.png">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="search-layer">
			<div class="wrapper">
				<div class="input-block">
					<div class="inner">
						<div class="input-box">
								<!-- <input type="text" placeholder="검색어 입력" onkeypress="javascript:if(event.keyCode==13){search.find(this.value);return false;}"> -->
								<!-- <input type="text" placeholder="검색어 입력" onkeypress="javascript:search.detect(this.value);"> -->
							<input type="text" id="search-box" placeholder="검색어 입력" onkeyup="search.detect(this, this.value);return false;" data-edit="N">
							<button type="button" class="clear" onclick="search.clear()">
								<span class="blind">닫기</span>
							</button>
						</div>
					</div>
				</div>
				<div class="hot-word">
					<h5 class="title">인기 검색어</h5>
					<div class="list">
						<div class="row">
							<div class="col">
								<a href="search_result.php?keyword=여기담기'">
									<span>여기 담기</span>
								</a>
							</div>
							<div class="col">
								<a href="search_result.php?keyword=머그컵">
									<span>머그컵</span>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<a href="search_result.php?keyword=그릇">
									<span>그릇</span>
								</a>
							</div>
							<div class="col">
								<a href="search_result.php?keyword=파스타그릇'">
									<span>파스타 그릇</span>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<a href="search_result.php?keyword=소창행주'">
									<span>소창 행주</span>
								</a>
							</div>
							<div class="col">
								<a href="search_result.php?keyword=상품">
									<span>접시</span>
									<!-- <span>상품</span> -->
								</a>
							</div>
						</div>
					</div>
					<div class="realtime-list">
						<div class='row'>
							<a href='product_detail.php?goodscode=PR00000044'>
								<span></span>
							</a>
						</div>
						<div class='row'>
							<a href='product_detail.php?goodscode=PR00000044'>
								<span></span>
							</a>
						</div>
						<div class='row'>
							<a href='product_detail.php?goodscode=PR00000044'>
								<span></span>
							</a>
						</div>
						<div class='row'>
							<a href='product_detail.php?goodscode=PR00000044'>
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
