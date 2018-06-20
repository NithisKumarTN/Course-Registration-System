<?php
if(isset($_POST['but']))
{
session_start();
include_once 'db1.php';

$Name=$_POST['u'];
$Password=$_POST['p'];
$a=$_POST['u'];
$b=$_POST['p'];






if(!empty($a&&$b)) 
{
	mysqli_query($con,"INSERT into user values('$a','$b')");
echo "<script type='text/javascript'>alert('Registered Sucessfully.!!');</script>";
include "userregisterr.php"; 
}
else{

echo "<script type='text/javascript'>alert('Not Registered Sucessfully..!!');</script>";
include "index.php";
} 
}

else
{
	include "index.php";
}

/*($res)
{
echo "<script type='text/javascript'>alert('Registered Sucessfully..!!');</script>";
include "registeradmin.php";
}*/



?>
