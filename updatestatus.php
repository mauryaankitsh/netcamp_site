<?php
session_start();
$reg=$_POST['reg'];
mysql_connect("localhost","root","");
mysql_select_db("webd");
$q="SELECT * FROM sign WHERE regno='$reg'";
$r=mysql_query($q);
$c=mysql_num_rows($r);
$res=mysql_fetch_array($r);
if($c>0)
{
	if($res['ch']==0)
		$p=1;
	else $p=0;
	$q1="UPDATE sign SET ch='$p' WHERE regno='$reg'";
	mysql_query($q1);
	$message = "Successfully recorded";
  echo "<script type='text/javascript'>alert('$message')</script>";
}
else{
	$message = "Wrong Registration no.";
  echo "<script type='text/javascript'>alert('$message')</script>";
}
?>
<HTML>
<BODY><A HREF="hnewadmin.php">BACK</a>
</HTML>