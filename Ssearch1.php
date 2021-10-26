<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>

<html>
<head>
<title>Course Search page</title>
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
	height:150px;
	background:#99FF99;
	margin-left:50px;
	margin-top:50px;
	}

#hh	{
	padding-top:10px;
	}
#btn	{
	width:80px;
	height:25px;
	background:#33FFFF;
	margin-left:10px;
	}
th	{
	text-align:left;
	}
tr	{
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
	<div id="rt">
	<h1 id="hh">Search Course for Buy</h1> 
	<div id="tb">
		<form name='f1' method='post'  action='Cbuy1.php'>
	<table>

		<tr>		
		<th>Course Name :</th>
		<td><select name="c_name">
		<option value="Course Name">select</option>

		<?php

		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("elearning",$con);

		$sql="select distinct c_name from courseinfo";

		$result=mysql_query($sql,$con); //F9

		while($row=mysql_fetch_array($result))
		{
		$d=$row['c_name'];
		echo "<option value='$d'>$d</option>";	
		}

		?>
		</select>			  
		</td>
		

		
		<td><input type="submit" name="sub" value="SEARCH" id="btn">
		</td>
		</tr>

		
	</table>
	</form>
  
  <?php
  	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("elearning",$con);
 if(isset($_REQUEST['Sub']))
 {

$a=$_POST['c_nam'];
if($a=="")
	echo "<h3>Course Name:</h3>";
else
{
$sql="select * from courseinfo where c_name='$a'";
$result=mysql_query($sql,$con); 

$flag=0;
while($row=mysql_fetch_array($result))
{
	$flag=1;
}
if ($flag=="0")
{
	echo "<h2>No Data Found</h2>";
}
else
{
	$sql="select * from courseinfo where c_name='$a'";
	$result=mysql_query($sql,$con); 
	echo "<center>";
	$row=mysql_fetch_array($result);
			$b=$row['c_name']; 
			$c=$row['c_des'];
							
			
			echo "<br>";
			echo "<table>";

			echo "<tr>";
			echo "<td id='a1'><img src=".$row['c_thum']." width=100% height=90%></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td id='a2'>  ".$b."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td id='a3'>  ".$c."</td>";
			echo "</tr>";
			
					
			echo "</table>";
	echo "</center>";
	
}
}
 }
?>
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
