<?php
include 'DBconnection.php';
$user = $_POST['name'];
$email = $_POST['email'];
$pnumber = $_POST['pnumber'];
$pass = $_POST['pass'];



$sql = "SELECT email FROM user_details WHERE email ='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  
	// echo '<script>alert("User already Exist")</script>';
 //  // while($row = $result->fetch_assoc()) {
 //  //   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
 //  // }
	// header("Location: login.html");  
	// exit; 
	echo "<script>
	alert('User already Exist \\n Pleas Login with your User id and Password');
	window.location.href='login.html';
	</script>";
} else {
	
	// Sir here the new user will be saved to datatbase 
	$sql = "INSERT INTO user_details ( name, email, password,phone_number)
	VALUES ('$user', '$email', '$pass','$pnumber')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>
	alert('Registration Successful \\n Please Login with your User id and Password');
	window.location.href='login.html';
	</script>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();

?>