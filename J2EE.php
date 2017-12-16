<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->
	<meta name="author" content="Ankit Aniket Nitesh" />
	<meta name="description" content="netcamp webd" />
	<style>
	#dv2{
		background:#707177;
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

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
#course{
	width:80%;
	height:700px;
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
  <li><a href="#contact">Admin Login</a></li>
  <li class="right"><a href="#about">About</a></li>
  
</ul>
<div id="dv2">
 <image src="j2ee.png" height="451px" hspace="100px" id="course" style="margin-top:30px" border="2px"></div>

 
 


</body>