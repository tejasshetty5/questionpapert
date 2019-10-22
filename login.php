<?php
include "connection.php";
if($_POST)
{
	$username  = $_POST['username'];
	$password = $_POST['password'];
	$sql="select * from users where userid='$username' and Password='$password'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		while($row=mysqli_fetch_assoc($res))
		{
			session_start();
			$_SESSION['uid'] = $row['ID'];
			header('location:f1.php');
			
		}
	}
	else
	{
		header('location:index.php');
	}
	
}
?>