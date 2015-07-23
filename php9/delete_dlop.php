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
	<title>Изтриване на Длопи</title>
</head>
<body>
<table style="width: 90%; border: 1px solid #ccc; margin: 5%;" class="table table-hover">
<?php

		require_once('connect.php');

			if (isset($_POST['submit'])) {

				$date = date('Y-m-d');

				$id = $_GET['id'];

				$update = "UPDATE dlops SET date_deleted = '$date' WHERE id = '$id'";

				$sql = mysqli_query($connect, $update) or die(mysqli_error());

				if ($sql) {

					echo '<tr><td colspan="2" align="center">Успешно изтрихте записа!</td></tr>';
					echo '<tr><td colspan="2" align="center"><a class="btn btn-primary" href="task9.php" role="button">Назад</a></td></tr>';

				}

			}

?>
	<tr>
		<td style='border: 1px solid #ccc;'>#</td><td style='border: 1px solid #ccc;'><b>Name</b></td><td style='border: 1px solid #ccc;'><b>Last Name</b></td><td style='border: 1px solid #ccc;'><b>Race</b></td><td style='border: 1px solid #ccc;'><b>Gender</b></td>
		<td style='border: 1px solid #ccc;'><b>Date of Birth</b></td><td style='border: 1px solid #ccc;'><b>weight</b></td><td style='border: 1px solid #ccc;'><b>status</b></td>
	</tr>
	<?php


  			$select_dlops = "SELECT * FROM dlops WHERE id = '$_GET[id]'";

  			$q = mysqli_query($connect, $select_dlops)or die(mysqli_error());

  			$r = mysqli_fetch_assoc($q);

  			echo '<tr><td style="border: 1px solid #ccc;">' . $r['id'] . '</td>';
			echo '<td style="border: 1px solid #ccc;">' . $r['first_name'] . '</td>';
			echo '<td style="border: 1px solid #ccc;">' . $r['last_name'] . '</td>';
			echo '<td style="border: 1px solid #ccc;">' . $r['race'] . '</td>';
			echo '<td style="border: 1px solid #ccc;">' . $r['gender'] . '</td>';
			echo '<td style="border: 1px solid #ccc;">' . $r['date_of_birth'] . '</td>';
			echo '<td style="border: 1px solid #ccc;">' . $r['weight'] . '</td>';
			echo '<td style="border: 1px solid #ccc;">' . $r['status'] . '</td></tr>';

	?>
<tr>
	<td colspan="2"  style="border: 1px solid #ccc;">
		<form method="post" action="">
			<button type="submit" name="submit" class="btn btn-danger">Delete</button>
		</form>
	</td>
</tr>
</table>


</body>
</html>