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
		<p>	
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
<span id="ds">Updated Profile Details</span>

<?php
 $target = ""; 
 $target = $target .basename( $_FILES['photo']['name']); 

	$dd=$_POST['u_fname'];
	$ff=$_POST['u_pswd'];
	$gg=($_FILES['photo']['name']);
	

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("elearning",$con); 

$sql1="update usersinfo set u_fname='$dd',u_pswd='$ff',photo='$gg'";
$result1=mysql_query($sql1,$con); 
if($result1)
	{	
	echo "<h3>Profile Updated Successful</h3>";
	} 
else 	{
	echo "<h3>Profile Not Updated</h3>";
	}

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
