<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>

<html>
<head>
<title>User Home page</title>
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
#ds	{
	font-size:32px;
	}
</style>
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
		<li id="list"><a href="Sfeedback.php">Feedback</a></li>
		<li id="list"><a href="Slogout.php">Logout</a></li>
	</div>
</div>

<div	
<div id="middlePart">
<span id="ds"></span>
</div>


</div>	
	
	<?php
	//footer connection
	include 'footer.php';
	?>
</body>
</center>
</html>
