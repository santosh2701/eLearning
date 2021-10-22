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
<script src="search.js"> </script>
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
		<li id="list"><a href="Ssearch1.php">Search Course</a></li>
		<li id="list"><a href="Sfeedback.php">Feedback</a></li>
		<li id="list"><a href="Slogout.php">Logout</a></li>
	</div>
</div>

<div	
<div id="middlePart">
	<div id="rt">
	<h1 id="hh">Search Course</h1> 
	<div id="tb">
	<form>
	<h4 align="center">Course Name :
	<input type="text" name="c_name" onKeyUp="showUser(this.value);"/> 
	</h4>
	</form>
	<p>

	<div id="txtHint" align="center"> <b> </b>

	</div>
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
