<html>
<head>
<title>User signup page1</title>

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
	margin-top:30px;
	margin-right:250px;
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
<form action="Ssignup2.php" method="POST" name="f1"  onsubmit="return logIn()">
<h2>User Signup</h2> 
<table>
	<tr>
	<th>Username:</th>
	<td><input type="text" name="uname" id="aa"></td>
	</tr>
	<th>Full Name:</th>
	<td></b><input type="text" name="fname" id="aa"></td>
	</tr>
	<tr>
	<th><b>Email:</th>
	<td></b><input type="text" name="email" id="aa"><td>
	</tr>
	<tr>
	<th>Password:</th>
	<td><input type="password" name="pswd" id="aa"><td>
	<tr>
	</table>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="sub" id="btn" value="Signup" >
	<br>
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
