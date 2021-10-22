<html>
<head>
<style>
#ds	{
	font-size:32px;
	}
table 	{
	width:200px;
	height:150px;
	background:#E0E0E0;
	border:0px;
	float:left;
	margin-left:15px;
	margin-top:0px;
	}

td	{
	text-align:Left;
	}
#a1	{
	width:100%;
	height:100px;
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
<body>


<?php
$q=$_GET["q"];  

$con=mysql_connect("localhost","root","");
mysql_select_db('elearning',$con); 

if($q!=""){
$sql="SELECT * FROM courseinfo WHERE c_name='$q'"; /*
$result = mysql_query($sql);
	
if(mysql_num_rows($result)>0) 
{ 

	$row=mysql_fetch_array($result);
	while($row=mysql_fetch_array($result))
	{	

			$b=$row['c_name']; 
			$c=$row['c_des'];
						
			
			echo "<br>";
			echo "<table>";

			echo "<tr>";
			echo "<td id='a1'><img src=".$row['c_thum']." width=80% height=100></td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td id='a2'>  ".$b."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td id='a3'>  ".$c."</td>";
			echo "</tr>";
			echo "</table>";
}
}   
else
{
	
	echo "Course Not Found";
} */
?>

</body>
</html>