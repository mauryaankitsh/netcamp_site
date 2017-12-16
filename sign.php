<?php
$x=$_POST['name'];
$y=$_POST['email'];
$p=$_POST['phone'];
$z=$_POST['psw'];
$z1=$_POST['pswrepeat'];
mysql_connect("localhost","root","");
mysql_select_db("webd");

if($z1!=$z)
{
	//header("location:signup.php?msg=userexists");
//	echo" <script type='text/javascript'> var r = confirm("'User already exists'");
  //  if (r == true){
    //  window.location.reload();
   // }</script>";
 $message = "Password mismatch";
  echo "<script type='text/javascript'>alert('$message')</script>";

//sleep(5);
//header("location:signup.php");
}
else
{
	$query="SELECT * FROM sign WHERE name='$x' AND pass='$z'";
    $result=mysql_query($query) or die("login success");
	$c=mysql_num_rows($result);
	if($c>0)
	{
		$message = "User already exists";
  echo "<script type='text/javascript'>alert('$message')</script>";
		
	}
	else{
		$q="INSERT INTO sign (name,email,phone,pass) VALUES ('$x','$y','$p','$z')";
		
		mysql_query($q);
		$message = "Signup Successfully";
  echo "<script type='text/javascript'>alert('$message')</script>";
		
		
	}
}
	




?>


<html>

<body><a href="signup.php">back</a>
</body>
</html>