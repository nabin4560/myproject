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

</head>
<body class="bg-secondary">
<section class="container">
	<h1 style="text-align: center; text-transform: uppercase;"> student internal mark</h1>
	<form style="margin-top: 10px; padding:10px 10px 10px;" class=" shadow p-3 mb-5 bg-transparent rounded" action="" method="POST">
		<table class="shadow p-3 mb-5 bg-info rounded">
			<td>
			<select style="margin-bottom: 5px;" name="ssem">
				<option disabled selected > please select sem</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>

			</select>
		</td>
			<tr>
				<th> student usn:</th>
				<td style="padding-bottom: 10px;"><input type=" number " name="susn" placeholder="enter student usn"></td>
			</tr>
			<tr>
				<th> sub code:</th>
				<td style="padding-bottom: 10px;"><input type="text" name="scode" placeholder="enter sub code"></td>
			</tr>

			<tr>
				<th> sub name</th>
				<td style="padding-bottom: 10px;"><input type="text" name="sname" placeholder="enter sub name"></td>
			</tr>
			<tr>
				<th rowspan="2">Marks</th>
				<th> I IA </th>
				<th> II IA </th>
				<th> III IA </th>
			</tr>
				<td><input type=" number " name="smark"></td>
				<td><input type=" number " name="smarks"></td>
				<td><input type=" number " name="submark"></td>
			<tr>
				<th style="padding-top: 10px; text-align: center;"><input type="submit" name="submit" value="submit"></th>
				<th style="padding-top: 10px; text-align: center;"><input type="reset" value="reset"></th>
			</tr>
		</table>
	</form>
</section>


</body>
</html>
<?php
if($_POST['submit'])
{
	$sem = $_POST['ssem'];
	$studusn = $_POST['susn'];
	$subcode = $_POST['scode'];
	$subname = $_POST['sname'];
	$submark = $_POST['smark'];
	$submarks = $_POST['smarks'];
	$subsmark = $_POST['submark'];

	$query = "INSERT INTO IAMARK VALUES(NULL,'$sem', '$studusn', '$subcode', '$subname', '$submark','$submarks', '$subsmark')";
	$data = mysqli_query($connection, $query);

	if($data)
	{
		echo '<script>alert("your iamark is recorded");</script>';
	}
	else
	{
		echo '<script>alert("sorry try again");</script>';
	}
}


?>

