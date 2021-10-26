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
	width:90%;
	height:280px;
	background:rgb(245,245,245);
	margin-left:10px;
	margin-top:15px;
	padding:10px;
	}
th	{
	text-align:left;
	}
td	{
	width:200px;
	}
	{
	border: 1px solid black;
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
table	{
	float:left;
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
<div id="rt">
<h2 id="hh">All Course</h2> 
<div id="tb">
<div id="box">
<?php   
$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db("elearning",$con);

$sql="select * from courseinfo";
$result=mysql_query($sql,$con); 

while($row=mysql_fetch_array($result))
{	

			$b=$row['c_name']; 
			$c=$row['c_des'];
						
			
			echo "<br>";
			echo "<table>";
			echo "<div id='b'>";

			echo "<tr>";
			echo "<td id='a1'><img src=".$row['c_thum']." width=80% height=80></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td id='a2'>  ".$b."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td id='a3'>  ".$c."</td>";
			echo "</tr>";
}
			echo "</div>";

			echo "</table>"; 
			
			
?>
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
