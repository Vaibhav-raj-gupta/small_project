<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		i{
			font-size: 30px;
			margin-left: 550px;
		}
		p{
			font-size: 30px;
			margin-left: 400px;
		}
		b{
			font-size: 30px;
			margin-left: 550px;
		}

	</style>
</head>
<body>

</body>
</html>
<?php 

$First_name=$_POST['fname'];
$Last_name=$_POST['lname'];
$Father_name=$_POST['ffname'];
$Mother_name=$_POST['mname'];
$Phone_number=$_POST['phone'];
$Email=$_POST['em'];
$Address=$_POST['address'];

if (!empty($First_name)&&!empty($Last_name)&&!empty($Father_name)&&!empty($Mother_name)&&!empty($Phone_number)&&!empty($Email)&&!empty($Address))
 {
	# code...
	$host="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="login";

	$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

	if ($conn->connect_error) {
		# code...
		die("Connection is not created: ".$conn->connect_error);
	}

		echo "<i>connection was created.<br><br></i>"; 

}
else{
	echo "please fill all the bracket";
}

$sql= "INSERT INTO `login_form` (`firstname`, `lastname`, `fathername`, `mothername`, `phonenumber`, `email`, `address`) VALUES ('$First_name', '$Last_name', '$Father_name', '$Mother_name', '$Phone_number', '$Email', '$Address')";

$result=mysqli_query($conn,$sql);

if ($result) {
	
	echo "<p>Your Record was successfully inserted in database.</p>";
}
else{

		echo "Your Record was Not inserted in database.";
}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="Get_from.php" method="post">
 		<p>IF you want to show Your data Please enter your father name:-</p>
 		<b>Father name:-<input type="text" name="fm"></b><br>
 		<b style="margin-left: 680px;"><input type="Submit" name="Submit"></b>
 	</form>
 </body>
 </html>