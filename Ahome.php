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
#ds	{
	font-weight:bold;
	font-size:28px;
	background: #121FCF;
	background: -webkit-radial-gradient(circle farthest-corner at center center, #121FCF 0%, #CF1512 100%);
	background: -moz-radial-gradient(circle farthest-corner at center center, #121FCF 0%, #CF1512 100%);
	background: radial-gradient(circle farthest-corner at center center, #121FCF 0%, #CF1512 100%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	}

td	{
	border-radius:5px;
	box-shadow: inset 0.2em 0.2em 0.2em 0 rgba(255,255,255,0.5),inset -0.2em -0.2em 0.2em 0 rgba(0,0,0,0.5);
	background-image: linear-gradient(to left bottom, #e10f86, #d60097, #c500aa, #ae11bc, #8d27cf, #6e54e7, #4672f7, #008aff, #00b3ff, #00d2fb, #00e8a3, #0ef404);
}
#bb	{
	background-image: linear-gradient(to left bottom, #02e75b, #00ccaa, #00aae0, #0080e8, #004ebb, #2f3aa8, #402494, #4a007e, #6d0089, #8e0093, #af009b, #cf00a2);}
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
		<li id="list"><a href="Enroll_course.php">Register Course</a></li>
		<li id="list"><a href="Avfeed.php">View Feedback</a></li>
		<li id="list"><a href="Alogout.php">Logout</a></li>
	</div>
</div>

<div	
<div id="middlePart">
<div id="ac">
<span id="ds">WELCOME TO DASHBOARD</span>
</div>
<div>
<?php
//connection established
$con=mysql_connect("localhost","root","");
//database selected
$db=mysql_select_db("elearning",$con);


$sql="select * from courseinfo";
$result=mysql_query($sql,$con); 
$sum=0;
$count=0;
while($row=mysql_fetch_array($result))
{
	$p=$row['c_id'];
	$sum=$sum+$p;
	$count++;

}


$sql="select * from courseinfo";
$result=mysql_query($sql,$con); 
$courseTotal=0;
while($row=mysql_fetch_array($result))
{
	$courseTotal++;
}


$sql="select * from bcourse";
$result=mysql_query($sql,$con); 
$courseEnroll=0;
while($row=mysql_fetch_array($result))
{
	$courseEnroll++;
}


?>
<table>
	<tr>
	<td width=180 height=120 id="aa"> 
	 <div id="kk"> <?php echo $courseTotal ?> </div>
	<div id="nn">  Total Course <div>	
	 </td> 

	<td width=180 height=120 id="bb"> 
	 <div id="kk"> <?php echo $courseEnroll ?> </div>
	<div id="nn">  Registered Course <div>	
	 </td> 
	</tr>
</table>
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
