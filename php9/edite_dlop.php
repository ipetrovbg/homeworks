<?php

		require_once('connect.php');		


  			$select_dlops = "SELECT * FROM dlops WHERE id = '$_GET[id]'";

  			$q = mysqli_query($connect, $select_dlops)or die(mysqli_error());

  			$r = mysqli_fetch_assoc($q);

  			

	?>
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

	    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	  
	   	 <script>
		  $(function() {
		    $( "#datepicker" ).datepicker({
		      changeMonth: true,
		      changeYear: true
		    });

		    $( ".selector" ).datepicker({
			  dateFormat: "yy-mm-dd"
			});
		  });
		  </script>

	<meta charset="utf-8" />
	<title>Редактиране на <?php echo $r['first_name']; ?></title>
</head>
<body>


	
<form method="post" action="" class="form-inline">
	<table style="width: 90%; border: 1px solid #ccc; margin: 5%;" class="table table-hover">
	<?php

	if (isset($_POST['submit'])) {
		
		$first_name			= 		$_POST['first_name'];
		$last_name			= 		$_POST['last_name'];
		$race				= 		$_POST['race'];
		$gender				= 		$_POST['gender'];
		$date_of_birth		= 		$_POST['date_of_birth'];
		$weight				= 		$_POST['weight'];
		$status				= 		$_POST['status'];

		$upd = "UPDATE `dlops` SET `first_name`= '$first_name', `last_name`= '$last_name', `race`= '$race',	`gender`= '$gender', `date_of_birth`= '$date_of_birth',	`weight`= '$weight', `status`= '$status' WHERE id = '$_GET[id]'";

		 $go = mysqli_query($connect, $upd) or die(mysqli_error());

		 if ($go) {
		 	echo "<tr><td align='center' colspan='2'>Successfuly updated $r[first_name]</td></tr>";
		 	echo '<tr><td align="center" colspan="2"><a href="task9.php">All Dlops</a></td></tr>';
		 }

	}

?>
	<tr><td style="border: 1px solid #ccc;"><label for="exampleInputName2">Name</label></td>
	<td><input name="first_name" type="text" class="form-control" id="exampleInputName2" value="<?php echo $r['first_name']; ?>"></td></tr>

	<tr><td style="border: 1px solid #ccc;"><label for="exampleInputName2">Last Name</label></td>
	<td><input name="last_name" type="text" class="form-control" id="exampleInputName2" value="<?php echo $r['last_name']; ?>"></td></tr>

	<tr><td style="border: 1px solid #ccc;"><label for="exampleInputName2">Race</label></td>
	<td><select name="race" class="form-control">
		<?php

		$select_race = "SELECT * FROM races";
		$query = mysqli_query($connect, $select_race)or die(mysqli_error());
		if (mysqli_num_rows($query) > 0) {
			
			while ($row = mysqli_fetch_assoc($query)) {

				if ($row['race'] == $r['race']) {

					echo "<option selected >$row[race]</option>";

				}else{

					echo "<option>$row[race]</option>";

				}
				
			}
		}

		?>
	</select></td></tr>

	<tr><td style="border: 1px solid #ccc;"><label for="exampleInputName2">Gender</label></td>
	<td><select name="gender" class="form-control">
		<?php

		if ($r['gender'] == 'male') {
			echo "<option selected>male</option>";
		}else{
			echo "<option>male</option>";
		}
		if ($r['gender'] == 'female') {
			echo "<option selected>female</option>";
		}else{
			echo "<option>female</option>";
		}

		?>
	</select></td></tr>

	<tr><td style="border: 1px solid #ccc;"><label for="exampleInputName2">Date of Birth</label></td>
	<td><input name="date_of_birth" type="text" id="datepicker" size="30" class="form-control" id="exampleInputName2" value="<?php echo $r['date_of_birth']; ?>"></td></tr>

	<tr><td style="border: 1px solid #ccc;"><label for="exampleInputName2">Weight</label></td>
	<td><input name="weight" type="text" class="form-control" id="exampleInputName2" value="<?php echo $r['weight']; ?>"></td></tr>

	<tr><td style="border: 1px solid #ccc;"><label for="exampleInputName2">Status</label></td>
	<td><select name="status" class="form-control">
	<?php

	$select_status = "SELECT * FROM statuses";
		$query_status = mysqli_query($connect, $select_status)or die(mysqli_error());
		if (mysqli_num_rows($query_status) > 0) {
			
			while ($ro = mysqli_fetch_assoc($query_status)) {

				if ($ro['status'] == $r['status']) {

					echo "<option selected >$ro[status]</option>";

				}else{

					echo "<option>$ro[status]</option>";

				}
				
			}
		}

	?>
	</select></td></tr>

	<tr><td colspan="2" style="border: 1px solid #ccc;">
	<button type="submit" name="submit" class="btn btn-primary">Edite</button></td></tr>
</form>

</body>
</html>