<?php require_once('menu.php'); ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">   
    
	<title>Начало - Задача 1 б - php 8</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="custom.css">

  </head>
<body>
<ul class="menu">
	<?php
		menu($menu);
	?>
</ul>
<ol>
<?php
	menu($menu);
?>
</ol>
<!-- Split button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <?php
    	menu($menu);
    ?>
  </ul>
</div>

</body>
</html>