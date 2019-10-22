<?php
include "connection.php";
if($_POST)
{
	//print_r($_POST);
	$cor = $_POST['course'];
	$sem = $_POST['sem'];
	$sql="select * from subject where sub_course='$cor' and sub_sem='$sem'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		while($row=mysqli_fetch_assoc($res))
		{
			echo "
			<option vlaue='".$row["sub_name"]."'>".$row["sub_name"]."</option>";
		}
	}
	else
	{
		echo "<option style='text:red;' value=''>-- Please Add Subject --</option>";
			
	}
}
?>