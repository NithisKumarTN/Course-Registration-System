<?php

include_once 'db1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Course Registration</title>
</head>
	
<body style="background-color:DodgerBlue;">
              <form action="userlogin.php" method="post">
    
	<h1><center>Student Course Registration</center></h1>
	
	<h3><center>Student Login</center></h3>
	<center><a href="coursedet.html"><button>Course Details</a></button>   <a href="cont.html"><button>Contact</a></button></center><br><br>
	<center>Username : <input type="username" name="user" placeholder="Enter the Username"></center><br>
	<center>Password : <input type="password" name="pass" placeholder="Enter the Password"></center><br>
	<center><form action="register.php" method="post"><button name="butt"> Submit:</button><br><br></center></form>
		<center><form action="intro.html" method="post"><button name="buttt">Cancel </button></center><br></form>
	<center><form action="userregisterr.php" method="post"><button name="because">Create New Account </button></form>



</form>
</body>
</html