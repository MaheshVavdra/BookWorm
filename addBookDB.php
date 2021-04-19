<?php
include 'DBconnection.php';
$bkname = $_POST['name'];
$authname = $_POST['authname'];
$price = $_POST['price'];
$qty = $_POST['qty'];



$sql = "SELECT name FROM book_details WHERE name ='$bkname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
	// echo '<script>alert("User already Exist")</script>';
 //  // while($row = $result->fetch_assoc()) {
 //  //   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
 //  // }
	// header("Location: login.html");  
	// exit; 
	echo "<script>
	alert('Book already Exist \\n Pleass Update book details in Update Page');
	window.location.href='AdminUpdateBook.php?bookName=$bkname';
	</script>";
} else {
	
	// Sir here the new user will be saved to datatbase 
	$sql = "INSERT INTO book_details ( name, auther, price,Qty)
	VALUES ('$bkname', '$authname', '$price','$qty')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>
	alert('Book Added Successfully \\n Please Check into your Book Section');
	window.location.href='AdminBookSection.php';
	</script>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();

?>