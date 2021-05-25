<?php
$link=mysqli_connect("localhost","root","","BANKING");
 if($link===false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}
$sql="CREATE TABLE withdraw(acno int(4),withdt varchar(30),withamt int(30))";
if(mysqli_query($link,$sql))
{
echo "Table withdraw created successfully";
}
else
{
echo"ERROR:could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>