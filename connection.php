<?php
	$localhost = "localhost";
	$username ="root";
	$password = "";
	$dbname ="questionpaper";
	$con = mysqli_connect($localhost,$username,$password,$dbname);
	if(!$con)
	{
		echo "DATABASE ERROR";
	}
?>