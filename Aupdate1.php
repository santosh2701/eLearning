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
	width:120px;
	font-family:verdana;
	padding:5px;
	border:1px solid #ccc;
	background:#FFCC99;
	}

td	{
	font-size:10px;
	color:black;
	width:120px;
	font-family:verdana;
	padding:2px;
	border:2px solid #FFCC99;;
	text-align:center;
	}

tr:nth-child(even) {
  background: #FFFFFF;
}

tr:nth-child(odd) {
  background: #FFFFFF;
}	
a	{
	text-decoration:none;
	}

table	{
	float:left;
	margin-left:15px;
	margin-top:8px;
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
$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db("elearning",$con);

$sql="select * from courseinfo";
$result=mysql_query($sql,$con); 

while($row=mysql_fetch_array($result))
{	
			$a=$row['c_id'];
			$b=$row['c_name']; 
			$c=$row['c_des'];
						
			
			echo "<br>";
			echo "<table>";

			echo "<tr>";
			echo "<td id='a1'><img src=".$row['c_thum']." width=100% height=120></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td id='a2'>  ".$b."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td id='a3'>  ".$c."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td> <a href='Aupdate2.php?c_id=$a'> Edit </a> </td>";
			echo "</tr>";
}
			echo "</table>"; 
			
			
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
