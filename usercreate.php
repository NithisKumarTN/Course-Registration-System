<?php
if(isset($_POST['but']))
{
session_start();
include_once 'db1.php';

$username=$_POST['u'];
$password=$_POST['p'];






if(!empty($username&&$password)) 
{
	mysqli_query($con,"INSERT into admin values('$Name','$Password')");
echo "<script type='text/javascript'>alert('Registered Sucessfully.!!');</script>";
include "userregister.html"; 
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
