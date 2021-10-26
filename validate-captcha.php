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

      $s_uname=$_POST['u_uname'];
      $s_name=$_POST['u_fname'];
      $s_email=$_POST['u_email'];
      $s_pass=$_POST['u_pswd'];
      $flag=0;

$con=mysql_connect("localhost","root",""); 
$db=mysql_select_db("elearning",$con);

if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {
    $secret = '6LcldrQcAAAAANtjVhOiiLb9_abd9Zi_dbkbYKmp';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {

	$sql1="select u_email from usersinfo";
	$result1=mysql_query($sql1,$con);

	else if($result1) 
	{ 
	while($row=mysql_fetch_array($result1))
 	{
	
		if($row['u_email']==$s_email)
		$flag=1;
	}
                 if($flag==1)
                   {
			echo "<br>";
		        echo "<h3>User Already Registered";
			echo " <br> <a href='Slogin1.php'>goto Login</a>";	                              
		    }

                   else if($flag==0)
                    { 
			$sql2="INSERT INTO usersinfo(u_uname,u_fname,u_email,u_pswd) VALUES('$s_uname','$s_name','$s_email','$s_pass')";
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
   
}
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
