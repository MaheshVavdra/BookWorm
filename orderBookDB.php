<?php
session_start();
include 'DBconnection.php';
$bkid = $_GET['id'];
$sddress = $_GET['address'];
$qty = $_GET['qty'];

$uids = $_SESSION['user'];

$sql = "select Qty from book_details where Id = $bkid";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$q = $row['Qty'] - $qty;

$sql = "UPDATE book_details SET Qty = $q WHERE Id=$bkid";

if ($conn->query($sql) === TRUE ) {
  echo "<script>
	alert('Order Successful \\n Please Check on Book Section');
	window.location.href='showBook.php?Book=Fantasy';
	</script>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>