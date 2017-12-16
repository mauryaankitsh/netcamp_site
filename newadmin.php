<?php
session_start();
$x=$_POST['name'];
$z=$_POST['psw'];
mysql_connect("localhost","root","");
mysql_select_db("webd");
$query="SELECT * FROM admin WHERE name='$x' AND pass='$z'";
    $result=mysql_query($query) ;
	$c=mysql_num_rows($result);
	if($c>0)
	{
		$_SESSION['name']=$x;
		$_SESSION['psw']=$z;
		header("location:hnewadmin.php");
	}
     else{
		$message = "username or password is wrong or you are not an admin";
  echo "<script type='text/javascript'>alert('$message')</script>";
    
}
?>
<html>
<body>
<a href="admin.php">back</a>
</body>
</html>