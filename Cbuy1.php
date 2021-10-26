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
	border:2px solid #99FF99;
	padding:3px;
	}
th	{
	text-align:center;
	border:2px solid #99FF99;
	padding:3px;
	background:#99FF99;
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
<h2 id="hh">Search Result</h2> 
<div id="tb">
	<?php
	$cn=$_POST['c_name'];
 
	//connection established
	$con=mysql_connect("localhost","root","");

	//database selected
	$db=mysql_select_db("elearning",$con);
	

	
	$sql="select c_id,c_name,c_des,c_price from courseinfo where c_name='$cn'" ;
	$result=mysql_query($sql,$con); 
	 
      	 $flag = 0;

	while($row = mysql_fetch_array($result))
      	{
      	
      	$flag = 1;
      	}
	
	if($flag== 0)
            {
            echo "Course not found";
            }
	else
	{
	$result=mysql_query($sql,$con);
	while($row = mysql_fetch_array($result))
	{
	 
	
	$a=$row['c_id'];
	$b=$row['c_name'];
	$c=$row['c_des'];
	$f=$row['c_price'];

	echo "<table>";
	echo "<tr>";
	echo "<th>Course Id </th>";
	echo "<th>Course Name</th>";
	echo "<th>Course Description</th>";
	echo "<th>Course Price </th>";
	echo "<th> Buy </th>";
	echo "</tr>";

	echo "<tr>";
	echo "<td>  ".$a."</td>";
	echo "<td>  ".$b."</td>";
	echo "<td>  ".$c."</td>";
	echo "<td>  ".$f."</td>";
	echo "<br>";
	echo "<td> <a href='Cbuy2.php?c_id=$a'>Buy</a> </td>";
	echo "</tr>";
	
	echo "</table>";
	}
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