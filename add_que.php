<?php
include "connection.php";
if($_POST)
{
	//print_r($_POST['form']);
	$value = array();
	parse_str($_POST['form'],$value);
	$course = $value['s_course'];
	$sem = $value['s_sem'];
	$sub = $value['s_sub'];
	$chapter = $value['chapter'];
	$marks= $value['marks'];
	$que = $value['s_que'];
		$sql = "select 	* from subject where sub_name='$sub' and sub_course='$course' and sub_sem='$sem'";
		$res=mysqli_query($con,$sql);
		if(mysqli_num_rows($res) > 0)
		{
			while($row=mysqli_fetch_assoc($res))
			{
				$sub_id = $row['sub_id'];
				$sql1="insert into questions(sub_id,q_question,q_chapter,q_marks) values('$sub_id','$que','$chapter','$marks')";
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
		else
		{
			echo "no data found";
		}
	}
?>