<?php 
session_start();
if(!isset($_SESSION['user'])){
	echo "<script>
	alert('LOGIN FIRST \\n Please Login');
	window.location.href='login.html';
	</script>";
}
if(!strcasecmp($_SESSION['admin'],'1') == 0){
	echo "<script>
	alert('LOGIN as User First \\n Please Login');
	window.location.href='login.html';
	</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		@import url("https://fonts.googleapis.com/css?family=Fira+Sans");
		body{
			background-color: #FFFDD0;
			background-image: linear-gradient(21deg, rgba(64, 83, 206, 0.3697003235) 68%, rgba(255, 206, 196, 0.5) 163%), linear-gradient(163deg, rgba(49, 146, 170, 0.0794448997) 86%, rgba(239, 112, 138, 0.5) 40%), linear-gradient(30deg, rgba(76, 79, 173, 0.6173675717) 22%, rgba(237, 106, 134, 0.5) 169%), linear-gradient(48deg, rgba(31, 85, 147, 0.7323890642) 64%, rgba(247, 126, 132, 0.5) 43%);
			background-blend-mode: overlay,multiply,color,normal;	
			font-family: "Fira Sans", Helvetica, Arial, sans-serif;
		}

		@font-face {
			font-family: myFirstFont;
			src: url(pacifico-v16-latin-regular.woff);
		}	
		.MainContainor{
			background-image: url("bookCover.jpg");			
			background-repeat: no-repeat;
			background-size: cover;
			height: 600px;
			width: 80%;			
			text-align: center;	
			align-self: center;
			margin: 25px auto; 
			border: 1px solid black;	
			border-radius: 10px;
			box-shadow:18px 15px 12px #64468d69; 
		}
		.TitleContent{
			font-family: "Fira Sans", Helvetica, Arial, sans-serif;
			/*font-family: myFirstFont;			*/
			margin-top: 20px;
			margin-left: 0px;			
			font-size: 30px;
			color: white;
		}
		.button-01{
			font-family: myFirstFont;			
			margin-top: 20px;			
			height: 40px;
			width: 130px;
			text-align: center;	
			border: 1px solid black;
			border-radius: 50px;
			box-shadow:5px 5px 50px grey; 			
			font-size: 20px;
			position: absolute;
			top: 550px;
			margin-left: 20px;	
			color: white;		
		}
		.button-02{
			font-family: myFirstFont;			
			margin-top: 20px;
			height: 40px;
			width: 130px;
			text-align: center;	
			border: 1px solid black;
			border-radius: 50px;
			box-shadow:5px 5px 50px grey; 			
			font-size: 20px;
			position: absolute;
			top: 550px;
			right: 180px;	
			color: white;
		}
		.button-content{
			position: relative;
			top: 8px;
		}
		.mainproduct{
			height: 450px;
			width: 1000px;
			color: #000;
			background: transparent;
			margin-left: 50px;
			/*margin-top: 100px;*/
			/*content: "";*/
			/*display: table;*/
			/*clear: both;*/
			align-content: center;			
		}
		.catagory{
			float: left;
			width: 33.33%;
		}
		.displayImage{
			height: 200px;
			width: 150px;
			background: #fff;
			/*padding: 20px;*/
			margin-top: 40px;
			margin-left: 90px;
			border-radius: 20px;
			background-repeat: no-repeat; 
			background-size: cover;
			z-index: 0;
			position: relative;	
			transition: width .5s , height .5s;		
			box-shadow:7px 10px 20px #fff
		}
		.displayImage:hover{
			height: 250px;
			width: 200px;

		}
		.displayCatagory{			
			height: 166px;
			width: 200px;
			background: #A0A0A0;
			/*padding: 20px;*/
			margin: -84px;
			margin-left: 66px;
			border-radius: 20px;
			
		}
		.displayTitle{
			position: relative;
			top:100px;
			right: 40px;
			font-size: 20px;
			font-family: "Fira Sans", Helvetica, Arial, sans-serif;
			font-weight: 600;
		}
		.quoatTitle{
			position: relative;
			top:105px;
			/*right: 45px;*/
			font-size: 15px;
			font-family: "Fira Sans", Helvetica, Arial, sans-serif;
			font-weight: 300;	
		}
	</style>	
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Palanquin:400,100,200,300'><link rel="stylesheet" href="./DashBoardstyle.css">
</head>
<body>
	<form id="content">
		<input type="text" name="input" class="input" id="search-input">
		<button type="reset" class="search" id="search-btn"></button>
	</form>
	<div class="MainContainor">
		<div class="TitleContent">
			Welcome To Book Worms		
			<!-- <span  class="search" style="margin-left: 80px;font-size: 20px;margin-bottom: 10px;">Search: <input type="text" name="Search"></span> -->		
		</div>
		<div class="TitleContent" style="margin-right: 600px;margin-top: 100px;">
			Select Your Catagory
			<!-- <span  class="search" style="margin-left: 80px;font-size: 20px;margin-bottom: 10px;">Search: <input type="text" name="Search"></span> -->		
		</div>	
		<div class="mainproduct">
			<div class="catagory"><div class="displayImage" style="background-image: url('Fantasy.jpg'); " onclick="window.location.href = 'showBook.php?Book=Fantasy';"></div><div class="displayCatagory" style="background: #709acc"><div class="displayTitle" >Fantasy</div><div class="quoatTitle" style="right: -10px;">See your Imaginations.</div></div></div>
			<div class="catagory"><div class="displayImage" style="background-image: url('Adventure.jpg');" onclick="window.location.href = 'showBook.php?Book=Adventure';"></div><div class="displayCatagory" style="background: #f8d2a4"><div class="displayTitle" style="right: 20px;">Adventure</div><div class="quoatTitle">Travel with Books.</div></div></div>
			<div class="catagory"><div class="displayImage" style="background-image: url('Mysterious.jpg');" onclick="window.location.href = 'showBook.php?Book=Mystery';"></div><div class="displayCatagory" style="background: #bc5a99"><div class="displayTitle">Mystery</div><div class="quoatTitle">Find the Mastermind.</div></div></div>
		</div>
		 <a href="logout.php">
			<div class="button-01">
				<div class="button-content">Logout</div>
			</div>
		</a>		
		<!--<a href="something.html">
			<div class="button-02">
				<div class="button-content">Signup</div>
			</div>
		</a> -->			
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://codepen.io/MilanMilosev/pen/EoLBjo.js'></script><script  src="./DashBoardscript.js"></script>
</body>
</html>