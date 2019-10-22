<?php
include "connection.php";
if($_POST)
{
	$value = array();
	parse_str($_POST['form'],$value);
	$course = $value['course'];
	$sem = $value['sem'];
	$s_name = $value['sub_name'];
	$sql="select * from subject where sub_course='$course' and sub_sem='$sem' and sub_name='$s_name'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		echo "Exist";
	}
	else
	{
		$sql1="insert into subject(sub_name,sub_sem,sub_course) value('$s_name','$sem','$course')";
		$res1=mysqli_query($con,$sql1);
		if($res1)
		{
			echo "success";
		}
		else
		{
			echo "error";
		}
	}
}
?>