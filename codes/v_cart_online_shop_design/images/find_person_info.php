<!DOCTYPE html>
<html>
<head>
	<title>personal information</title>
</head>
<body>
		<form method="post" action="find_person_info.php">
		
		<input type="text" name="fm">
		<input type="submit" name="submit">
	</form>
</body>
</html>
		


<?php 

   $Id=$_POST['fm'];

    $host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="login";

	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

	/*if ($conn->connect_error) {
		# code...
		die("Connection is not created: ".$conn->connect_error);
	}

		echo "connection was created.<br><br>";*/


$sql= "SELECT * FROM `login_form` WHERE firstname='$Id'";

	$result=mysqli_query($conn,$sql);

	$num= mysqli_num_rows($result);

	echo "<b>Total Row of table is:- ".$num."</b>";

	if ($num>=0) {
		
		echo "<table>
		<tr>

		<th>Id</th>
		<th>FirstName</th>
		<th>Lastname</th>
		<th>Fathername</th>
		<th>MotherName</th>
		<th>PhoneNumber</th>
		<th>Email</th>
		<th>Address</th>

		</tr>";

		while ($row=mysqli_fetch_assoc($result)) {
		
		echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["fathername"]."</td><td>".$row["mothername"]."</td><td>".$row["phonenumber"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td></tr>";

		echo "<br><br>";
	}
	echo "</table>";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <style type="text/css">
 	
 	table,th,td{
 		border: 1px solid black;
 		text-align: center;
 		border-collapse: 0px;
 		border-color: blue;
 	}
 </style>
 <body>
 
 </body>
 </html>