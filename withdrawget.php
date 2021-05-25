<?php
$link=mysqli_connect("localhost","root","","BANKING");
if($link===false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}
$s1=$_POST["T1"];
$s2=$_POST["T2"];
$s3=$_POST["T3"];
echo "Account No".$s1;
echo "Payin Date".$s2;
echo "Payin Amount".$s3;
$sql="insert into withdraw values($s1,'$s2',$s3)";
if(mysqli_query($link,$sql))
{
echo "Records added successfully";
}
else
{
echo "ERROR:Could not able to execute $sql.".mysqli_error($link);
}
$sql1="update newac set curamt=curamt-$s3 where acno=$s1";
if(mysqli_query($link,$sql1))
{
echo "Records added successfully";
}
else
{
echo "ERROR:Could not able to execute $sql1.".mysqli_error($link);
}
mysqli_close($link);
?>
