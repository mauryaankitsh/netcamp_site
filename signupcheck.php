<?php
$name=$_POST['name'];
$email=$_POST['email'];
$psw=$_POST['psw'];
$pswrepeat=$_POST['pswrepeat'];
mysql_connect("localhost","root","");
mysql_select_db("webd");
if($name=="as"||$email!="as"||$psw!="as"||$pswrepeat!="as")
{
	$_SESSION['name']=$name;
	header("location:home.php");
}



?>