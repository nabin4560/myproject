<?php
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
	background-image: url(rk.jpg);
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-size: cover;
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
	padding-bottom: 20px;
}
		</style>

</head>
<body>
	<section class="container-fluid">
		<div class="wrapper">
			<h1> CREATE ACCOUNT</h1>
			<form action="" method="POST">
				<div class="text">
	    			<div class="from-group">
	    				<label for="inputusername">
	    					USER NAME
	    				</label>
	    				<input type="text" name="uname" class="form-control"id="inputusername" placeholder="User Name">
	    			</div>
	    		</div>
	    		
	    		<div class="text">
	    			<div class="from-group">
	    				<label for="inputmobile">
	    					MOBILE NUMBER
	    				</label>
	    				<input type=" number " name="umbl" class="form-control" id="inputmobile" placeholder="Mobile Number">
	    			</div>
	    		</div>
	    		<div class="text">
	    			<div class="from-group">
	    				<label for="inputemail">
	    					EMAIL
	    				</label>
	    				<input type="email" name="uemail" class="form-control" id="inputemail" placeholder="Eamil">
	    			</div>
	    		</div>
	    		<div class="text">
	    			<div class="from-group">
	    				<label for="inputpassword">
	    					PASSWORD
	    				</label>
	    				<input type="password"name="upwd"  class="form-control" id="inputpassword" placeholder="Password">
	    			</div>
	    		</div>
	    		<div class="text">
	    			<div class="from-group">
	    				<input type="submit" name="submit" class="form-control bg-warning text-white" value="CREATE ACCOUNT">
	    				
	    			</div>
    		</form>

	</section>



	
</body>
</html>

<?php
if($_POST['submit'])
{

	$username = $_POST['uname'];
	$mobile = $_POST['umbl'];
	$email = $_POST['uemail'];
	$password = $_POST['upwd'];

	$query ="INSERT INTO REGISTER VALUES(NULL, '$username', '$mobile', '$email', '$password')";
	$data = mysqli_query($connection, $query);
	if($data)
	{
		// echo " registeration success";
		echo '<script>alert("registeration ssuccess");</script>';
	}
	else
	{
		echo '<script>alert("sorry try again");</script>';	}

}



?>