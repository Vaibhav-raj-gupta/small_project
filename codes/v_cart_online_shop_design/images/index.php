<?php 

$name=$_POST['nm'];
$email=$_POST['em'];

if (!empty($name)&&!empty($email)) {
	
	$host ="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="login";

	$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);

	if ($conn->connect_error) {
		
				die("connection failed: ".$conn->connect_error);
	}

	echo "connection is successfully created."<br>;
	
}
else{

	echo "please fill all bracket.";
}

$sql= "INSERT INTO `login_page` (`Name`, `email`) VALUES ('$name', '$email')";

$result = mysqli_query ($conn,$sql);

if ($result) {
	
	echo "YOur data was succesfully insrted into database.";
}
else {
	# code...

	echo "YOur data was not succesfully insrted into database"<br>;
}
 ?>