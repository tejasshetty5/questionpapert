<?php //include('protect.php'); 
session_start();
if(!$_SESSION['uid'])
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<!-- Template Name: Smart Notification build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
<title>Question Paper Generator</title>
<!-- start: META -->
<meta charset="utf-8" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="" name="description" />
<meta content="" name="author" />
<!-- end: META -->
<!-- start: MAIN CSS -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
<!-- end: MAIN CSS -->
<!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote.css">
<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-select/bootstrap-select.min.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
<!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="assets/plugins/weather-icons/css/weather-icons.min.css">
<link rel="stylesheet" href="assets/plugins/nvd3/nv.d3.min.css">
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CORE CSS -->
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="stylesheet" href="assets/css/styles-responsive.css">
<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-style8.css" type="text/css" id="skin_color">
<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
<!-- end: CORE CSS -->
<link rel="shortcut icon" href="favicon.ico" />
    
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body class="footer-fixed">
<!-- start: SLIDING BAR (SB) -->
<div id="slidingbar-area">
  <div id="slidingbar">
    <div class="row"> 
      <!-- start: SLIDING BAR FIRST COLUMN --> 
      
      <!-- end: SLIDING BAR FIRST COLUMN --> 
      <!-- start: SLIDING BAR SECOND COLUMN --> 
      
      <!-- end: SLIDING BAR SECOND COLUMN --> 
      <!-- start: SLIDING BAR THIRD COLUMN --> 
      
      <!-- end: SLIDING BAR THIRD COLUMN --> 
    </div>
    <div class="row"> 
      <!-- start: SLIDING BAR TOGGLE BUTTON --> 
      
      <!-- end: SLIDING BAR TOGGLE BUTTON --> 
    </div>
  </div>
</div>
<!-- end: SLIDING BAR -->
<div class="main-wrapper"> 
  <!-- start: TOPBAR -->
  <header class="topbar navbar navbar-inverse navbar-fixed-top inner"> 
    <!-- start: TOPBAR CONTAINER -->
    <?php //include('topmenu.php'); ?>
    <!-- end: TOPBAR CONTAINER --> 
  </header>
  <!-- end: TOPBAR --> 
  <!-- start: PAGESLIDE LEFT --> 
  <a class="closedbar inner hidden-sm hidden-xs" href="#"> </a>
  <nav id="pageslide-left" class="pageslide inner">
    <div class="navbar-content"> 
      <!-- start: SIDEBAR -->
      <div class="navigation-toggler hidden-sm hidden-xs"> <a href="#main-navbar" class="sb-toggle-left"> </a> </div>
      <!-- start: MAIN NAVIGATION MENU -->
      <?php include('leftmenu.php'); ?>
      <!-- end: MAIN NAVIGATION MENU --> 
    </div>
    <!-- end: SIDEBAR --> 
    
  </nav>
  <!-- end: PAGESLIDE LEFT --> 
  
  <!-- start: MAIN CONTAINER -->
  <div class="main-container inner"> 
    <!-- start: PAGE -->
    <div class="main-content"> 
      <!-- start: PANEL CONFIGURATION MODAL FORM --> 
      
      <!-- end: SPANEL CONFIGURATION MODAL FORM -->
      <div class="container"> 
        <!-- start: PAGE HEADER --> 
        <!-- start: TOOLBAR -->
        <?php //include('toolbar.php'); ?>
        <!-- end: TOOLBAR --> 
        <!-- end: PAGE HEADER --> 
        <!-- start: BREADCRUMB -->
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb">
              <li> <a href="f1.php"> Dashboard </a> </li>
              <li class="active"> HELLO USER :) </li>
            </ol>
          </div>
        </div>
        <!-- end: BREADCRUMB --> 
        <!-- start: PAGE CONTENT -->
        
        <div class="col-md-12"> 
          <!-- start: FORM VALIDATION 1 PANEL -->
          <div class="panel panel-white">
            <div class="panel-heading">
				<button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal" style="margin-top:15px;">Add New Subject</button>
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Add Subject</h4>
									</div>
									<div class="modal-body">
										<form action="add_sub.php" id="addsub" method="post">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-4">
														<div class="form-group">
															<label>Course</label>
															<select id="course" name="course" class="form-control"/>
																<option>-- Select Course --</option>
																<option value="BCOM">BMS</option>
																<option value="BCOM">BCOM</option>
																<option value="CS">CS</option>
																<option value="BIOTECH">BIOTECH</option>
																<option value="BCOM">BMM</option>
															</select>
														</div>
													</div>
													<div class="col-md-4 form-group">
														<label>Semester</label>
														<select id="sem" name="sem" class="form-control"/>
															<option>-- Select Semester --</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
														</select>
													</div>
													<div class="col-md-4 form-group">
														<label>Subject Name</label>
														<input type="text" name="sub_name" id="sub_name" class="form-control" required />
														<span style="display:none;color:red" id="errormsg"> Subject Already Added<span>
													</div>
												</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<input type="submit" class="btn btn-default pull-left addsub" value="Save"/>
									</div>
								</div>
										</form>
							</div>
						</div>
              <h2><i class="fa fa-pencil-square"></i>&nbsp ADD NEW QUESTION</h2>
              <div class="panel-tools">
                <!--<div class="dropdown"> <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey"> <i class="fa fa-cog"></i> </a>
                  <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                    <li> <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a> </li>
                    <li> <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a> </li>
                    <li> <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span> </a> </li>
                    <li> <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span> </a> </li>
                  </ul>
                </div>-->
<!--                <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> </div>
-->            </div>
<div class="panel-body">
              <p> </p>
              <hr>
              <form  action="add_que.php" role="form" id="form" method="post">
                <div class="row">
                <div class="col-md-12">
                  <div class="errorHandler alert alert-danger no-display"> <i class="fa fa-times-sign"></i> You Have Some Form Errors. Please Check Below. </div>
                  <div class="successHandler alert alert-success no-display"> <i class="fa fa-ok"></i> Your Form Validation Is Successful! </div>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-group">
						<label>Course</label>
						<select id="s_course" name="s_course" class="form-control"/>
							<option value ="0">-- Select Course --</option>
							
							<option value="EJ">BCOM</option>
							<option value="CS">CS</option>
							<option value="BIOTECH">BIOTECH</option>
							
						</select>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-group">
						<label>Semester</label>
						<select id="s_sem" name="s_sem" class="form-control" required/>
							<option value="0">-- Select Semester --</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="form-group">
						<label>Subject</label>
						<select id="s_sub" name="s_sub" class="form-control"/>
							<option value="0">-- Select Option --</option>
						</select>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
						<label>Chapter</label>
						<input type='number' name='chapter' id="chapter" class="form-control" required/>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
						<label>Question Marks</label>
						<select name='marks' id="marks" class="form-control">
							<option value ="0">-- Select Marks --</option>
							<option value="4">4</option>
							<option value="8">8</option>
						</select>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="form-group">
						<label>Question</label>
						<textarea class="form-control" name="s_que" id="s_que"required ></textarea>
					</div>
				</div>
               <div class="col-lg-12 col-md-12 form-group text-center">
					<button class="btn btn-primary addque">Save Question</button>
				</div>
				</div>							
              </form>
            </div>
          </div>
          <!-- end: FORM VALIDATION 1 PANEL --> 
        </div>
        
        <!-- end: PAGE CONTENT--> 
      </div>
      <div class="subviews">
        <div class="subviews-container"></div>
      </div>
    </div>
    <!-- end: PAGE --> 
  </div>
  <!-- end: MAIN CONTAINER --> 
  <!-- start: FOOTER --> 
  <?php //include('footer.php');?>
  <!-- end: FOOTER --> 
  <!-- start: SUBVIEW SAMPLE CONTENTS --> 
  
  <!-- end: SUBVIEW SAMPLE CONTENTS --> 
</div>
<!-- start: MAIN JAVASCRIPTS --> 
<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
		<![endif]--> 
<!--[if gte IE 9]><!--> 
<script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script> 
<!--<![endif]--> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/plugins/blockUI/jquery.blockUI.js"></script> 
<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script> 
<script src="assets/plugins/moment/min/moment.min.js"></script> 
<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script> 
<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script> 
<script src="assets/plugins/bootbox/bootbox.min.js"></script> 
<script src="assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script> 
<script src="assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script> 
<script src="assets/plugins/jquery.appear/jquery.appear.js"></script> 
<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script> 
<script src="assets/plugins/velocity/jquery.velocity.min.js"></script> 
<script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script> 
<!-- end: MAIN JAVASCRIPTS --> 
<!-- start: JAVASCRIPTS  FOR SUBVIEW CONTENTS --> 
<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script> 
<script src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script> 
<script src="assets/plugins/toastr/toastr.js"></script> 
<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script> 
<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script> 
<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script> 
<script src="assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script> 
<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script> 
<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script> 
<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script> 
<script src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script> 
<script src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script> 
<script src="assets/plugins/truncate/jquery.truncate.js"></script> 
<script src="assets/plugins/summernote/dist/summernote.min.js"></script> 
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
<script src="assets/js/subview.js"></script> 
<script src="assets/js/subview-examples.js"></script> 
<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS --> 
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 
<script src="assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> 
<script src="assets/plugins/nvd3/lib/d3.v3.js"></script> 
<script src="assets/plugins/nvd3/nv.d3.min.js"></script> 
<script src="assets/plugins/nvd3/src/models/historicalBar.js"></script> 
<script src="assets/plugins/nvd3/src/models/historicalBarChart.js"></script> 
<script src="assets/plugins/nvd3/src/models/stackedArea.js"></script> 
<script src="assets/plugins/nvd3/src/models/stackedAreaChart.js"></script> 
<script src="assets/plugins/jquery.sparkline/jquery.sparkline.js"></script> 
<script src="assets/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js"></script> 
<script src="assets/js/index.js"></script> 
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY --> 
<!-- start: CORE JAVASCRIPTS  --> 
<script src="assets/js/main.js"></script> 
<!-- end: CORE JAVASCRIPTS  --> 
<script>
	$(document).ready(function(){
			var semister ;
			var cour;			
			$('#s_course').change(function(){
				course = $(this).val();
			});
			$('#s_sem').change(function(){
				semister = $(this).val();
				course = $('#s_course').val();
				console.log(semister);
				console.log(course);
				if(course == '-- Select Course --')
				{
					alert('please select course first');
					
				}
				else
				{
					$.ajax({
						type : 'post',
						url : 'get_sub.php',
						data : {
							"course" : course,
							"sem" : semister
						},
						success : function(res){
							console.log(res);
							$('#s_sub').empty();
							$('#s_sub').html(res);
						},
						error : function(res){
							console.log(res);
						}
					});
				}
			});
	});
	$(document).on('click','.addque',function(d){
		d.preventDefault()
		//alert('que');
		var frm = $('#form').serializeArray();
		//console.log(frm);
		var count=0;
		$.each(frm,function(index,field){
		//console.log(field.value);
			if(field.value == '' || field.value == 0)
			{
				//console.log(value);
				alert('plaese fill all the field');
				return false;
			}
		else
			{
				count ++;
			}
		});
			//console.log(count);
			if(count == 6)
			{	
				
			var frm1 = $('#form').serialize()
				$.ajax({
					type : 'post',
					url : 'add_que.php',
					data : {
						"form" : frm1
					},
					success : function(res){
						if(res == 'success')
						{
							alert('Question added successfully');
							window.location.reload();
						}
						else
						{
							alert('Dupalicate Question are not allowed');
						}
						console.log(res);
					},
					error : function(res){
						window.location.reload();
						console.log(res);
					}
				});
			}
		
	});
	$(document).on('click','.addsub',function(e){
	e.preventDefault()
	var sem = $('#sem').val();
	var course = $('#course').val();
	var name = $('#sub_name').val();
	$frm = $('#addsub').serialize()
	if(name != '' && sem != '-- Select Semester --' && course !='-- Select Course --')
	{
		$.ajax({
			type : 'post',
			url : 'add_sub.php',
			data : {
				"form" : $frm
			},
			success : function(res){
				console.log(res);
				if(res == 'Exist')
				{
					$('#errormsg').css('display','block');
				}
				else if(res == 'success')
				{
					alert('subject added successfully');
					window.location.reload();
				}
				else
				{
					$('#errormsg').css('display:none');
				}
			},
			error : function(res){
				console.log(res);
			}
		})
	}
	else
	{
		alert('please select or fill All the Feilds');
	}

});
</script>

</body>
<!-- end: BODY -->
</html>