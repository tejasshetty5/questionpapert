<?php include('protect.php'); 
include('library/class.php');
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
<title>Smart Notification</title>
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
<link rel="stylesheet" href="assets/css/themes/theme-default.css" type="text/css" id="skin_color">
<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
<!-- end: CORE CSS -->
<link rel="shortcut icon" href="favicon.ico" />
 <script language="javascript">
        function check_username(str,id)
		{
			if(str=="" || id=="")
			{
				return;
			}
			var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("error-info").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","check_username.php?str="+str+"&id="+id,true);
xmlhttp.send();

		}
        
		 function validate()
	 {
		 strerror=document.getElementById("error-info").innerHTML;
		 
		 if(strerror.length!=0)
		 {
			 alert("please choose another username.");
			 return false;
		 }
		 return true;
	 }
        </script>
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
  <?php include('topmenu.php'); ?>
  <!-- end: TOPBAR CONTAINER --> 
</header>
<!-- end: TOPBAR --> 
<!-- start: PAGESLIDE LEFT --> 
<a class="closedbar inner hidden-sm hidden-xs" href="#"> </a>
<nav id="pageslide-left" class="pageslide inner">
  <div class="navbar-content"> 
    <!-- start: SIDEBAR --> 
    
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
    <?php include('toolbar.php'); ?>
    <!-- end: TOOLBAR --> 
    <!-- end: PAGE HEADER --> 
    <!-- start: BREADCRUMB -->
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li> <a href="#"> Dashboard </a> </li>
          <li class="active"> Dashboard </li>
        </ol>
      </div>
    </div>
    <!-- end: BREADCRUMB --> 
    <!-- start: PAGE CONTENT -->
    <div class="col-md-12"> 
      <!-- start: FORM VALIDATION 1 PANEL -->
      <div class="panel panel-white">
        <div class="panel-heading">
          <h2><i class="fa fa-pencil-square"></i>User Profile</h2>
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
--> </div>
          <div class="panel-body">
            <p> </p>
            <hr>
            
            <div class="row">
              <div class="col-md-12">
                
                <div class="errorHandler alert alert-danger display"> <i class="fa fa-times-sign"></i> Sorry! You  Don't have rigths to edit this user. </div>
                <?php
				}
				?>
              </div>
              </div>
          
              <form  action="update_user_submit.php" role="form" id="form" method="post" onSubmit="return validate();">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label"> Name <span class="symbol required"></span> </label>
                    <input type="hidden" name="id" ">
                    <input placeholder="Enter Name" class="form-control" id="firstname" name="firstname" type="text" required value="<?php echo $userrow['Name']; ?>">
                  </div>
                  <div class="form-group">
                    <label class="control-label"> Email <span class="symbol required"></span> </label>
                    <input placeholder="Email" class="form-control" id="email" name="email" type="email" required  value="<?php echo $userrow['Email'];  ?> ">
                  </div>
                  <div class="form-group">
                    <label class="control-label"> Contact </label>
                    <input placeholder="Contact Number" class="form-control" id="Number1" name="Number1" type="text"  value="<?php echo $userrow['Contact'];  ?> ">
                  </div>
                  <div class="form-group">
                    <label class="control-label"> username <span class="symbol required"></span> </label>
                    <input class="form-control" id="username" name="username" type="text" required placeholder="Username"  value="<?php echo $userrow['Username'];  ?> " onBlur="check_username(this.value,'<?php echo $_GET['id']; ?>');">
                                          <label id="error-info" class="alert-danger"></label>

                  </div>
                  <div class="form-group">
                    <label class="control-label">Password <span class="symbol required"></span> </label>
                    <input class="form-control" id="password" name="password" type="password" required placeholder="Password"   value="<?php echo $userrow['Password'];  ?> ">
                  </div>
                  <div class="col-md-4">
                    <input class="btn btn-yellow btn-block" type="submit" value="Update">
                  </div>
                </div>
              </form>
              <?php } ?>
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
  <?php include('footer.php');?>
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
<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS --> 
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
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				Index.init();
			});
		</script>
</body>
<!-- end: BODY -->
</html>