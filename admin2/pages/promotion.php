<?
	include_once "header.php";
?>
<link href="../../lib/filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
<link href="../../lib/filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
<body>

<div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">쇼핑몰 관리자</a>
    </div>
  <!-- /.navbar-header -->

<?
	include_once "top_navi.php";
	include_once "side_navi.php";
?>
</div>
<!-- /.navbar-static-side -->
  </nav>

  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">PROMOTION 관리</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
      <!-- /.panel-heading -->
      <button type="button" class="btn btn-outline btn-primary btn-lg" id="add_promotion_btn">PROMOTION 추가</button>
      <button type="button" class="btn btn-outline btn-success btn-lg" id="list_promotion_btn">PROMOTION 목록</button>
      <div class="panel-body">
        <div class="panel-body">
          <div class="table-responsive" id="add_promotion">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>타이틀</th>
                  <th>내용</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>promotion 타이틀</td>
                  <td colspan="2">
                    <input type="text" id="promotion_name" style="width:100%">
                  </td>
                </tr>
                <tr>
                  <td>promotion 카테고리</td>
                  <td colspan="2">
										<select id="promotion_category">
											<option value="collection">collection</option>
											<option value="sales">sales</option>
										</select>
                  </td>
                </tr>
                <tr class="banner_detail">
									<td>promotion 리스트 이미지</td>
									<td>
										<table class="table">
											<thead>
												<tr>
													<th style="width:30%">이미지 첨부</th>
												</tr>
											</thead>
											<tbody id="banner_detail_tr">
												<tr>
													<td>
														<form action="../../lib/filer/php/upload.php" id="promotion_image1_frm" method="post" enctype="multipart/form-data">
															<input type="file" name="files1[]" id="filer_input1" multiple="multiple">
														</form>
														* 이미지 사이즈 640 x 326
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr class="banner_detail">
        	        <td>promotion 상세 메인 이미지</td>
          	      <td>
            	      <table class="table">
              	      <thead>
                	      <tr>
                  	      <th style="width:30%">이미지 첨부</th>
                    	  </tr>
	                    </thead>
  	                  <tbody id="banner_detail_tr">
    	                  <tr>
      	                  <td>
        	                  <form action="../../lib/filer/php/upload.php" id="promotion_image2_frm" method="post" enctype="multipart/form-data">
          	                  <input type="file" name="files2[]" id="filer_input2" multiple="multiple">
            	              </form>
														* 이미지 사이즈 640 x 631
              	          </td>
                	      </tr>
                  	  </tbody>
	                  </table>
  	              </td>
    	          </tr>
      	        <tr class="banner_detail">
        	        <td>promotion 상세 내용 이미지</td>
          	      <td>
            	      <table class="table">
              	      <thead>
                	      <tr>
                  	      <th style="width:30%">이미지 첨부</th>
                    	  </tr>
	                    </thead>
  	                  <tbody id="banner_detail_tr">
    	                  <tr>
      	                  <td>
        	                  <form action="../../lib/filer/php/upload.php" id="promotion_image3_frm" method="post" enctype="multipart/form-data">
          	                  <input type="file" name="files3[]" id="filer_input3" multiple="multiple">
            	              </form>
														* 이미지 사이즈 가로 640
              	          </td>
                	      </tr>
                  	  </tbody>
	                  </table>
  	              </td>
    	          </tr>
								<tr>
        	        <td>promotion 기간</td>
          	      <td>
            	      <input type="text" id="promotion_startdate" > - <input type="text" id="promotion_enddate" >
  	              </td>
    	          </tr>
								<tr>
        	        <td>promotion 연관상품</td>
          	      <td>
            	      <input type="text" id="promotion_goods" > *여러개의 상품은 ;로 구분하여 입력해 주세요.
  	              </td>
    	          </tr>
								<tr>
        	        <td>promotion 노출 여부</td>
          	      <td>
            	      <select id="promotion_showYN">
              	      <option value="Y">노출</option>
                	    <option value="N">비노출</option>
	                  </select>
  	              </td>
    	          </tr>
      	      </tbody>
        	  </table>
	          <button type="button" class="btn btn-danger btn-lg btn-block" id="submit_btn23">완 료</button>
  	      </div>
    	    <!-- /.table-responsive -->
      	  <div class="table-responsive" id="list_promotion" style="display:none;">
        	  <table width="100%" class="table table-striped table-bordered table-hover" id="promotion_list">
	          </table>
  	      </div>
    	    <!-- /.table-responsive -->
      	</div>
	    </div>
  	  <!-- /.panel-body -->
	  </div>
 	  <!-- /.container-fluid -->
	</div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?
	include_once "lib.php";
?>
	<!-- DataTables JavaScript -->
	<script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	<script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
	<script src="../bower_components/jquery/dist/jquery-ui.js"></script>
	<script src="../../lib/filer/js/jquery.filer.min.js"></script>
	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
	var banner_num	= 1;
	$(document).ready(function() {
		// 프로모션 리스트
		// show_promotion_list("promotion_list");

		// 테이블 api 세팅
		/*
		var table	= $('#banner_list').DataTable({
			"columnDefs": [ {
				"searchable": false,
				"orderable": false,
				"targets": 0
			} ],
			"order": [[ 1, 'asc' ]],
			"ordering":false,
			"searching": true
		});
		*/
	});

	$( function() {
		$( "#promotion_startdate" ).datepicker();
		$( "#promotion_enddate" ).datepicker();
	});
	
	$('#filer_input1').filer({
		showThumbs: true,
		templates: {
			box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
			item: '<li class="jFiler-item">\
						<div class="jFiler-item-container">\
							<div class="jFiler-item-inner">\
								<div class="jFiler-item-thumb">\
									<div class="jFiler-item-status"></div>\
									<div class="jFiler-item-info">\
										<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
										<span class="jFiler-item-others">{{fi-size2}}</span>\
									</div>\
									{{fi-image}}\
								</div>\
								<div class="jFiler-item-assets jFiler-row">\
									<ul class="list-inline pull-left"></ul>\
									<ul class="list-inline pull-right">\
										<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
									</ul>\
								</div>\
							</div>\
						</div>\
					</li>',
			itemAppend: '<li class="jFiler-item">\
							<div class="jFiler-item-container">\
								<div class="jFiler-item-inner">\
									<div class="jFiler-item-thumb">\
										<div class="jFiler-item-status"></div>\
										<div class="jFiler-item-info">\
											<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
											<span class="jFiler-item-others">{{fi-size2}}</span>\
										</div>\
										{{fi-image}}\
									</div>\
									<div class="jFiler-item-assets jFiler-row">\
										<ul class="list-inline pull-left">\
											<li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
										</ul>\
										<ul class="list-inline pull-right">\
											<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
										</ul>\
									</div>\
								</div>\
							</div>\
						</li>',
			itemAppendToEnd: false,
			removeConfirmation: true,
			_selectors: {
				list: '.jFiler-items-list',
				item: '.jFiler-item',
				remove: '.jFiler-item-trash-action'
			}
		},
		addMore: false
	});

	$('#filer_input2').filer({
		showThumbs: true,
		templates: {
			box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
			item: '<li class="jFiler-item">\
						<div class="jFiler-item-container">\
							<div class="jFiler-item-inner">\
								<div class="jFiler-item-thumb">\
									<div class="jFiler-item-status"></div>\
									<div class="jFiler-item-info">\
										<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
										<span class="jFiler-item-others">{{fi-size2}}</span>\
									</div>\
									{{fi-image}}\
								</div>\
								<div class="jFiler-item-assets jFiler-row">\
									<ul class="list-inline pull-left"></ul>\
									<ul class="list-inline pull-right">\
										<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
									</ul>\
								</div>\
							</div>\
						</div>\
					</li>',
			itemAppend: '<li class="jFiler-item">\
							<div class="jFiler-item-container">\
								<div class="jFiler-item-inner">\
									<div class="jFiler-item-thumb">\
										<div class="jFiler-item-status"></div>\
										<div class="jFiler-item-info">\
											<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
											<span class="jFiler-item-others">{{fi-size2}}</span>\
										</div>\
										{{fi-image}}\
									</div>\
									<div class="jFiler-item-assets jFiler-row">\
										<ul class="list-inline pull-left">\
											<li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
										</ul>\
										<ul class="list-inline pull-right">\
											<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
										</ul>\
									</div>\
								</div>\
							</div>\
						</li>',
			itemAppendToEnd: false,
			removeConfirmation: true,
			_selectors: {
				list: '.jFiler-items-list',
				item: '.jFiler-item',
				remove: '.jFiler-item-trash-action'
			}
		},
		addMore: false
	});

	$('#filer_input3').filer({
		showThumbs: true,
		templates: {
			box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
			item: '<li class="jFiler-item">\
						<div class="jFiler-item-container">\
							<div class="jFiler-item-inner">\
								<div class="jFiler-item-thumb">\
									<div class="jFiler-item-status"></div>\
									<div class="jFiler-item-info">\
										<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
										<span class="jFiler-item-others">{{fi-size2}}</span>\
									</div>\
									{{fi-image}}\
								</div>\
								<div class="jFiler-item-assets jFiler-row">\
									<ul class="list-inline pull-left"></ul>\
									<ul class="list-inline pull-right">\
										<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
									</ul>\
								</div>\
							</div>\
						</div>\
					</li>',
			itemAppend: '<li class="jFiler-item">\
							<div class="jFiler-item-container">\
								<div class="jFiler-item-inner">\
									<div class="jFiler-item-thumb">\
										<div class="jFiler-item-status"></div>\
										<div class="jFiler-item-info">\
											<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
											<span class="jFiler-item-others">{{fi-size2}}</span>\
										</div>\
										{{fi-image}}\
									</div>\
									<div class="jFiler-item-assets jFiler-row">\
										<ul class="list-inline pull-left">\
											<li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
										</ul>\
										<ul class="list-inline pull-right">\
											<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
										</ul>\
									</div>\
								</div>\
							</div>\
						</li>',
			itemAppendToEnd: false,
			removeConfirmation: true,
			_selectors: {
				list: '.jFiler-items-list',
				item: '.jFiler-item',
				remove: '.jFiler-item-trash-action'
			}
		},
		addMore: false
	});

		/* 시험 코드 (비노출행 컬러 구분) */
		$(document).ready(function(){
			$('.showYN').each(function(index){
				if($(this).text() == 'N'){
					$(this).add($(this).prevAll()).add($(this).nextAll()).attr('style','background-color:#BBBBBB');
				}
			})
			
		});
		function delete_row(idx) {
			var userInput = confirm("정말 삭제하시겠습니까?");
			
			if(userInput)
			{
				$.ajax({
					type   : "POST",
					async  : false,
					url    : "admin_exec.php",
					data:{
						"exec" : "delete_row",
						"idx"  : idx
					},
					success: function(response){
						if(response == "Y"){
							alert("삭제되었습니다");
							location.reload();
						}else{
							alert("삭제실패");
						}
					}
				});
			}
		}
		
	</script>
</body>
</html>
