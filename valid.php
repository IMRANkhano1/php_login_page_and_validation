<?php
$email=$_POST['email'];
$pass=$_POST['psw'];
$con=mysqli_connect("localhost","root","","phpvalid") or die("db not conneted");
$query="select * from log where email='$email'";
$result=mysqli_query($con,$query);
if($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	if($row['password']==$pass)
	{
       echo"<script>alert('login success');window.location.href='logsuc.php';</script>";
	}
	else
	{
		echo"<script>alert('login failed');window.location.href='login.php';</script>";
	}
}
else
{
	echo"<script>alert('invalid user');window.location.href='login.php';</script>";
}

?>