<html>
<head>
</head>
<?php
if(isset($_POST['but']))
{
session_start();
include_once "db1.php";

$a=trim($_POST["admin"]);
$b=trim($_POST["pass"]);
$x="select * from admin1 where Name='$a' and BINARY Password='$b'";
$y=$con->query($x);
if (empty($a&&$b)) {

	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "Adminlogin.php";

	}
elseif($y->num_rows>0)
{
	$row = $y->fetch_assoc();
	$_SESSION["admin"] = $row["Name"];
	$_SESSION["pass"]=$row["Password"];
		
	
	echo "<script type='text/javascript'>alert('Welcome Admin..!!');</script>";
	include "view.php";
}
else
{

	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "Adminlogin.php";
}
$con->close();
}
else
{
include_once "db1.php";

include "userregisterr.php";
}

?> 
<body>
</body>
</html>