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
      <?php //include('leftmenu.php'); ?>
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
              <li>; <a href="#"> Dashboard </a> </li>
              <li class="active"> New Customer </li>
            </ol>
          </div>
        </div>
        <!-- end: BREADCRUMB --> 
        <!-- start: PAGE CONTENT -->
        <?php
			//print_r($_POST);
			if(!isset($_POST) || empty($_POST))
			{
				//header('location:f1.php');
			}
			else
			{
				//print_r($_POST);
				$flag=0;
				$coures = $_POST['q_course'];
				$sem = $_POST['q_sem'];
				$sub = $_POST['q_sub'];
				$mark = $_POST['q_mark'];
				if($mark == 80)
				{
					$flag = 1;
				}
				else if($mark == 40)
				{
					$flag = 2;
				}
				else if($mark == 20)
				{
					$flag = 3;
				}
		?>
        <div class="col-md-12"> 
          <!-- start: FORM VALIDATION 1 PANEL -->
          <div class="panel panel-white">
            <div class="panel-heading">
			<div class="panel-body">
				<div class="col-lg-12 col-md-12 text-center">
					<h2><b>Sample Question Paper</b></h2>
				</div>
				<div class="col-lg-12 col-md-12 " style="border-bottom:1px solid;">
					<br/>
				<h4>
					<table>
						
						<tr>
							<td>Course Code </td>
							<td>:</td>
							<td><?php echo $coures ;?></td>
						</tr>
						<tr>
							<td>Semester</td>
							<td>:</td>
							<td><?php echo $sem ;?></td>
						</tr>
						<tr>
							<td>Subject</td>
							<td>:</td>
							<td><?php echo $sub ;?></td>
						</tr>
						<tr>
							<td>Marks</td>
							<td>:</td>
							<td><?php echo $mark ;?></td>
						</tr>
					</table>
				</h4>
			</div>
			<div class="col-lg-12">
				<h3 style="color:black;"><b>INSTRUCTION :</b></h3>
				<ul style="color:black;font-size:16px;">
					<li> All Question are Compulsory</li>
					<li> Illustrate Your Answers With Neat Sketches Wherever Neccessary</li>
					<li> Figures To The Right Indicate Full Marks.</li>
					<li> Assume Suitable Data If Neccessary</li>
					<li> Preferably, Write The Answers In Sequential Order</li>
				</ul>
			</div>
			<?php
				include "connection.php";
				if($flag == 1)
				{
					$sql="select * from questions";
					$res=mysqli_query($con,$sql);
					if(mysqli_num_rows($res) > 7)
					{
						$sql1="select * from subject where sub_name='$sub' and sub_course='$coures' and sub_sem='$sem'";
						$res1=mysqli_query($con,$sql1);
						if(mysqli_num_rows($res1) > 0)
						{
							$three = array();
							$four[] = '';
							$eight = array();
							while($row1=mysqli_fetch_assoc($res1))
							{
								$sub_id = $row1['sub_id'];
								$sql2="select * from questions where q_marks='3' and sub_id='$sub_id' order by RAND() limit 5";
								$res2=mysqli_query($con,$sql2);
								if(mysqli_num_rows($res2)> 0)
								{
									while($row2=mysqli_fetch_assoc($res2))
									{
										$three[] = $row2['q_question'];
									}
								}
								$sql3="select * from questions where q_marks='4' and sub_id='$sub_id' order by RAND() limit 21";
								$res3=mysqli_query($con,$sql3);
								if(mysqli_num_rows($res3)> 0)
								{
									while($row3=mysqli_fetch_assoc($res3))
									{
										$four[] = $row3['q_question'];
									}
									
								}
								$sql4="select * from questions where q_marks='8' and sub_id='$sub_id' order by RAND() limit 4";
								$res4=mysqli_query($con,$sql4);
								if(mysqli_num_rows($res4)> 0)
								{
									while($row4=mysqli_fetch_assoc($res4))
									{
										$eight[] = $row4['q_question'];
									}
								}
								
							}
						?>
			
			<div class="col-lg-12">
				<h4><span style="color:black"><b>Q.1 &nbsp Attempt Any FOUR</span><span class="pull-right">16 Marks</b></span></h4>
				<ol style="color:black; font-size:14px;">
					<?php 
						 $for = count($four);
						 //$thr = count($three);
						 $egt = count($eight);
						if(empty($four)  || empty($eight) )
						{
						?>
						<div class="col-lg-12 col-md-12">
							<div class="errorHandler alert alert-danger display"> <i class="fa fa-times-sign"></i> 
								Sorry! You Don't Have Any Question. form <?php if($for == 0) {echo "4";} elseif($egt == 0){echo "8";} ?> Marks
							</div>
						</div>
					<?php
						}
						
						else if($for < 16 ||  $egt < 3)
						{
					?>
						<div class="col-lg-12 col-md-12">
							<div class="errorHandler alert alert-danger display"> <i class="fa fa-times-sign"></i> 
								Sorry! You Don't Have Enough Questions 
							</div>
						</div>
					<?php
						}
						else
						{
							$flag = 4;
						}
					?>
					<?php
					if($flag == 4)
					{
							//print_r($four);
					?>
					
					<li><?php echo $four[1]; ?></li>
					<li><?php echo $four[2]; ?></li>
					<li><?php echo $four[3]; ?></li>
					<li><?php echo $four[4]; ?></li>
					<li><?php echo $four[5]; ?></li>
					<?php
					}
					?>
				</ol>
			</div>
			<div class="col-lg-12">
				<h4><span style="color:black"><b>Q.2 &nbsp Attempt Any THREE</span><span class="pull-right">12 Marks</b></span></h4>
				<ol style="color:black; font-size:14px;">
					<?php
					if($flag == 4)
					{
					?>
					
					<li><?php echo $four[6]; ?></li>
					<li><?php echo $four[7]; ?></li>
					<li><?php echo $four[8]; ?></li>
					<li><?php echo $four[9]; ?></li>
					<?php
					}
					?>
				</ol>
			</div>
			<div class="col-lg-12">
				<h4><span style="color:black"><b>Q.3 &nbsp Attempt Any THREE</span><span class="pull-right">12 Marks</b></span></h4>
				<ol style="color:black; font-size:14px;">
				<?php
					if($flag == 4)
					{
					?>
					
					<li><?php echo $four[10]; ?></li>
					<li><?php echo $four[11]; ?></li>
					<li><?php echo $four[12]; ?></li>
					<li><?php echo $four[13]; ?></li>
					<?php
					}
					?>
				</ol>
			</div>
			<div class="col-lg-12">
				<h4><span style="color:black"><b>Q.4 &nbsp Attempt Any TWO</span><span class="pull-right">16 Marks</b></span></h4>
				<ol style="color:black; font-size:14px;">
					<?php
					if($flag == 4)
					{
					?>
					
					<li><?php echo $eight[1]; ?></li>
					<li><?php echo $eight[2]; ?></li>
					<li><?php echo $eight[3]; ?></li>
					<?php
					}
					?>
				</ol>
				<br/>
			</div>
			<div class="col-lg-12">
				<h4><span style="color:black"><b>Q.5 &nbsp Attempt Any THREE</span><span class="pull-right">12 Marks</b></span></h4>
				<ol style="color:black; font-size:14px;">
					<?php
					if($flag == 4)
					{
					?>
					
					<li><?php echo $four[14]; ?></li>
					<li><?php echo $four[15]; ?></li>
					<li><?php echo $four[16]; ?></li>
					<li><?php echo $four[17]; ?></li>
					<?php
					}
					?>
				</ol>
			</div>
			<div class="col-lg-12">
				<h4><span style="color:black"><b>Q.6 &nbsp Attempt Any THREE</span><span class="pull-right">12 Marks</b></span></h4>
				<ol style="color:black; font-size:14px;">
					<?php
					if($flag == 4)
					{
					?>
					
					<li><?php echo $four[18]; ?></li>
					<li><?php echo $four[19]; ?></li>
					<li><?php echo $four[20]; ?></li>
					<li><?php echo $four[21]; ?></li>
					<?php
					}
					?>
				</ol>
			</div>
			<?php
						
						}
					}
					else
					{
			?>
					<div class="col-lg-12 col-md-12">
						<div class="errorHandler alert alert-danger display"> <i class="fa fa-times-sign"></i> Sorry! You Don't Have Enough Questions To Generate The Question Paper  </div>
					</div>
			<?php
					}
				}
				else if($flag == 2)
				{
					$sql="select * from questions";
					$res=mysqli_query($con,$sql);
					if(mysqli_num_rows($res) > 7)
					{
						$sql1="select * from subject where sub_name='$sub' and sub_course='$coures' and sub_sem='$sem'";
						$res1=mysqli_query($con,$sql1);
						if(mysqli_num_rows($res1) > 0)
						{
							$three = array();
							$four[] = '';
							$eight = array();
							while($row1=mysqli_fetch_assoc($res1))
							{
								$sub_id = $row1['sub_id'];
								$sql2="select * from questions where q_marks='3' and sub_id='$sub_id' order by RAND() limit 5";
								$res2=mysqli_query($con,$sql2);
								if(mysqli_num_rows($res2)> 0)
								{
									while($row2=mysqli_fetch_assoc($res2))
									{
										$three[] = $row2['q_question'];
									}
								}
								$sql3="select * from questions where q_marks='4' and sub_id='$sub_id' order by RAND() limit 21";
								$res3=mysqli_query($con,$sql3);
								if(mysqli_num_rows($res3)> 0)
								{
									while($row3=mysqli_fetch_assoc($res3))
									{
										$four[] = $row3['q_question'];
									}
									
								}
								$sql4="select * from questions where q_marks='8' and sub_id='$sub_id' order by RAND() limit 4";
								$res4=mysqli_query($con,$sql4);
								if(mysqli_num_rows($res4)> 0)
								{
									while($row4=mysqli_fetch_assoc($res4))
									{
										$eight[] = $row4['q_question'];
									}
								}
								
							}
						?>
			
			<div class="col-lg-12">
				<h4><span style="color:black"><b>Q.1 &nbsp Attempt Any 4</span><span class="pull-right">16 Marks</b></span></h4>
				<ol style="color:black; font-size:14px;">
					<?php 
						 $for = count($four);
						 //$thr = count($three);
						 $egt = count($eight);
						if(empty($four)  || empty($eight) )
						{
						?>
						<div class="col-lg-12 col-md-12">
							<div class="errorHandler alert alert-danger display"> <i class="fa fa-times-sign"></i> 
								Sorry! You Don't Have Any Question. form <?php if($for == 0) {echo "4";} elseif($egt == 0){echo "8";} ?> Marks
							</div>
						</div>
					<?php
						}
						
						else if($for < 16 ||  $egt < 3)
						{
					?>
						<div class="col-lg-12 col-md-12">
							<div class="errorHandler alert alert-danger display"> <i class="fa fa-times-sign"></i> 
								Sorry! You Don't Have Enough Questions 
							</div>
						</div>
					<?php
						}
						else
						{
							$flag = 4;
						}
					?>
					<?php
					if($flag == 4)
					{
							//print_r($four);
					?>
					
					<li><?php echo $four[1]; ?></li>
					<li><?php echo $four[2]; ?></li>
					<li><?php echo $four[3]; ?></li>
					<li><?php echo $four[4]; ?></li>
					<li><?php echo $four[5]; ?></li>
					<?php
					}
					?>
				</ol>
			</div>
			<div class="col-lg-12">
				<h4><span style="color:black"><b>Q.2 &nbsp Attempt Any 4 </span><span class="pull-right">16 Marks</b></span></h4>
				<ol style="color:black; font-size:14px;">
					<?php
					if($flag == 4)
					{
					?>
					
					<li><?php echo $four[6]; ?></li>
					<li><?php echo $four[7]; ?></li>
					<li><?php echo $four[8]; ?></li>
					<li><?php echo $four[9]; ?></li>
					<li><?php echo $four[10]; ?></li>
					<?php
					}
					?>
				</ol>
			</div>
			<div class="col-lg-12">
				<h4><span style="color:black"><b>Q.3 &nbsp Attempt Any 1</span><span class="pull-right">8 Marks</b></span></h4>
				<ol style="color:black; font-size:14px;">
					<?php
					if($flag == 4)
					{
					?>
					
					<li><?php echo $eight[1]; ?></li>
					<li><?php echo $eight[2]; ?></li>
					<li><?php echo $eight[3]; ?></li>
					<?php
					}
					?>
				</ol>
				<br/>
			</div>
			<?php
						
						}
					}
					else
					{
			?>
					<div class="col-lg-12 col-md-12">
						<div class="errorHandler alert alert-danger display"> <i class="fa fa-times-sign"></i> Sorry! You Don't Have Enough Questions To Generate The Question Paper  </div>
					</div>
			<?php
					}
				}
				else if($flag == 3)
				{
					$sql="select * from questions";
					$res=mysqli_query($con,$sql);
					if(mysqli_num_rows($res) > 7)
					{
						$sql1="select * from subject where sub_name='$sub' and sub_course='$coures' and sub_sem='$sem'";
						$res1=mysqli_query($con,$sql1);
						if(mysqli_num_rows($res1) > 0)
						{
							$three = array();
							$four[] = '';
							$eight = array();
							while($row1=mysqli_fetch_assoc($res1))
							{
								$sub_id = $row1['sub_id'];
								$sql2="select * from questions where q_marks='3' and sub_id='$sub_id' order by RAND() limit 5";
								$res2=mysqli_query($con,$sql2);
								if(mysqli_num_rows($res2)> 0)
								{
									while($row2=mysqli_fetch_assoc($res2))
									{
										$three[] = $row2['q_question'];
									}
								}
								$sql3="select * from questions where q_marks='4' and sub_id='$sub_id' order by RAND() limit 21";
								$res3=mysqli_query($con,$sql3);
								if(mysqli_num_rows($res3)> 0)
								{
									while($row3=mysqli_fetch_assoc($res3))
									{
										$four[] = $row3['q_question'];
									}
									
								}
								$sql4="select * from questions where q_marks='8' and sub_id='$sub_id' order by RAND() limit 4";
								$res4=mysqli_query($con,$sql4);
								if(mysqli_num_rows($res4)> 0)
								{
									while($row4=mysqli_fetch_assoc($res4))
									{
										$eight[] = $row4['q_question'];
									}
								}
								
							}
						?>
			
			<div class="col-lg-12">
				<h4><span style="color:black"><b>Q.1 &nbsp Attempt All</span><span class="pull-right">20 Marks</b></span></h4>
				<ol style="color:black; font-size:14px;">
					<?php 
						 $for = count($four);
						 //$thr = count($three);
						 $egt = count($eight);
						if(empty($four)  || empty($eight) )
						{
						?>
						<div class="col-lg-12 col-md-12">
							<div class="errorHandler alert alert-danger display"> <i class="fa fa-times-sign"></i> 
								Sorry! You Don't Have Any Question. form <?php if($for == 0) {echo "4";} elseif($egt == 0){echo "8";} ?> Marks
							</div>
						</div>
					<?php
						}
						
						else if($for < 16 ||  $egt < 3)
						{
					?>
						<div class="col-lg-12 col-md-12">
							<div class="errorHandler alert alert-danger display"> <i class="fa fa-times-sign"></i> 
								Sorry! You Don't Have Enough Questions 
							</div>
						</div>
					<?php
						}
						else
						{
							$flag = 4;
						}
					?>
					<?php
					if($flag == 4)
					{
							//print_r($four);
					?>
					
					<li><?php echo $four[1]; ?></li>
					<li><?php echo $four[2]; ?></li>
					<li><?php echo $four[3]; ?></li>
					<li><?php echo $four[4]; ?></li>
					<li><?php echo $four[5]; ?></li>
					<?php
					}
					?>
				</ol>
			</div>
			<?php
						
						}
					}
					else
					{
			?>
					<div class="col-lg-12 col-md-12">
						<div class="errorHandler alert alert-danger display"> <i class="fa fa-times-sign"></i> Sorry! You Don't Have Enough Questions To Generate The Question Paper  </div>
					</div>
			<?php
					}
				}
				
			?>
			
			<div class="col-lg-12 text-center">
				-----  ALL THE BEST  -----
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
	<?php
			}
			?>
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
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				Index.init();
			});
		</script>
<script src="js/myproperty.js"></script>
<script>
	$(document).on('click','#addremark',function(e){
	e.preventDefault();
	var remark = $('#remark').val();//add jyare fetching kara ve che tyare attr id pan aav vi joye
	if(remark != ''){
	//alert(attribute);
	//alert(attrvalue);
	$tr=$('<tr/>');
	$remark=$('<td/>').html(remark);
	$btn=$('<a/>').attr('type', 'button').attr('value', 'delete').attr('class','btn btn-primary delattr').css('margin','10px').html('delete attribute');
	$tr.append($remark).append($btn);
	$('#remarkdetails').show();
	
	console.log($tr.html());
	$('.remarkdetails').append($tr);
	}
	else
	{
		alert('please fill all field');
	}
});
$(document).on('click','.delattr',function(){
	 $(this).closest('tr').remove();
});

$('#refrnce').change(function(){
	// alert('in');
	 var reference= $(this).val();
	 if(reference == 'adverties')
	 {
		 $('#mainreference').removeClass('col-lg-12 col-md-12 col-sm-12');
		 $('#mainreference').addClass('col-lg-6 col-md-6 col-sm-6');
		 $('#referenceinfomation').css('display','block');
	 }
	 else
	 {
		  $('#mainreference').removeClass('col-lg-6 col-md-6 col-sm-6');
		 $('#mainreference').addClass('col-lg-12 col-md-12 col-sm-12');
		 $('#referenceinfomation').css('display','none');
	 }
 });
	
$(document).on('submit','#form',function(e){
	e.preventDefault();
	var formdata = new FormData();
	console.log(formdata);
	for(var [key,value] of formdata.entries()){
		console.log("key"+key+", value:"+value);
	}
	var remarkAttribute= [];
//start fetching data of variants details//
	
		$('.remarkdetails tr').each(function (index){
			remarkAttribute[index] ={};
			$cell=$(this).find("td");
				$cell.each(function(remarkindex){
					if(remarkindex == 0)
						remarkAttribute[index]["remark"]=$(this).html();
					
				});
		});
		var remark = {}
						remark.remarkAttribute = remarkAttribute;
						console.log(JSON.stringify(remarkAttribute));
						 formdata.append("remarkAttribute", JSON.stringify(remarkAttribute));
							console.log("JSON:"+JSON.stringify(remark));
		
		$registration = $('#registration').val();
		alert($registration);
		$refrnce = $('#refrnce').val();
		$refrnceinfo = $('#refrnceinfo').val();
		$fname = $('#fname').val();
		$mname = $('#mname').val();
		$lname = $('#lname').val();
		$address = $('#address').val();
		$mphone = $('#mphone').val();
		$ophone = $('#ophone').val();
		$rphone = $('#rphone').val();
		$email = $('#email').val();
		$stay = $('#stay').val();
		$budget = $('#budget').val();
		$agreement = $('#agreement').val();
		$brokername = $('#brokername').val();
		$flat = $('#flat').val();
		$modepaymet = $('#modepaymet').val();
		$loaninfo = $('#loaninfo').val();
		$laddress = $('#laddress').val();
		$building = $('#building').val();
		$locality = $('#locality').val();
		$floor = $('#floor').val();
		$selectbuilding = $('#selectbuilding').val();
		$msgdate = $('#msgdate').val();
	if($registration == 'customer' || $registration == 'visitor' || $registration == 'caller')
	{
		$.ajax({
				type : 'post',
				url : 'myproperty_query.php',
				data: {
					"refrnce" : $refrnce,
					"registration" : $registration,
					"refrnceinfo" : $refrnceinfo,
					"fname" : $fname,
					"mname" : $mname,
					"lname" : $lname,
					"address" : $address,
					"mphone" : $mphone,
					"ophone" : $ophone,
					"rphone" : $rphone,
					"email" : $email,
					"stay" : $stay,
					"budget" : $budget,
					"agreement" : $agreement,
					"brokername" : $brokername,
					"flat" : $flat,
					"modepaymet" : $modepaymet,
					"loaninfo" : $loaninfo,
					"laddress" : $laddress,
					"building" : $building,
					"locality" : $locality,
					"floor" : $floor,
					"selectbuilding" : $selectbuilding,
					"msgdate" : $msgdate,
					"remarkAttribute" : JSON.stringify(remarkAttribute)
				},
				success : function(res)
				{
					console.log(res);
					toastr.options = {
									  "progressBar": true,
									  "hideDuration": "3000"
								}
								toastr.info ('Visitor Successfully Added!!!','Information');
								setTimeout(function(){								
								},3000);
				},
				error : function(res)
				{
					console.log(res);
				}
			   
									
			//End fetching data of variants details//
			});
	}
	else
	{
		toastr.options = {
									  "progressBar": true,
									  "hideDuration": "3000"
								}
								toastr.error ('Please Select User Type First!!!','Information');
								setTimeout(function(){
								window.location.reload();
								
								},2000);
	}

});
</script>

</body>
<!-- end: BODY -->
</html>