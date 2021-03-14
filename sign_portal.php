<?php

?>


<!DOCTYPE html>
<html>
<head>
	<title>nav bar</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		.login_pos{
	width: 500px;
	position: absolute;
	top: 50%;
	left: 80%;
	padding-top:20px;
	padding-bottom: 20px;	
	transform: translate(-50%,-50%);
	border-bottom: 5px solid red;
	border-radius: 70px 0;

}

.btn_pos{
	text-align: center;
	font-size: 30px;
	margin: 0 auto;
	font-weight: bold;
	color: white;
	position: relative;
		
}
.login_pos h1{
	text-align: center;
	text-transform: uppercase;
	border-bottom: 5px solid red;
}
	</style>
</head>
<body>
	<section class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				
		
		<div class="back_img">
			<img src="rk.jpg" width="700px" height="730px">

				<div class="login_pos bg-info">
					<h1 class="text-white"> sign in portal</h1>

					<div class="btn_pos">

						<a class="btn btn-warning text-white" href="student_login.php" role="button"> STUDENT LOGIN</a>
						<a class="btn btn-dark text-white" href="register.php" role="button"> REGISTER</a>

					</div>
				</div>
			</div>
		</div>
	</section>







</body>
</html>