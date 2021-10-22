<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>

<html>
<head>
<title>Admin Home page</title>
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
#rt	{
	width:400px;
	height:280px;
	background:rgb(245,245,245);
	margin-left:10px;
	margin-top:15px;
	padding:10px;
	}
th	{
	text-align:left;
	}

#hh	{
	padding-top:15px;
	}
#bt1	{
	width:80px;
	height:25px;
	background:#33FFFF;
	margin-left:100px;
	margin-top:15px;
	}
#dd1	{
	width:180px;
	}

#dd2	{
	width:180px;
	height:50px;
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
		<p><strong>Admin:</strong>
			<?php
			echo $_SESSION['user'];
			?>
	</div>
	<div id="sideMenu">
		<li id="list"><a href="Ahome.php">Dashboard</a></li>
		<li id="list"><a href="Acourse1.php">Add Course</a></li>
		<li id="list"><a href="Avcourse.php">View Course</a></li>
		<li id="list"><a href="Alogout.php">Logout</a></li>
	</div>
</div>

<div	
<div id="middlePart">
<div id="rt">
<h2 id="hh">Add New Course Details</h2> 
<div id="tb">
<form enctype="multipart/form-data" action="Acourse2.php" name="f2" method="POST">
<table>
<tr>
<th>Course Name </th>
<td>&nbsp;<input type="text" name="c_name" id="dd1"></td>
</tr>

<tr>
<th>Course Description </th>
<td>&nbsp;<input type="text" name="c_des" id="dd2"></td>
</tr>

<tr>
<th>Thumnail </th>
<td>&nbsp;<input type="file" name="c_thum" id="dd"></td>
</tr>

<tr>
<th colspan="2" id="btn"><input type="submit" id="bt1" name="btn" value="SUBMIT" ></th>
</tr>
</table>
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
