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
	font-size:32px;
	background: #121FCF;
	background: -webkit-radial-gradient(circle farthest-corner at center center, #121FCF 0%, #CF1512 100%);
	background: -moz-radial-gradient(circle farthest-corner at center center, #121FCF 0%, #CF1512 100%);
	background: radial-gradient(circle farthest-corner at center center, #121FCF 0%, #CF1512 100%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
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
#aa	{
	 background-image: linear-gradient(to top, #e70202, #af5900, #756f00, #417612, #007548, #00746a, #007083, #00698d, #0061a7, #0056bf, #0043cf, #001bcf);
	}
#bb	{
	background-image: linear-gradient(to right top, #02e7d3, #00c6e0, #00a2e1, #007bcf, #5150a7, #574a9e, #5c4596, #603f8d, #495eaa, #2379bf, #0093ca, #00abcf);
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
		<p><strong>User:</strong>
			<?php
			echo $_SESSION['user'];
			?>
	</div>
	<div id="sideMenu">
		<li id="list"><a href="Shome.php">Dashboard</a></li>
		<li id="list"><a href="Sprofile.php">My Profile</a></li>
		<li id="list"><a href="Ssearch1.php">Search Course</a></li>
		<li id="list"><a href="userfeedback1.php">Feedback</a></li>
		<li id="list"><a href="Slogout.php">Logout</a></li>
	</div>
</div>

<div	
<div id="middlePart">
<span id="ds">WELCOME TO DASHBOARD</span>
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
	<div id="nn">  Enroll Course <div>	
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
