<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>

<html>
<head>
<title>User Search page</title>
<!-- <link rel="stylesheet" href="styles.css"> --!>

<style>
#container	{
		width:80%;
		height:450px;
		background:;
		}

#leftPart	{
		width:20%;
		height:370px;
		float:left;
		background:#009999;
		color: #FFFFFF;
		}

#middlePart	{
		width:80%;
		height:370px;
		float:right;
		}
#gg	{
	width:100%;
	height:60px;
	text-align:center;
	font-size:20px;
	padding-top:5px;
	border-bottom:2px solid black;
	}

#gg a	{
	color: #FFFFFF;
	text-decoration:none;
	}

#sideMenu	{
		width:100%;
		height:320px;
		padding-top:0px;	
		}

#list	{
	color: #FFFFFF;
	padding-top:2px;
	list-style-type:none;
	float:left;
	}

#sideMenu a	{
		padding-left: 45px;
  		text-decoration: none;
  		font-size: 18px;
  		color: #FFFFFF;
  		display: block;
		padding-top:5px;
	 	}
#rt	{
	width:300px;
	height:200px;
	background:white;
	}
#tb	{
	background:white;
	}
#hh	{
	padding-top:10px;
	margin-left:40px;
	text-align:left;
	padding:10px;
	}
#btn	{
	width:80px;
	height:25px;
	background:#33FFFF;
	margin-right:60px;
	margin-top:0px;
	}
#txtHint	{
		float:left;
		width:90%,
		height:150px;
		}
</style>
<script>
function feed(){
a = document.f1.fname.value;
b = document.f1.email.value;
c = document.f1.phone.value;
d = document.f1.remarks.value;

if(a=="")
{
	alert("Name can't be blank");
	return false;
else if(b=""){
	alert("Email can't blank");
	return false;
}
else if(c=""){
	alert("Phone can't blank");
	return false;
}
else if(d=""){
	alert("Remarks can't blank");
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
	?>
<div
<div id="leftPart">
	<div id="gg">
		<p><strong>User:</strong>
			<?php
			echo $_SESSION['user'];
			?>
	</div>
	<div id="sideMenu">
		<li id="list"><a href="Shome.php">Dashboard</a></li>
		<li id="list"><a href="Sprofile.php">My Profile</a></li>
		<li id="list"><a href="Ssearch1.php">Search Course</a></li>
		<li id="list"><a href="userfeedback1.php">Feedback</a></li>
		<li id="list"><a href="Slogout.php">Logout</a></li>
	</div>
</div>

<div	
<div id="middlePart">
	<div id="rt">
	<h1 id="hh">Feedback form</h1> 
	<div id="tb">
	<form name="f1" action="userfeedback2.php" method="POST" onsubmit="return feed()">
	
	<h3>Full Name : &nbsp; 
	<input type="text" name="fname" id="x">
	</h3>	


	<h3>Email Id : &nbsp; &nbsp; 
	<input type="text" name="email" id="y" >
	</h3>	

	<h3>Feedback : &nbsp; &nbsp;  
	<input type="text" name="remarks" id="f">
	</h3>
	
	<h2>
	<input type="submit" name="sub" id="btn" value="Submit">
	</h2>

	</form>
</div>
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

