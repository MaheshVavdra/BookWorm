<?php
include 'DBconnection.php';
session_start();
$email = $_POST['email'];
$pass = $_POST['pass'];


$sql = "SELECT email,password,user_id,user_stats FROM user_details WHERE email ='$email'";
$result = $conn->query($sql);



if ($result->num_rows === 0) {  
	// echo '<script>alert("User already Exist")</script>';
 //  // while($row = $result->fetch_assoc()) {
 //  //   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
 //  // }
	// header("Location: login.html");  
	// exit; 
	echo "<script>
	alert('User does not Exist \\n Please Create an account');
	window.location.href='login.html';
	</script>";
} else {

	$row = $result->fetch_assoc();
	// Sir here the new user will be saved to datatbase 	
	if (strcasecmp($row['password'], $pass) === 0) {				
		// echo $row['user_stats'];

// echo "<script>
// 	alert('User does not Exist \\n Please Create an account');
// 	window.location.href='login.html';
// 	</script>";

		if(strcasecmp($row['user_stats'],'1') === 0){
			$_SESSION["user"] = $row['user_id'];
			$_SESSION['admin'] = '0';
			echo "<script>	
			window.location.href='AdminDashboard.php';
			</script>";
		}
		else{
			$_SESSION["user"] = $row['user_id'];
			$_SESSION['admin'] = '1';
			echo "<script>	
			window.location.href='Dashboard.php';
			</script>";
		}
	} else {
		// echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<script>
		alert('User ID and Password mismatch \\n Please try again');
		window.location.href='login.html';
		</script>";
	}
}

$conn->close();

?>