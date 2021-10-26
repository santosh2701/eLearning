<html>
<head>
<title>User signup page1</title>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
#container	{
		width:80%;
		height:450px;
		background:#FFFFFF;
		}

#right	{
	width:45%;
	height:270px;
	background:#FFFFFF;
	float:right;
	margin-top:3px;
	margin-right:250px;
	}
#fm	{

	}
#btn	{
	width:80px;
	height:25px;
	background:#33FFFF;
	margin-right:60px;
	margin-top:10px;
	}

#us1 a	{
	text-decoration:none;
	color:#009999;
	}
th	{
	text-align:left;
	}
#ab	{
	padding-top:6px;
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

<div 
<div id="right">
	<div id="fm">
<form action="Ssignup2.php" method="POST" name="f1"  onsubmit="return logIn()">
<h2>User Signup</h2> 
<hr width="250" border="1">
<table>
	<tr>
	<th>Username:</th>
	<td><input type="text" name="u_uname" id="aa"></td>
	</tr>
	<th>Full Name:</th>
	<td><input type="text" name="u_fname" id="aa"></td>
	</tr>
	<tr>
	<th>Email:</th>
	<td><input type="text" name="u_email" id="aa"><td>
	</tr>
	<tr>
	<th>Password:</th>
	<td><input type="password" name="u_pswd" id="aa"><td>
	</tr>
	</table>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="sub" id="btn" value="Signup" >
	<br>

	<div id="ab">
	Already have an Account?&nbsp;<a href="Slogin1.php">Log In</a>
	</div>
</form>
</div>
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
