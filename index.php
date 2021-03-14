<?php
session_start();
include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title> login page </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
				<style type="text/css">
			
body{
	background-image: url(login.jpg);
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	-webkit-background-size: cover;
}
.wrapper{
	width: 500px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	background:rgb(255, 51, 204,0.3);
	border-radius: 70px 0 70px 0;

	
}

.wrapper h1{ 
	text-align: center;
	font-size: 30px;
	margin: 0 auto;
	font-family: monotype corsiva;
	font-weight: bold;
	color: white;
	position: relative;
	border-bottom: 5px solid red;
	width: 80%;
	border-radius: 70px;
		
}

.text{
	width: 100%;
	overflow: hidden;
	padding-top: 5px;
	font-size: 20px;
	padding-left:50px;
	padding-right: 50px;
	text-align:center;
	color: white;
	font-family: monospace;
}

</style>
</head>
<body>
	<section class="container-fluid">
		<div class="wrapper">
			<h1> SIGN IN</h1>
			<form action="" method="post">
				<div class="text">
					<div class="form-group"> 

						<label for="inputuser"> USER NAME
						</label>
						<input type="text" id="inputuser" name="uname" class="form-control bg-transparent text-info" placeholder =" enter User Name">
					</div>
				</div>
				<div class="text">
					<div class="form-group">
						<label for="inputpassword"> PASSWORD</label>
						<input type="password" name="pwd" class="form-control bg-transparent text-info" id="inputpassword" placeholder="enter password">
					</div>
				</div>
				<div class="text">
					<div class="form-group">
						<input  class="form-control bg-warning rounded pill text-white" type="submit" name="submit" value="login">

					</div>
				</div>
			</form>
		</div>

	</section>



	
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		$username = $_POST['uname'];
		$password = $_POST['pwd'];
		$query = "SELECT * FROM USER WHERE username ='$username' and password ='$password'";
		$data = mysqli_query($connection, $query);
		$total = mysqli_num_rows($data);

		if($total)
		{
			$_SESSION['username'] = $username;
			header('location:homepage.php');
		}
		else
		{
			echo '<script>alert("sorry try again");</script>';
		}
	}
?>
