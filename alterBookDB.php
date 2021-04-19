<?php

include 'DBconnection.php';
$id = $_GET['id'];
$price = $_GET['price'];
$qty = $_GET['qty'];


$sql = "UPDATE book_details SET price=$price , Qty = $qty WHERE Id=$id";

if ($conn->query($sql) === TRUE) {
  echo "<script>
	alert('Book Details Updated \\n Please Check on Book Section');
	window.location.href='AdminBookSection.php';
	</script>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>