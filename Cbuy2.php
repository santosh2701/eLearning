<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>

<html>
<head>
<title>Course Buy page</title>
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
	width:500px;
	height:300px;
	background:white;
	margin-left:70px;
	}
#hh	{
	padding-top:10px;
	}
td	{
	text-align:center;
	
	padding:3px;
	}
th	{
	text-align:left;
	padding:3px;
	background:#99FF99;
	}
#btn	{
	width:120px;
	height:25px;
	background:#33FFFF;
	margin-top:10px;
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

	<!-----------Middle part -------------------!>

<div
<div id="middlePart">
<div id="rt">
<h2 id="hh">Confirm Details</h2> 
<div id="tb">
	<?php

	//connection established
	$con=mysql_connect("localhost","root","");

	//database selected
	$db=mysql_select_db("elearning",$con);
	$bb=$_GET['c_id'];
	
	$sql="select c_id,c_name,c_des,c_price from courseinfo where c_id='$bb'" ;
	
	$result=mysql_query($sql,$con); 

	
	while( $row=mysql_fetch_array($result))
	{
	$a=$row['c_id'];
	$b=$row['c_name'];
	$c=$row['c_des'];
	$f=$row['c_price'];
	
	echo "<form name='f1' action='Cbuy3.php' method='POST'>";
	echo "<table>";
	
	echo "<tr>";
	echo "<th> Course Id </th>";
	echo "<td> <input readonly type='text' name='c_id' value='$a'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th>Course Name </th>";
	echo "<td> <input readonly  type='text' name='c_name' value='$b'></td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<th>Course Description</th>";
	echo "<td> <input readonly type='text' name='c_des' value='$c'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th>Course Price </th>";
	echo "<td> <input readonly type='text' name='c_price' value='$f'></td>";
	echo "</tr>";
		
	echo "<tr>";
	echo "<td colspan='2'> <input  type='submit' name='sub' value='Confirm Buy' id='btn'></td>";
	echo "</tr>";
	echo "</table>";
	echo "</form>";
	}
	
	?>
</div>
</div>
</div>
	<!-----------Footer part -------------------!>
</div>
<?php
	//footer connection
	include 'footer.php';
	?>

</body>
</center>
</html>
