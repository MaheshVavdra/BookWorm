<?php
include 'DBconnection.php';
$bookID = $_GET['bookID'];

// sql to delete a record
$sql = "DELETE FROM book_details WHERE Id=".$bookID;

if ($conn->query($sql) === TRUE) {
  echo "<script>window.location.href='AdminBookSection.php';</script>";
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>