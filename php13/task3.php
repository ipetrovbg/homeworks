<?php
$conn = mysqli_connect('localhost', 'root', 'p8908271860', 'news');

mysqli_set_charset($conn, "utf8");

if (!$conn) {
	
	die("Connection failed: " . mysqli_connect_error());

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Новини</title>
</head>
<body>
<?php
if ($_GET) {

		$select_one_news = "SELECT * FROM news WHERE id_news = '$_GET[article]'";

		$sql = mysqli_query($conn, $select_one_news)or die(mysqli_error());

		if (mysqli_num_rows($sql) <= 0) {
			echo "Няма намерена новина!<br /><a href='task3.php'>Всички новини</a><br />";
			
		}
		$fetch_row = mysqli_fetch_assoc($sql);
		echo '<a href="task3.php">Назад</a><br />';
		echo '<h3>' . $fetch_row['title_news'] . '</h3>';
		echo '<div>' . $fetch_row['description_news'] . '</div>';

	}else{


	
		$select_news = "SELECT * FROM news";
		$query = mysqli_query($conn, $select_news)or die(mysqli_error());

		if (mysqli_num_rows($query) > 0) {
			
			while ($r = mysqli_fetch_assoc($query)) {
				
				$new_text = substr($r['description_news'], 0, 150);

				echo '<h3><a href="?article='.$r['id_news'].'">' . $r['title_news'] . '</a></h3>';
				echo '<div>' . $new_text . ' ... <br /><a href="?article='.$r['id_news'].'">Прочети повече ...</a></div>';

			}

		}
	}
		

?>
</body>
</html>