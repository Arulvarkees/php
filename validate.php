<?php
$un=$_POST["T1"];
$ps=$_POST["T2"];
	if($un=="admin"&& $ps=="admin")
	{
	echo "Valid";
	}
	else
	{
	echo "Invalid";
	}
?>