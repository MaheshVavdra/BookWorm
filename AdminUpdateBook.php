<?php
include 'DBconnection.php';
$bkName = $_GET['bookName'];

$sql = "SELECT * FROM book_details WHERE name ='$bkName'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
$id = $row['Id'];
$name = $row['name'];
$autherName = $row['auther'];
$price = $row['price'];
$qty = $row['Qty'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>BookWorm</title>
	<link rel="stylesheet" href="./style.css">

</head>
<body>
	<div class="form-structor">
		<form action="alterBookDB.php" method="GET">
			<div class="signup">
				<h2 class="form-title" id="signup"><span>or</span>Add Book</h2>
				<div class="form-holder">
					<input type="hidden" name="id" value="<?php echo "$id"; ?>">
					<input type="text" class="input" name="name" placeholder="Book Name"  value="<?php echo "$name"; ?>" required disabled="" />
					<input type="text" class="input" name="authname" placeholder="Auther Name" value="<?php echo "$autherName"; ?>" required disabled="" />
					<input type="number" class="input" name="price" placeholder="Price" required />
					<input type="number" class="input" name="qty" placeholder="Total Quantity" required />
				</div>
				<button class="submit-btn">Add Book</button>
			</div>
		</form>		
	</div>
	<script  src="./script.js"></script>

</body>
</html>
