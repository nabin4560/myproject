<?php
	include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			margin: 0 auto;
			padding: 0;
			background-color: #FBDCF6;
		}
	</style>
</head>
<body>
<section class="container bg-info rounded" style="margin-top: 10px; padding-bottom: 10px;">
	<form action="" method="POST">
		<div class="form-group">
		<label>name</label>
		<input type="text" name="sname" class=" form-control" placeholder=" enter name">
		</div>
		<div class="form-group">
		<label>usn</label>
		<input type="text" name="susn" class=" form-control" placeholder=" enter usn">
		</div>
		<div class="form-group">
		<label>sec</label>
		<input type="text" name="ssec" class=" form-control" placeholder=" enter sec">
		</div>
		<div class="form-group">
		<label>branch</label>
		<input type="text" name="sbranch" class=" form-control" placeholder=" enter branch">
		</div>
		<div class="form-group">
		<label>sem</label>
		<input type="text" name="ssem" class=" form-control" placeholder=" enter sem">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="form-control bg-warning text-white">
			
		</div>
	</form>
</section>

  
</body>
</html>
<?php
if($_POST['submit'])
{
	$name = $_POST['sname'];
	$usn = $_POST['susn'];
	$sec = $_POST['ssec'];
	$branch = $_POST['sbranch'];
	$sem = $_POST['ssem'];

	$query = "INSERT INTO STUDENT VALUES(NULL, '$name', '$usn', '$sec', '$branch', '$sem')";
	$data = mysqli_query($connection, $query);

	if($data)
	{
		echo "added successfully";
	}
	else
	{
		echo "no student added";
	}
}

?>
