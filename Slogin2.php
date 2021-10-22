<?php
session_start();
$id=session_id();	
?>

<html>
<head>
<title>Student Login page2</title>
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
	include 'Smenu.php';
	?>
<div id="main"> 
<?php
		 
      $st_un=$_POST['username'];
      $st_pass=$_POST['pswd'];
      $flag=0;

      $conn=mysql_connect("localhost","root","");
      $db=mysql_select_db("elearning",$conn);
     
      $sql="select * from usersinfo where u_uname='$st_un' AND u_pswd='$st_pass'";
               
	  
 	   $result=mysql_query($sql,$conn); 
	   while($row=mysql_fetch_array($result))
			{
				$flag=1;
				$_SESSION['id']=session_id();	
			 	$_SESSION['user']=$st_un;
	  	}	

      if($flag==1)
      {
		    echo " <h3> You are login succesfully";
		    echo "<br>";
		    echo "<h3> Login as $st_un";
		    echo " <br> <a href='Shome.php'>Process</a>";
      }
      else
      {
        echo " <h3>Login failed ";
        echo " <br> <a href='Slogin1.php'>Try again</a>";  
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
