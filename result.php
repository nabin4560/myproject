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
	 		background-image: url(result.jpg);
	 		background-attachment: fixed;
	 		background-size: cover;
	 		background-size: no-repeat;
	 		background-position: center;
	 		-webkit-background-size: cover;
	 	}
	.result-panel{
	width: 500px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	 	}
	</style>

</head>
<body>
<section class="container">
	<div class="result-panel">

		<form action="" method="POST" class="form-group">
			<div class="row">
		
				<div class="col-12">	
					<input type="search" name="search" placeholder="enter id" class="form-control" aria-label="Search" style="width: 100%;margin-bottom: 5px;"/>
					<input type="submit" name="submit" class="btn btn-outline-success my-2 my-sm-0" style="width: 30%;  margin-left: 35%;">
				</div>
			</div>
		</form>
	</div>
</section>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php
if($_POST['submit'])
{
	$id = $_POST['search'];
	$query = "SELECT * FROM IAMARK WHERE studusn ='$id'";
	$data = mysqli_query($connection, $query);
	$total = mysqli_num_rows($data);
	$res = mysqli_fetch_assoc($data);

	if($total!=0)
	{
	?>
	<section class="container">
		<div class="result-panel">
		<table border="5" cellspacing="5px" cellpadding="5px" class="bg-warning">
			<tr>
			<!-- 	<th rowspan="2">studusn</th>
				<th rowspan="2">sem</th> -->
				<p style="font-weight: bold; font-size: 20px;">studusn: <?php
				echo $res['studusn'];
				?>
					
				</p>
				<p style="font-weight: bold; font-size: 20px;">sem:
				<?php
				echo $res['sem'];
				?></p>
				<th rowspan="2">subcode</th>
				<th rowspan="2">subname</th>
				<th colspan="3">MARK</th>
				
			</tr>
				
				<tr>
				
				<td>IAMAK-1</td>
				<td>IAMAK-2</td>
				<td>IAMAK-3</td>
				
			</tr>

	<?php

	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td>".$result['subcode']."</td>
			<td>".$result['subname']."</td>
			<td>".$result['iamark1']."</td>
			<td>".$result['iamark2']."</td>
			<td>".$result['iamark3']."</td>
		</tr>";
		//echo $result['rollno']." ".$result['name']." ". $result['class']."<br/>"; for displaying table record

	}
	//echo "table has records"; for displaying table has record
	}
else
{
	// echo "no record found";
	echo '<script>alert("no record found");</script>';	
}
}
?>
</table>
</div>
</section>
