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
	padding-top:15px;
	}

th	{
	font-size:10px;
	color:black;
	width:100px;
	font-family:verdana;
	padding:10px;
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

#btn	{
	width:100px;
	height:30px;
	background:#33FFFF;
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
<span id="ds">Update Profile Details</span>

<?php

//connection established
$con=mysql_connect("localhost","root","");

//database selected
$db=mysql_select_db("elearning",$con); 

$aa=$_GET['u_id']; 

$sql="select * from usersinfo where u_id=$aa";
$result=mysql_query($sql,$con);
	 
	echo"<center>";
	echo "<table>";
	$row=mysql_fetch_array($result);

			$e=$row['u_id'];
			$a=$row['u_uname'];
			$b=$row['u_fname'];
			$c=$row['u_email'];
			$d=$row['photo'];
			$e=$row['u_pswd'];

			
			echo "<form name='f1' action='Sprofile2.php' method='POST'>";
	
			echo "<tr>";
			echo "<th>Set Profile Pic</th>";
			echo "<td id='a1'><input type='file' name='photo'  value='$d'></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<th>Change Name </th>";
			echo "<td> <input type='text' name='u_fname' value='$b'></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<th>Change Password  </th>";
			echo "<td> <input type='text' name='u_pswd' value='$e'></td>";
			echo "</tr>";


	echo "<tr>";
	echo "<th> Update </th>";
	echo "<td> <input  type='submit' id='btn' name='sub' value='Save'></td>";
	echo "</tr>";

	echo "</form>";
	
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
