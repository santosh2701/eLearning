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
#btn	{
	width:100px;
	height:30px;
	background:#33FFFF;
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
	border:1px solid #ccc;
	text-align:center;
	}

tr:nth-child(even) {
  background: #FFCCE5;
}

tr:nth-child(odd) {
  background: #CCFFE5;
}	

a	{
	text-decoration:none;
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

<h2>Update Course Details</h2>
<?php

//connection established
$con=mysql_connect("localhost","root","");

//database selected
$db=mysql_select_db("elearning",$con);  


$bb=$_GET['c_id']; 

$sql="select * from courseinfo where c_id=$bb";


$result=mysql_query($sql,$con);
	 
	echo"<center>";
	echo "<table>";
	while( $row=mysql_fetch_array($result))
	{
	$a=$row['c_thum'];
	$b=$row['c_id'];
	$c=$row['c_name'];
	$d=$row['c_des'];

	echo "<form name='f1' action='Aupdate3.php' method='POST'>";
	
	echo "<tr>";
	echo "<th> Profile </th>";
	echo "<td> <input readonly type='text' name='c_thum' value='$a'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Course No </th>";
	echo "<td> <input readonly type='text' name='c_id' value='$b'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Course Name </th>";
	echo "<td> <input type='text' name='c_name' value='$c'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> Course Des. </th>";
	echo "<td> <input type='text' name='c_des' value='$d'></td>";
	echo "</tr>";

	echo "<tr>";
	echo "<th> UPDATE </th>";
	echo "<td> <input  type='submit' id='btn' name='sub' value='Update'></td>";
	echo "</tr>";

	echo "</form>";
	}
	echo"</table>";
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
