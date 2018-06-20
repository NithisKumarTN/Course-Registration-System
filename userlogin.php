<html>
<head>
</head>
<?php
if(isset($_POST['butt']))
{
session_start();
include "db1.php";

$a=trim($_POST["user"]);
$b=trim($_POST["pass"]);
$x="select * from user where Name='$a' and  Password='$b'";
$y=$con->query($x);
if (empty($a) && empty($b)) {

	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "index.php";

	}

elseif($y->num_rows>0)
{
	$row = $y->fetch_assoc();
	$_SESSION["user"] = $row["Name"];
	$_SESSION["pass"]=$row["Password"];
		
	
	echo "<script type='text/javascript'>alert('Welcome Student!!');</script>";
		include "register.php";
	exit();
}
else
{
	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "index.php";
}
$con->close();
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>