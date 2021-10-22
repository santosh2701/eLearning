<?php
session_start();
$id=session_id();	
?>

<html>
<head>
<title>Admin Login page2</title>
<style>
#container	{
		width:80%;
		height:450px;
		background:;
		}
#btn	{
	width:100px;
	height:30px;
	background:#33FFFF;
	}
#co	{
	color:white;
	}
</style>
</head>
<body>
<center>
<div id="container">
	<?php
	//header connection
	include 'header.php';
	//top menu connextion
	include 'Smenu.php';
	?>
<div id="main"> 
<?php
	
      $conn=mysql_connect("localhost","root","");
      $db=mysql_select_db("elearning",$conn);
	 
      $a_um=$_POST['username'];
      $a_pass=$_POST['pswd'];
      $flag=0;
  
      $sql="select * from admin_info where a_uname='$a_um' AND a_pswd='$a_pass'";
            
 	$result=mysql_query($sql,$conn); 
	while($row=mysql_fetch_array($result))
			{
				$flag=1;
				$_SESSION['id']=session_id();	
			 	$_SESSION['user']=$a_um;
	  		}	

      if($flag==1)
      {
		echo "<h3> Login successfully </h3> ";

		
		echo "<br> Logged in: ".$_SESSION['user'] ."<br>";	
		echo "<br>";
		echo "<a href='Ahome.php'> proceed now </a> ";
		
	}

	else
	{
		echo "<h4> Login failed </h4> ";
		echo " <h4> <a href='Alogin1.php'> Try Again </a> </h4>";
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
