<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>

<html>
<head>
<title>Feedback page</title>
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
th	{
	font-size:10px;
	color:black;
	width:70px;;
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

tr:nth-child(even) {
  background: #FFFFFF;
}

tr:nth-child(odd) {
  background: #FFFFFF;
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
		<li id="list"><a href="Enroll_course.php">Register Course</a></li>
		<li id="list"><a href="Avfeed.php">View Feedback</a></li>
		<li id="list"><a href="Alogout.php">Logout</a></li>
	</div>
</div>

<div	
<div id="middlePart">
<div id="rt">
<h2 id="hh">All Registered Course</h2> 
<div id="tb">

<?php
//connection established
$con=mysql_connect("localhost","root","");
//database selected
$db=mysql_select_db("elearning",$con);

$sql="select * from bcourse";

$result=mysql_query($sql,$con); 

	echo "<center>";
	echo "<br>";
	echo "<table>";
	echo "<tr>";
	echo "<th> Enroll Id </th>";
	echo "<th> Course Id </th>";
	echo "<th> Course Name </th>";
	echo "<th> Course Description </th>";
	echo "<th> Course Price </th>";
	echo "<th> Enroll Date </th>";
	echo "</tr>";
	while($row=mysql_fetch_array($result))
	{
	echo "<tr>";
	$a=$row['b_id'];
	$b=$row['c_id'];
	$c=$row['cname'];
	$d=$row['cdes'];
	$e=$row['cprice'];
	$f=$row['date_enroll'];
	
	echo "<td id='bb'>  ".$a."</td>";
	echo "<td id='bb'>  ".$b."</td>";
	echo "<td id='bb'>  ".$c."</td>";
	echo "<td id='bb'>  ".$d."</td>";
	echo "<td id='bb'>  ".$e."</td>";
	echo "<td id='bb'>  ".$f."</td>";
	echo "</tr>";
	}
	echo "</table>";
	echo "</center>";
?>
</div>
</div>
</div>
</div>
<?php
	//footer connection
	include 'footer.php';
	?>
</center>
</body>
</html>

