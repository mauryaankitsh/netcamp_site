<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->
	<meta name="author" content="Ankit Aniket Nitesh" />
	<meta name="description" content="netcamp webd" />
	<style>
	#dv2{
		background:#707177;
		text-align:center;
		align:center;
	}
	li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #A2A2A5;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
#ul{
	text-align:center;
	size:25px;
	color:pink;
	list-style-type:circle;
	margin-left:80px;
	margin-right:80px;
	
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
#course{
	width:80%;
	height:700px;
}
#li{
	text-align:center;
	
}
	</style>

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="in.css" type="text/css" /><style>
</style>
</head>
<body>

<img src="nc.jpg" height="120px" alt="Avatar" class="avatar" width="150px" id="logo" style="border:2px solid blue" hspace="700px" vspace="20px">
<font size="5px" hspace="5px">Follow us:&nbsp;&nbsp;&nbsp;<font>
<a href="https://www.facebook.com/netcamp.in"><image src="unnamed.png" height="40px" width="40px"></a><a href="https://www.twitter.com/netcamp_in"> 
 <image src="twitter.jpg" height="40px" width="40px"></a><br>
 <marquee style="border: 3px solid blue"  behaviour="alternate">Current program is going on in MNNIT,Allahabad</marquee>
<ul class="ul">
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Course</a>
    <div class="dropdown-content">
      <a href="course.php">Network management and ethical hacking with web development</a>
      <a href="J2EE.php">J2EE with core java</a>
      <a href="android.php">Android with core java</a>
	    <a href="seminar.php">Seminar on Ethical hacking and network management</a>
    </div>
  </li>
  <li><a class="active" href="login.php">Student Login</a></li>
  <li><a href="signup.php">Registration</a></li>
  <li><a href="admin.php">Admin Login</a></li>
  <li class="right"><a href="#about">About</a></li>
  <li><a href="logout.php">Logout</a></li>
  
</ul>
<div id="dv2">
 
 <?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("webd");
if(isset($_SESSION['name']))
{
   
	$x=$_SESSION['name'];
	echo "<font color='yellow' size='40px' '> currently logged in as '$x'<br><font color='#95FF7F'>Profile</font><br></font>";
	$y=$_SESSION['psw'];
	$query="SELECT * FROM sign WHERE name='$x' AND pass='$y'";
    $result=mysql_query("SELECT * FROM sign WHERE name = '$x' AND pass='$y'");
	$r=mysql_fetch_array($result);
	$em=$r['email'];
	$v=$r['phone'];
	//print_r($result);

	//echo $m =$r[''];
	echo"
	<ul id='ul'><li>&nbspName&nbsp:&nbsp$x</li><br><br><br>
	<li>&nbspEmail&nbsp:&nbsp$em</li><br><br><br>
	<li>&nbspMobile no.&nbsp:&nbsp$v</li></ul><br><br><br>
	";
	$k=$r['ch'];
	$d=$r['regno'];
	if($k==0)
	{
		
		echo "<font color ='#7FBEFF'> Hi</font>";
		echo "&nbsp<font color ='yellow'>". $_SESSION['name']." </font>,<font color='#7FBEFF'> your Registration no. is</font> <font color ='yellow'>".$d."<br></font>" ;
		echo "<font color='#7FBEFF'>&nbsp you are <font color='#95FF7F'<b><i>not</i></b></font> confirmed for program </font><br>";
		echo "<font color='#7FBEFF'>For Confirming Contact Santu Sir ,<font color='pink'> +919331090003 </font></font>";
	}
	else{
			
		echo "<font color ='#7FBEFF'> Hi</font>";
		echo "&nbsp<font color ='yellow'>". $_SESSION['name']." </font>,<font color='#7FBEFF'> your Registration no. is</font> <font color ='yellow'>".$d."<br></font>" ;
		echo "<font color='#7FBEFF'>&nbsp you are   <font color='#95FF7F'<b><i>confirmed</i></b></font> for selected program </font><br>";
		
		
	}
	

	
	
    
	
	
}
else
{
	header("location:login.php");
}
?>
 
 
 
 </div>

 
 


</body></html>