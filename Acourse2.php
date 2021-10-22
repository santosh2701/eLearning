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
table 	{
	width:250px;
	height:170px;
	background:#E0E0E0;
	border:0px;
	}

td	{
	text-align:Left;
	}
#a1	{
	width:100%;
	height:120px;
	background:#66FFFF;
	}
#a2	{
	font-size:24px;
	font-weight:bold;
	background:#E0E0E0;
	padding-left:12px;
	}
#a3	{
	font-size:14px;
	background:#E0E0E0;
	padding-left:12px;
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
		<li id="list"><a href="Acourse1.php">Add Course</a></li>
		<li id="list"><a href="Avcourse.php">View Course</a></li>
		<li id="list"><a href="Alogout.php">Logout</a></li>
	</div>
</div>

<div	
<div id="middlePart">

<?php   

$target = "";
$target = $target . basename($_FILES['c_thum']['name']);

$c_n=$_POST['c_name'];  
$c_d=$_POST['c_des'];
$pic=($_FILES['c_thum']['name']);

$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db("elearning",$con);

$sql="INSERT INTO courseinfo(c_name,c_des,c_thum) VALUES('$c_n','$c_d','$pic')";
$result=mysql_query($sql,$con); 

                   if($result)
                   {
		   echo " <h2> Course added succesfully"; 
		   echo "<br>";
 		   echo "<h3> Course Details";
		   $sql2="select * from courseinfo where c_name='$c_n'"; 
  		   $result2=mysql_query($sql2,$con);


			$row=mysql_fetch_array($result2);
		

			$b=$row['c_name']; 
			$c=$row['c_des'];
						
			echo "<center>";
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
			echo "</table>"; 
			echo "</center>"; 
}
                   
else {
       echo " <h3>Course not added ";
       echo " <br> <a href='Acourse1.php'>Try again</a>";  
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
