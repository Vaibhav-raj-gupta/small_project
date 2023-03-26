<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
		table,td,th{
			border: 2px solid black;
		}
	</style>
</head>
<body>

</body>
</html>



<?php 

    $host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="login";

	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

	if ($conn->connect_error) {
		# code...
		die("Connection is not created: ".$conn->connect_error);
	}

		echo "connection was created.<br><br>"; 

$sql= "SELECT * FROM `login_form`";

	$result=mysqli_query($conn,$sql);

	$num= mysqli_num_rows($result);

	echo "Total Row of table is:-".$num."<br>";
	echo "<br>";

	if ($num>0) {
		# code...
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
		
		echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["fathername"]."</td><td>".$row["mothername"]."</td><td>".$row["phonenumber"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><th>";

		echo "<br><br>";
	}
	echo "</table";
}
 ?>

