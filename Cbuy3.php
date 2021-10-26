<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>

<html>
<head>
<title>Registring Course Update</title>
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
	
	padding:3px;
	}
th	{
	text-align:left;
	padding:3px;
	background:#99FF99;
	}
#btn	{
	width:120px;
	height:25px;
	background:#33FFFF;
	margin-top:10px;
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
<h1 id="hh">Massage</h1> 
<div id="tb">
	<?php
	$user=$_SESSION['user'];
	$aa=$_POST['c_id'];
	$ba=$_POST['c_name'];
	$ca=$_POST['c_des'];
	$fa=$_POST['c_price'];
	
	//connection established
	$con=mysql_connect("localhost","root","");

	//database selected
	$db=mysql_select_db("elearning",$con);
	
	
	$sql="INSERT INTO bcourse(c_id,cname,cdes,cprice,STATUS) VALUES($aa,'$ba','$ca',$fa,'Registered')" ;
	$result=mysql_query($sql,$con); 

	
	if($result)
	{
		echo "<h3>You are Successfully Registered";
	} 
	else
	{
	echo " insertion fail";
	}  
	?>
</div>
</div>
</div>
</div>
<!-----------Footer part -------------------!>
<?php
	//footer connection
	include 'footer.php';
	?>
</body>
</center>
</html>