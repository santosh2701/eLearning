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
	font-size:28px;
	}
th	{
	font-size:12px;
	color:black;
	width:120px;
	font-family:verdana;
	padding:12px;
	text-align:left;
	background:#CCFFFF;
	}

td	{
	font-size:10px;
	color:black;
	width:60%;
	font-family:verdana;
	padding:10px;
	text-align:left;
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
	float:center;
	margin-left:15px;
	margin-top:25px;
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
<span id="ds">Profile Details</span>
<?php   
$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db("elearning",$con);

$sql="select * from usersinfo";
$result=mysql_query($sql,$con); 

echo "<table>";
	
	$row=mysql_fetch_array($result);

			$e=$row['u_id'];
			$a=$row['u_uname'];
			$b=$row['u_fname'];
			$c=$row['u_email'];
			$d=$row['u_pswd'];
								
			
			echo "<br>";
		
			echo "<tr>";
			echo "<th>Profile Pic</th>";
			echo "<td id='a1'><img src=".$row['photo']." width=50% height=60></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<th>Full Name </th>";
			echo "<td id='a3'>  ".$b."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<th>Password  </th>";
			echo "<td id='a3'>  ".$d."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<th>Change Details  </th>";
			echo "<td><a href='Sprofile1.php?u_id=$e'> Edit </a> </td>";
			echo "</tr>";

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
