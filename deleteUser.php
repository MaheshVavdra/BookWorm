<?php
include 'DBconnection.php';
$userID = $_GET['userID'];

// sql to delete a record
$sql = "DELETE FROM user_details WHERE user_id=".$userID;

if ($conn->query($sql) === TRUE) {
  echo "<script>window.location.href='AdminDashboard.php';</script>";
} else {
  echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>