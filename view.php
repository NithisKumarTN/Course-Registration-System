<html>
<body>
<table border="3px" bgcolor="#BBBFF">
	

<thead>
	
	<td>Name</td>
	<td>Address</td>
	<td>DOB</td>
	<td>Gender</td>
	<td>Education_Qualified</td>
	<td>Timing</td>
	<td>Contact_No</td>
	<td>Course</td>	
</thead>

<?php
include_once 'db1.php';
$res=mysqli_query($con,"SELECT * from reg") or die('error');
	while($r=mysqli_fetch_array($res))
	{
		$Name=$r['Name'];
		$Address=$r['Address'];
		$DOB=$r['DOB'];
		$Gender=$r['Gender'];
		$Education_qualified=$r['Education_qualified'];
		$Timing=$r['Timing'];
		$Contact_No=$r['Contact_No'];
		$Course=$r['Course'];
		echo '<tr>
				<td>'.$Name.'</td>
				<td>'.$Address.'</td>
				<td>'.$DOB.'</td>
				<td>'.$Gender.'</td>
				<td>'.$Education_qualified.'</td>
				<td>'.$Timing.'</td>
				<td>'.$Contact_No.'</td>
				<td>'.$Course.'</td>
				</tr>';
	}
?>


</table>
<form action="intro.html" method="post"><center><button input="submit">Logout</button></center></form>
</body>
</html>