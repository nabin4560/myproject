<?php
 include("connection.php");

 $query = "SELECT * FROM STUDENT";
 $data = mysqli_query($connection, $query);
 $total = mysqli_num_rows($data);

 if($total!=0)
{
	?>
	<table border="5" cellspacing="5px" cellpadding="5px">
		<tr>
			<th>NAME</th>
			<th>USN</th>
			<th>SEC</th>
			<th>BRANCH</th>
			<th>SEM</th>
		</tr>
	<?php

	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
			<td>".$result['name']."</td>
			<td>".$result['usn']."</td>
			<td>".$result['sec']."</td>
			<td>".$result['branch']."</td>
			<td>".$result['sec']."</td>
		</tr>";

	}
	
}
else
{
	echo "no record found";
}



?>
</table>
