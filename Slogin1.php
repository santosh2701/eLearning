<html>
<head>
<title>Student Login page1</title>

<style>
#container	{
		width:80%;
		height:450px;
		background:#FFFFFF;
		}

#right	{
	width:35%;
	height:270px;
	background:#FFFFFF;
	float:right;
	margin-top:20px;
	margin-right:250px;
	}
#btn	{
	width:80px;
	height:25px;
	background:#33FFFF;
	margin-right:60px;
	}

#us1 a	{
	text-decoration:none;
	color:#009999;
	}
#ab	{
	padding-top:6px;
	}
#bc	{
	padding-top:5px;
	}
#bc a	{
	text-decoration:none;
	}
</style>

<script>
function logIn(){
a = document.f1.aa.value;
b = document.f1.bb.value;

if(a=="")
{
	alert("username can't be blank");
	return false;
}
else if(b=="")
{
	alert("password can't be blank");
	return false;
}
else
{
	return true;
}
}
</script>
</head>
<body>
<center>
<div id="container">
	<?php
	//header connection
	include 'header.php';
	include 'Smenu.php';
	?>
<div
<div id="right">

<form action="Slogin2.php" method="POST" name="f1"  onsubmit="return logIn()">
	<h2>User Login</h2> 
	<hr width="220" border="1">
	<b>Username:&nbsp;</b><input type="text" name="username" id="aa"><br><br>
	<b>Password:&nbsp;</b><input type="password" name="pswd" id="bb"><br><br>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="sub" id="btn" value="Login" >
	<br>
	
	<div id="bc">
	or &nbsp;<a href="Forgot_pass.php">Forgot Password</a>
	</div>

	<div id="ab">
	Don't have an Account?&nbsp;<a href="Ssignup1.php">Sign Up</a>
	</div>
</form>
<div id="us">
	
</div>
</div>

</div>
	<?php
	//footer connection
	include 'footer.php';
	?>
</body>
</center>
</html>
