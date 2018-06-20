<html>
<head>
</head>
<?php
if(isset($_POST['but']))
{
session_start();
include "db1.php";

$a=trim($_POST["admin"]);
$b=trim($_POST["pass"]);
$x="select * from admin where Name='$a' and  Password='$b'";
$y=$con->query($x);
if (empty($a) && empty($b)) {

	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "Adminlogin.php";

	}

elseif($y->num_rows>0)
{
	$row = $y->fetch_assoc();
	$_SESSION["admin"] = $row["Name"];
	$_SESSION["pass"]=$row["Password"];
		
	
	echo "<script type='text/javascript'>alert('Welcome Admin!!');</script>";
		include "view.php";
	exit();
}
else
{
	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "intro.html";
}
$con->close();
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>