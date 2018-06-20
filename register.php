<?php
include_once 'db1.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>"Registration form"</title>
<style >
div {
    margin-left: 450px;
}
div1 {
margin-left: 300px
}
</style>
</head>

<body style="background-color:DodgerBlue">


<form action="infoins.php" method="POST">

<h1><center>Student Course Registration</center></h1><h1>
</h1><h3><center>Registration form</center></h3><br><br>
<div>Name:<input type="text" placeholder="Enter your name" id="name" name="nm">  Address:<input type="text" placeholder="Enter your Address" id="ad" name="add"></div><br><br>
<div>DOB:<input type="text" placeholder="Enter your Date of Birth" id="DOB" name="dob">   Gender:<select name="Gender"><option value="Male">Male</option><option value="Female">Female</option></select></div><br><br>
<div>Education Qualified:<select name="edu"><option value="10th">10th</option><option value="12th">12th</option></select></div><br><br>
<div>Course Name:<select name="course"><option value="PYTHON">PYTHON</option><option value="HTML">HTML</option><option value="CSS">CSS</option></select></div><br><br>
<div>Time Duration:<select name="time"><option>AN</option><option>FN</option></select></div><br><br>
<div>Contact No:<input type="varchar" placeholder="Enter your Contact No" id="co" name="cont"></div><br><br>
<div1></div1>
<div1><center><button type="submit">Submit</button></center></div1>
</form>

</body></html>