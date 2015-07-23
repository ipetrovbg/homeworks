<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<meta charset="utf-8" />
	<title>Длопи</title>
</head>
<body>
	<table style="width: 90%; border: 1px solid #ccc; margin: 5%;" class="table table-hover">
	<tr>
		<td style='border: 1px solid #ccc;'>#</td><td style='border: 1px solid #ccc;'><b>Name</b></td><td style='border: 1px solid #ccc;'><b>Last Name</b></td><td style='border: 1px solid #ccc;'><b>Race</b></td><td style='border: 1px solid #ccc;'><b>Gender</b></td>
		<td style='border: 1px solid #ccc;'><b>Date of Birth</b></td><td style='border: 1px solid #ccc;'><b>weight</b></td><td style='border: 1px solid #ccc;'><b>status</b></td><td style='border: 1px solid #ccc;'><b>Update</b></td><td style='border: 1px solid #ccc;'><b>Delete</b></td>
	</tr>
  		<?php

  			require_once('connect.php');

  			$select_dlops = "SELECT * FROM dlops WHERE date_deleted IS NULL";

  			$q = mysqli_query($connect, $select_dlops)or die(mysqli_error());
  			if (mysqli_num_rows($q) > 0) {
  				
  				while ($r = mysqli_fetch_assoc($q)) {
  					
  					echo '<tr><td style="border: 1px solid #ccc;">' . $r['id'] . '</td>';
  					echo '<td style="border: 1px solid #ccc;">' . $r['first_name'] . '</td>';
  					echo '<td style="border: 1px solid #ccc;">' . $r['last_name'] . '</td>';
  					echo '<td style="border: 1px solid #ccc;">' . $r['race'] . '</td>';
  					echo '<td style="border: 1px solid #ccc;">' . $r['gender'] . '</td>';
  					echo '<td style="border: 1px solid #ccc;">' . $r['date_of_birth'] . '</td>';
  					echo '<td style="border: 1px solid #ccc;">' . $r['weight'] . '</td>';
  					echo '<td style="border: 1px solid #ccc;">' . $r['status'] . '</td>';
  					echo '<td style="border: 1px solid #ccc;"><button onclick="window.location.href=\'edite_dlop.php?id='.$r['id'].'\'" type="button" class="btn btn-primary">Edite</button></td>';
  					echo '<td style="border: 1px solid #ccc;"><button onclick="window.location.href=\'delete_dlop.php?id='.$r['id'].'\'" type="button" class="btn btn-danger">Delete</button></td></tr>';

  				}

  			}

  		?>
	</table>

<button onclick="window.location.href='add_dlop.php'" type="button" class="btn btn-success">Add Dlop</button>
</body>
</html>