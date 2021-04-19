<?php
session_start();
session_destroy();
echo "<script>
	alert('You have been Logedout \\n Welcome Again');
	window.location.href='login.html';
	</script>";
?>