<?php

$upp = "ABCDEFGHIKLMNOPQRSTUVXYZ";
$count_upp = strlen($upp);

$lo = "abcdefghiklmnopqrstuvxyz";
$count_lo = strlen($lo);

$digit = "0123456789";
$count_digit = strlen($digit);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Като използвате Bootstrap, да се отпечатат последователно в 3 колони: всички малки букви, всички главни

букви и всички цифри.</title>
</head>
<body>

<div class="row">
	  <div class="col-md-4">
	  	<div class="col">
	  		<?php

	  		for ($i=0; $i < $count_upp; $i++) { 
	  			echo $upp[$i] . '<br />';
	  		}

	  		?>
	  	</div>
	  </div>
	  <div class="col-md-4 ">
	  <div class="col">
	  	<?php

	  		for ($i=0; $i < $count_lo; $i++) { 
	  			echo $lo[$i] . '<br />';
	  		}

	  		?>
	  </div>
	  </div>
	  <div class="col-md-4">
	  	<div class="col">
	  	<?php

	  		for ($i=0; $i < $count_digit; $i++) { 
	  			echo $digit[$i] . '<br />';
	  		}

	  		?>
	  </div>
	  </div>
	</div>

</body>
</html>