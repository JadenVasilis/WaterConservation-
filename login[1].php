<?php 
$cser=mysqli_connect("localhost","root","","login"); //database connectivity

if(isset($_POST['sub']))
{
$uname = $_POST['uname'];
$upassword = $_POST['upassword'];

$res = mysqli_query($cser,"select* from admin where username='$uname'and password='$upassword'");
$result=mysqli_fetch_array($res);
if($result)
{
	echo "You are login Successfully ";
//header("location:my-account.php");   
	
}
else
{
	echo "failed ";
}
}
?>