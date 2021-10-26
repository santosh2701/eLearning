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
#kk	{
	font-size:40px;
	font-weight:bold;
	text-align:center;
	color:white;
	}
#nn	{
	font-size:22px;
	font-weight:bold;
	text-align:center;
	color:white;
	}
#ac	{
	margin-top:12px;
	}
th	{
	font-size:10px;
	color:black;
	width:70px;
	font-family:verdana;
	padding:5px;
	border:1px solid #ccc;
	background:#FFCC99;
	}
td	{
	font-size:10px;
	color:black;
	width:70px;
	font-family:verdana;
	padding:2px;
	border:1px solid #FFCC99;;
	text-align:center;
	}
#aa	{
	background:lightgreen;
	}	

tr:nth-child(even) {
  background: #FFFFFF;
}

tr:nth-child(odd) {
  background: #FFFFFF;
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
		<li id="list"><a href="Asearch1.php">Search Course</a></li>
		<li id="list"><a href="Acourse1.php">Add Course</a></li>
		<li id="list"><a href="Aupdate1.php">Update Course</a></li>
		<li id="list"><a href="Avcourse.php">View Course</a></li>
		<li id="list"><a href="Avfeed.php">View Feedback</a></li>
		<li id="list"><a href="Alogout.php">Logout</a></li>
	</div>
</div>

<div	
<div id="middlePart">
<h2>Updated Course Details</h2>
<?php

//connection established
$con=mysql_connect("localhost","root","");

//database selected
$db=mysql_select_db("elearning",$con); 

$aa=$_POST['c_thum'];
$bb=$_POST['c_id'];
$cc=$_POST['c_name'];
$dd=$_POST['c_des'];

$sql="update courseinfo set c_name='$cc',c_des='$dd' where c_id='$bb'";

$result=mysql_query($sql,$con); //F9



$sql="select * from courseinfo where c_id='$bb'";

$result=mysql_query($sql,$con); 

	echo"<center>";
	echo "<table>";
	echo "<tr id='aa'> <th colspan=6>Course Details Updated </th></tr>";
	echo "<tr>";
	echo "<th> Profile </th>";
	echo "<th> Course Id </th>";
	echo "<th> Course Name </th>";
	echo "<th> Course Des </th>";
	echo "</tr>";
	while( $row=mysql_fetch_array($result))
	{
	echo "<tr>";
	$a=$row['c_thum'];
	$b=$row['c_id'];
	$c=$row['c_name'];
	$d=$row['c_des'];

	echo "<td id='bb'>  ".$a."</td>";
	echo "<td id='bb'>  ".$b."</td>";
	echo "<td id='bb'>  ".$c."</td>";
	echo "<td id='bb'>  ".$d."</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo"</center>";  

?>
</div>

</div>	
	
	<?php
	//footer connection
	include 'footer.php';
	?>
</body>
</center>
</html>
