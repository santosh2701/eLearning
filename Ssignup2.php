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

      $s_uname=$_POST['uname'];
      $s_name=$_POST['fname'];
      $s_email=$_POST['email'];
      $s_pass=$_POST['pswd'];
      $flag=0;

$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db("elearning",$con);

$sql1="select st_email from students_info";
$result1=mysql_query($sql1,$con);

if($result1) 
{ 
	while($row=mysql_fetch_array($result1))
 	{
	
		if($row['st_email']==$s_email)
		$flag=1;

                 if($flag==1)
                   {
			echo "<br>";
		        echo "<h3>User Already Registered";
			echo " <br> <a href='Slogin1.php'>goto Login</a>";	                              
		    }

                   else if($flag==0)
                    { 
			$sql2="INSERT INTO students_info(st_uname,st_fname,st_email,st_pswd) VALUES('$s_uname','$s_name','$s_email','$s_pass')";
			$result2=mysql_query($sql2,$con);			
                 	echo " <h3> Signup succesfully"; 
		   	echo " <br> <a href='Slogin1.php'>goto Login</a>";
	            }
			  else
   			       {
      				echo "<h4>Error adding user in database";
				echo " <br> <a href='Ssignup1.php'>Try Again</a>";
    			       }  
} 
else
{ 
	echo "<h4>Error please try again";
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
