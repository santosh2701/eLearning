<html>
<head>
	<title>Top-Menu page</title>
</head>
<style>
#menu	{
	width:100%;
	height:50px;
	background:#009999;
	text-align:left;
	}
ul 	{
	list-style-type:none;
	}
ul,li	{
	float:left;
	}
#menu-list	{
		color:black;
		padding-left:20px;
		}
#menu-list	{
		padding-left:10px;
		padding-right:10px;
		border-top:0px;
		border-bottom:0px;
		border-left:0px;
		}
#menu-list a 	{
		text-decoration:none;
		color:#FFFFFF;
		}
#menu-right	{
		color:#FFFFFF;
		padding-right:10px;
		padding-left:10px;
		border:0px;
		}
.menu-list-right a	{
		color:#FFFFFF;
		text-decoration:none;
		}
.menu-list-right	{
					float: right;
				    padding-top: 15px;
				    }
</style>
<body>
	<center>
		<div id="menu">
	<ul>
		<li id="menu-list"><a href="index.php"><b>Home</b></a></li>
	</ul>
	<div class="menu-list-right">
		<a href="Alogin1.php" id="menu-right"><b>Admin</b></a>
		<a href="Slogin1.php" id="menu-right"><b>Log In</b></a>
    		<a href="Ssignup1.php" id="menu-right"><b>Sign Up</b></a>
    </div>
	</div>
	</center>
</body>
</html>