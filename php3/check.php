<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Задача 3 - html form - Проверка на продукти</title>
</head>
<body>
<form method="post" action="view_cart.php">
<?php
session_start();
error_reporting( error_reporting() & ~E_NOTICE );

	if ($_GET['check']) {

	  	$product = $_GET['product'];
		  if(!$_GET['product']) 
		  {
		  	
		    echo $_SESSION['user'] . ', не си избрал никакви продукти!';
		    echo '<p><a href="products.php">Списък с продуктите</a></p>';
		  } 
		  else
		  {
		    $N = count($product);
		 
		    echo 'Избра ' .  $N . 'бр. продукта<br />';
		    for ($i=0; $i < $N; $i++) { 
		    	
		    	$product_price[$i] = explode('_', $product[$i]);
				
				
				$sum_products = $sum_products + $product_price[$i][1];
				echo $product_price[$i][0]. '<br />';

		    }
		    if ($_SESSION['cart_maney'] > $sum_products) {
		    	
		    	?>
		    		<input type="hidden" name="sum" value="<?php echo $sum_products; ?>" />
		    		<input type="submit" name="sub" value="Продължи" />
  					</form>
		    	<?php
		    }else{
		    	echo 'За съжаление няма такава наличност в картата. Моля зареди';
		    	echo '<br /> <a href="cart.php">Зареди</a>';
		    }
		    echo $sum_products;
		    
		  }

	}

  ?>
  
</body>
</html>